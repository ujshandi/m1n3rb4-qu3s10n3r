
<div class="widget">
            <div class="header"><span><span class="ico  gray random"></span> Form instansi </span></div>
            <div class="content">

                    <form /> 
            <div class="tableName">
            
            <a class="uibutton loading" title="Tambah Data" href="<?php echo base_url(); ?>rujukan/instansi">Tambah Data</a>

<table class="display data_table2">
  <thead>
    <tr>
      <th><div class="th_wrapp">No</div></th>
      <th><div class="th_wrapp">Nama instansi</div></th>
      <th><div class="th_wrapp">Jenis Instansi</div></th>
      <th><div class="th_wrapp">Edit</div></th>
      <th><div class="th_wrapp">Hapus</div></th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; foreach($result->result() as $datafield){ ?>
    <tr class="odd gradeX">
       <td><?php echo $no; ?></td>
       <td><?php echo $datafield->nama_instansi; ?></td>
       <td><?php echo $datafield->jenis_instansi;?></td>
      <td>
        <!-- <span class="tip">
        <a  title="Lihat" href="<?php echo base_url(); ?>rujukan/instansi/pilihdata/<?php echo $datafield->instansi_id; ?>" class="fancy"><img src="<?php echo base_url(); ?>public/admin/images/icon/color_18/eye.png" />  </a>
        </span> -->
        <span class="tip">
        <a title="Edit" href="<?php echo base_url(); ?>rujukan/instansi/tampil_ubah/<?php echo $datafield->instansi_id;?>"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_edit.png" />  </a>
        </span>
        </td>
        <td> 
        <span class="tip">
        <a id="delete_row" href="<?php echo base_url(); ?>rujukan/instansi/hapus/<?php echo $datafield->instansi_id;?>" name="<?php echo $datafield->nama_instansi; ?>" title="Delete"><img src="<?php echo base_url(); ?>public/admin/images/icon/icon_delete.png" /></a>
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

