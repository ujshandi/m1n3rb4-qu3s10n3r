<script  type="text/javascript" >
$(function(){
        var url;
        newData<?=$objectId;?> = function (){  
            $('#dlg<?=$objectId;?>').dialog('open').dialog('setTitle','Tambah Pengguna');  
            $('#fm<?=$objectId;?>').form('clear');  
            url = base_url+'admin/user/save/add';  
        }
        //end newData 
        clearFilter<?=$objectId;?> = function (){
            $("#filter_tahun<?=$objectId;?>").val('');
            $("#filter_e1<?=$objectId;?>").val('');	
            $("#filter_e2<?=$objectId;?>").val('');	
            searchData<?=$objectId;?>();
        }

        getUrl<?=$objectId;?> = function (tipe){
                //jika tipe pdf&excel kirim jg paging datanya agar sesuai dengan grid				
            var paging="";
            if ((tipe==2)||(tipe==3)){
                var page =  $('#dg<?=$objectId;?>').datagrid('options').pageNumber;
                var rows = $('#dg<?=$objectId;?>').datagrid('options').pageSize;
        //	alert(page);
                if (rows==null) rows = "-1";
                if (page==null) page = "-1";
                paging = "/"+page+"/"+rows;						
            }


            //ambil nilai-nilai filter
    //	var file1 = $("#filter_e1<?=$objectId;?>").val();
    //	var file2 = $("#filter_e2<?=$objectId;?>").val();
            var filapptype = $("#filter_apptype<?=$objectId;?>").val();
            var fillevel = $("#filter_level_id<?=$objectId;?>").val();

             if(filapptype==null) filapptype ="-1";				
             if(fillevel==null) fillevel ="-1";				

            if (tipe==1){
                return "<?=base_url()?>admin/user/grid/"+"/"+filapptype+"/"+fillevel;
            }
            else if (tipe==2){
                return "<?=base_url()?>admin/user/pdf/"+"/"+filapptype+"/"+fillevel+paging;
            }else if (tipe==3){
                return "<?=base_url()?>admin/user/excel/"+"/"+filapptype+"/"+fillevel+paging;
            }

        }

        searchData<?=$objectId;?> = function (){
            $('#dg<?=$objectId;?>').datagrid({
                url:getUrl<?=$objectId;?>(1),
                queryParams:{lastNo:'0'},	
                pageNumber : 1,
                onLoadSuccess:function(data){
                        $('#dg<?=$objectId;?>').datagrid('options').queryParams.lastNo = data.lastNo;

                }
            });
        }			
        //end searhData 

        editData<?=$objectId;?> = function (){
            var row = $('#dg<?=$objectId;?>').datagrid('getSelected');
            $('#fm<?=$objectId;?>').form('clear');  
            //alert(row.dokter_kode);

            if (row){
                $('#dlg<?=$objectId;?>').dialog('open').dialog('setTitle','Edit Pengguna');
                $('#fm<?=$objectId;?>').form('load',row);
                setE2<?=$objectId?>(row.unit_kerja_E2);
                //alert(row.unit_kerja_E2);
                //setTimeout(function(){
                //},100);
                url = base_url+'admin/user/save/edit/'+row.user_id;//+row.id;//'update_user.php?id='+row.id;
            }
        }
        //end editData

        printData<?=$objectId;?>=function(){
            window.open(getUrl<?=$objectId;?>(2));
        }

        saveData<?=$objectId;?>=function(){
            $('#fm<?=$objectId;?>').form('submit',{
                url: url,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                        //alert(result);
                    var result = eval('('+result+')');
                    if (result.success){
                            /* $.messager.show({
                                    title: 'Sucsees',
                                    msg: result.msg
                            }); */
                        $('#dlg<?=$objectId;?>').dialog('close');		// close the dialog
                        $('#dg<?=$objectId;?>').datagrid('reload');	// reload the user data
                    } else {
                        $.messager.show({
                                title: 'Error',
                                msg: result.msg
                        });
                    }
                }
            });
        }
        //end saveData

        setTimeout(function(){
                searchData<?=$objectId?>();
        },100);
 });
