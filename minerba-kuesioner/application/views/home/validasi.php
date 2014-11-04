<style type="text/css">
@import url("buttons.css");
  input[type=text], input[type=password], .fileupload 
  	{
	background-position: 5px 5px;
			border: solid 1px #dddddd;
	outline: 0;
	line-height: 28px;
	height: 28px;
	padding: 0px 7px 0px 7px;
	-moz-box-shadow:1px 1px 2px #f5f5f5;
	-webkit-box-shadow:1px 1px 2px #f5f5f5;
	box-shadow:1px 1px 2px #f5f5f5;
	-webkit-transition: all 0.4s ease 0s;
	-moz-transition: all 0.4s ease 0s;
	-o-transition: all 0.4s ease 0s;
	transition: all 0.4s ease 0s;
	}

input[type=text]:focus, input[type=password]:focus, textarea:focus, .fileupload:focus 
	{
	border-color: #C9C9C9;
	-moz-box-shadow:0px 0px 8px #dddddd;
	-webkit-box-shadow:0px 0px 8px #dddddd;
	box-shadow:0px 0px 8px #dddddd;
	}

input[type=text]:disabled, input[type=password]:disabled 
	{
	background: -webkit-gradient(linear, left top, left 25, from(#EEEEEE), color-stop(4%, #EEEEEE), to(#EEEEEE));
	background: -moz-linear-gradient(top, #EEEEEE, #EEEEEE 1px, #EEEEEE 25px);
	color: #666;
	}

input[type=text].error, input[type=password].error 
	{
	height: 30px;
	border: 1px #F00 solid;
	background-position: 5px 5px;
	padding-left: 5px;
	}
</style>

<section class="cols">
	<?php echo form_open('konsultasi/validasi'); ?>
					<div class="col">
						<h3>Form Konsultasi</h3>
						Masukkan NIP : <input type="text" />
						</br>
						<input type="submit" value="Import" class="uibutton loading" title="Import" rel="1">
					</div>
					<div class="cl">&nbsp;</div>
	<?php echo form_close();?>
</section>	
