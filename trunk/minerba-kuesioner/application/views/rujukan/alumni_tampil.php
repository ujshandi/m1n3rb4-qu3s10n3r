<div class="widget">
            <div class="header"><span><span class="ico  gray random"></span> Form alumni </span></div>
            <div class="content">

                    <form /> 
            <div class="tableName">
               <a class="uibutton loading" title="Tambah Data" href="<?php echo base_url(); ?>rujukan/alumni">Tambah Data</a>

<table class="display data_table2">
  <thead>
    <tr>
      <th><div class="th_wrapp">No</div></th>
      <th><div class="th_wrapp">NIK</div></th>
      <th><div class="th_wrapp">Nama</div></th>
      <th><div class="th_wrapp">Instansi</div></th>
      <th><div class="th_wrapp">Options</div></th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach($result->result() as $datafield){ ?>
    <tr class="odd gradeX">
       <td><?php echo $no; ?></td>
       <td><?php echo $datafield->nik; ?></td>
       <td><?php echo $datafield->nama;?></td>
       <td><?php echo $datafield->instansi;?></td>
      <td>
        <span class="tip">
        <a title="Edit" href="<?php echo base_url(); ?>rujukan/alumni/tampil_ubah/<?php echo $datafield->alumni_id;?>"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_edit.png" /></a>
        </span> 
        <span class="tip">
        <a a id="delete_row" href="<?php echo base_url(); ?>rujukan/alumni/hapus/<?php echo $datafield->alumni_id;?>" name="<?php echo $datafield->nama; ?>" title="Delete"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_delete.png" /></a>
        </span> 
      </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>
            </div>
          </form>
                    
                        </div><!-- End content -->
                    </div>