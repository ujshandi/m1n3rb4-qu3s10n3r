
<div class="widget">
            <div class="header"><span><span class="ico  gray random"></span> Form alumni </span></div>
            <div class="content">

                    <form /> 
            <div class="tableName">
              <h4>Tampil data model jawaban</h4>

<table class="display data_table2">
  <thead>
    <tr>
      <th><div class="th_wrapp">No</div></th>
      <th><div class="th_wrapp">Model ID</div></th>
      <th><div class="th_wrapp">Nama</div></th>
      <th><div class="th_wrapp">Singkatan</div></th>
      
      <th><div class="th_wrapp">Options</div></th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach($result->result() as $datafield){ ?>
    <tr class="odd gradeX">
       <td><?php echo $no; ?></td>
       <td><?php echo $datafield->model_id; ?></td>
       <td><?php echo $datafield->nama; ?></td>
       <td><?php echo $datafield->singkatan;?></td>
      <td>
        <span class="tip">
        <a  title="Lihat" href="<?php echo base_url(); ?>rujukan/model_jawaban/pilihdata/<?php echo $datafield->model_id; ?>" class="fancy"><img src="<?php echo base_url(); ?>public/admin/images/icon/color_18/eye.png" />  </a>
        </span>
        <span class="tip">
        <a title="Edit" href="<?php echo base_url(); ?>rujukan/model_jawaban/tampil_ubah/<?php echo $datafield->model_id;?>"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_edit.png" />  </a>
        </span> 
        <span class="tip">
        <a id="delete_row" href="<?php echo base_url(); ?>rujukan/model_jawaban/hapus/<?php echo $datafield->model_id;?>" name="<?php echo $datafield->nama; ?>" title="Delete"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_delete.png" /></a>
        </span> 
      </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>
            </div>
          </form>
                    
                        </div>
                    </div>

