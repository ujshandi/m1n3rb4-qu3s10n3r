
<div class="widget">
            <div class="header"><span><span class="ico  gray random"></span> Form Diklat </span></div>
            <div class="content">

                    <form /> 
            <div class="tableName">
         
            <a class="uibutton loading" title="Tambah Data" href="<?php echo base_url(); ?>rujukan/diklat">Tambah Data</a>

<table class="display data_table2">
  <thead>
    <tr>
      <th><div class="th_wrapp">No</div></th>
      <th><div class="th_wrapp">Judul Diklat</div></th>
      <th><div class="th_wrapp">Tahun</div></th>
      <th><div>Angkatan</div></th>
      <th><div class="th_wrapp">Options</div></th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach($result->result() as $datafield){ ?>
    <tr class="odd gradeX">
       <td><?php echo $no; ?></td>
       <td><?php echo $datafield->judul_diklat; ?></td>
       <td><?php echo $datafield->tahun; ?></td>
       <td><?php echo $datafield->angkatan;?></td>
      <td>
        <!-- <span class="tip">
        <a  title="Lihat" href="<?php echo base_url(); ?>rujukan/diklat/pilihdata/<?php echo $datafield->diklat_id; ?>" class="fancy"><img src="<?php echo base_url(); ?>public/admin/images/icon/color_18/eye.png" />  </a>
        </span> -->
        <span class="tip">
        <a title="Edit" href="<?php echo base_url(); ?>rujukan/diklat/tampil_ubah/<?php echo $datafield->diklat_id;?>"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_edit.png" />  </a>
        </span> 
        <span class="tip">
        <a id="delete_row" href="<?php echo base_url(); ?>rujukan/diklat/hapus/<?php echo $datafield->diklat_id;?>" name="<?php echo $datafield->judul_diklat; ?>" title="Delete"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_delete.png" /></a>
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

