<section class="cols">
<h3>Hasil Konsultasi</h3>
<!-- start id-form -->
<table width="936" border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<?php
				$nip = $this->session->userdata('nip');
				$nama = $this->session->userdata('nama');
		?>
		<tr>
			<th width="426" valign="top"><div align="left">NIP : <?php echo $nip; ?></div></th>
		</tr>
		<tr>
			<th height="19" valign="top"><div align="left">Nama : <?php echo $nama; ?></div></th>
		</tr>
        <tr>
			<th height="19" valign="top"></th>
		</tr>
		<tr>
			<th height="19" valign="top"><div align="left">Permasalahan : </div></th>
		</tr>
		<?php foreach($permasalahan->result() as $data) { ?>
		<?php
					$query="select * from permasalahan where id_permasalahan='".$data->id_permasalahan."'";
					$hasil=$this->db->query($query)->row();
					?>
		<tr>
			<th height="18"><div align="left"><?php echo $hasil->nama_permasalahan;?></div></th>
		</tr>
		<?php } ?>
         <tr>
			<th height="19" valign="top"></th>
		</tr>
		<tr>
			<th valign="top"><div align="left">Jenis Kerusakan : <?php echo $penanganan->nama_jeniskerusakan; ?></div></th>
		</tr>
		<tr>
			<th valign="top"><div align="left">Solusi : <?php echo $penanganan->nama_jeniskerusakan; ?></div></th>
		</tr>
		<tr>
		  <th valign="top"><div align="left"><a href="<?php echo base_url(); ?>konsultasi" class="blue-btn">Kembali ke Home</a></div>          </th>
    </tr>
		
	
</table>
</section>
<!-- end id-form  -->