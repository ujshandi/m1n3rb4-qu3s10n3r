
<section class="cols">
	<?php echo form_open('konsultasi/validasi'); ?>
					<div class="col">
						<h3>Form Konsultasi</h3>
						Pilih salah satu komponen yang bermasalah </br>
						<?php foreach ($result->result() as $komponen) { ?>
							<a href="<?php echo base_url(); ?>konsultasi/tampil_pertanyaan/<?php echo $komponen->id_komponen ?>"><?php echo $komponen->nama_komponen ?></a></br>
						<?	} ?>
						 
					</div>
					<div class="cl">&nbsp;</div>
	<?php echo form_close();?>
</section>	