</script>
<style type="text/css">
        #fm<?=$objectId;?>{
                margin:0;
                padding:10px 30px;
        }
        .ftitle{
                font-size:14px;
                font-weight:bold;
                color:#666;
                padding:5px 0;
                margin-bottom:10px;
                border-bottom:1px solid #ccc;
        }
        .fitem{
                margin-bottom:5px;
        }
        .fitem label{
                display:inline-block;
                width:80px;
        }
  .fsearch{
        background:#fafafa;
        border-radius:5px;
        -moz-border-radius:0px;
        -webkit-border-radius: 5px;
        -moz-box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
        filter: progid:DXImageTransform.Microsoft.Blur(pixelRadius=2,MakeShadow=false,ShadowOpacity=0.2);
        margin-bottom:10px;
        border: 1px solid #99BBE8;
    color: #15428B;
    font-size: 11px;
    font-weight: bold;
    position: relative;
  }
  .fsearch div{
        background:url('<?=base_url();?>public/css/themes/gray/images/panel_title.gif') repeat-x;
        height:200%;
        border-bottom: 1px solid #99BBE8;
        color:#15428B;
        font-size:10pt;
        text-transform:uppercase;
    font-weight: bold;
    padding: 5px;
    position: relative;
  }
  .fsearch table{
    padding: 15px;
  }
  .fsearch label{
        display:inline-block;
        width:60px;
  }
        .fitemArea{
                margin-bottom:5px;
                text-align:left;
                /* border:1px solid blue; */
        }
        .fitemArea label{
                display:inline-block;
                width:84px;
                margin-bottom:5px;
        }
</style>
    <div id="tb<?=$objectId;?>" style="height:auto">
      <table border="0" cellpadding="1" cellspacing="1" width="100%">
      <tr>
            <td>
              <div class="fsearch" style="display:none" >
                    <table border="0" cellpadding="1" cellspacing="1">
                    <tr>
                        <td >
                            Level:
                        </td>
                        <td>
                              <?php $this->group_level_model->getListLevelFilter($objectId,$this->session->userdata('level'))?>
                        </td>
                    </tr>

                    <tr height="5px">
                            <td colspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="right" valign="top" colspan="5">
                            <a href="#" class="easyui-linkbutton" onclick="clearFilter<?=$objectId;?>();" iconCls="icon-reset">Reset</a>
                            <a href="#" class="easyui-linkbutton" onclick="searchData<?=$objectId;?>();" iconCls="icon-search">Search</a>
                      </td>
                    </tr>			
                    </table>
              </div>
            </td>
      </tr>
      </table>
      <div style="margin-bottom:5px">
            <? if ($this->sys_menu_model->cekAkses("ADD;",302,$this->session->userdata('group_id'),$this->session->userdata('level_id'))) {?>
                    <a href="#" onclick="newData<?=$objectId;?>();" class="easyui-linkbutton" iconCls="icon-add" plain="true">Tambah</a>  
            <?}?>
            <? if ($this->sys_menu_model->cekAkses("EDIT;",302,$this->session->userdata('group_id'),$this->session->userdata('level_id'))) {?>
                    <a href="#" onclick="editData<?=$objectId;?>();" class="easyui-linkbutton" iconCls="icon-edit" plain="true">Edit</a>
            <?}?>
            <? if ($this->sys_menu_model->cekAkses("PRINT;",302,$this->session->userdata('group_id'),$this->session->userdata('level_id'))) {?>
                    <a href="#" onclick="printData<?=$objectId;?>();" class="easyui-linkbutton" iconCls="icon-print" plain="true">Print</a>
            <?}?>
      </div>
    </div>
	
	<table id="dg<?=$objectId;?>" style="height:auto;width:auto" title="Data Pengguna" toolbar="#tb<?=$objectId;?>" fitColumns="true" singleSelect="true" rownumbers="true" pagination="true">
	  <thead>
	  <tr>	
		<th field="user_name" sortable="true" width="30">Username</th>
		<th field="full_name" sortable="true" width="50">Nama Lengkap</th>
	  </tr>
	  </thead>  
	</table>

	 <!-- AREA untuk Form Add/EDIT >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  -->
	
	<div id="dlg<?=$objectId;?>" class="easyui-dialog" style="width:650px;height:250px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
	  <div class="ftitle">Tambah/Edit Pengguna</div>
	  <form id="fm<?=$objectId;?>" method="post">
		
		<input name="user_id" type="hidden">
		
		<div class="fitem">
		  <label style="width:120px;vertical-align:top">Username:</label>
		  <input name="user_name" class="easyui-validatebox" required="true">
		</div>
		<div class="fitem">
		  <label style="width:120px;vertical-align:top">Nama Pengguna:</label>
		  <input name="full_name" class="easyui-validatebox" required="true" size="50">
		</div>
		<div class="fitem">
		  <label style="width:120px;vertical-align:top">Password:</label>
		  <input name="passwd" type="password" class="easyui-validatebox" required="true">
		</div>
	  </form>
    </div>
    <div id="dlg-buttons">
	  <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveData<?=$objectId;?>()">Simpan</a>
	  <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg<?=$objectId;?>').dialog('close')">Batal</a>
    </div>
