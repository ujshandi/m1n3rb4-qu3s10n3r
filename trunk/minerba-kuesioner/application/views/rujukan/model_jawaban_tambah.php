<div class="widget">
                <div class="header"><span><span class="ico gray window"></span>  Form Model Jawaban  </span></div> 
                    <div class="content">
                        <div class="boxtitle"><span class="ico gray audio_knob"></span> Form input data model jawaban <span class="netip"></span></div>
                 
                        
<form action="<?php echo base_url(); ?>rujukan/model_jawaban/simpan" method="post" id="model_jawaban">                                                          
<table width="100%" border="0" align="center">
  <tr>
    <td width="10%" align="left"><label> Nama </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%"><div><input type="text" name="nama" ></div></td>
  </tr>
  <tr>
    <td align="left"><label> Singkatan </label></td>
    <td align="center">:</td>
    <td><div><input type="text" name="singkatan"  class="validate[required] medium"></div></td>
  </tr>
  <tr>
    <td align="left"><label> Petunjuk </label></td>
    <td align="center">:</td>
    <td><div> <textarea name="petunjuk" id="editor2" class="validate[required] editor" cols="" rows=""></textarea></div></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><div><input type="submit" value="Simpan" class="uibutton loading" title="Simpan" rel="1"><input type="reset" value="Batal" class="uibutton special"></div></td>
  </tr>
</table>

                              
                            
                            
</form>
          
                    </div>
</div>


    