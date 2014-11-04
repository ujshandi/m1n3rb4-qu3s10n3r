

<section class="cols">
	<?php echo form_open('konsultasi/tambah_data'); ?>
<input type="hidden" class="inp-form" name="kode_konsultasi" value="<?php echo $kode->kode_konsultasi + 1; ?>" /> 
<table width="950" border="0" cellpadding="0" cellspacing="0"  id="id-form">
	<h3>Form Konsultasi</h3>
		<?php foreach($result->result() as $data) { ?>
		<tr>
			<th width="500" height="34" valign="top"><div align="left">Apakah  <?php echo $data->nama_permasalahan; ?> ?
			<input type="hidden" class="inp-form" name="id_permasalahan[]" value="<?php echo $data->id_permasalahan; ?>" />
			<select  name ="jawaban[]">
			  <option value="ya">Ya</option>
			  <option value="tidak">Tidak</option>
			  </select>	
			</div></th>
			
			
		</tr>
		<?php } ?>
		
		<tr>
			
				<td height="33">
					 	<div align="left">
					 	  <input type="submit" value="" id="submit" />
		 	    </div></td>
		
		</tr>
	
</table>
<?php echo form_close();?>
</section>	
