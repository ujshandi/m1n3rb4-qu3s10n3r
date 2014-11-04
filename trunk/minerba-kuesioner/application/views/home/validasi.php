
<style type="text/css">
.uibutton {
	border-color: #73b4ce ;	
	background-color: #c2e3f0;
	text-shadow:0 1px 0 #ffffff;
	color: #666666;
	background-image:none;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);

}
.uibutton:hover ,.uibutton:focus, .uibutton:active{
	border-color: #73b4ce;
	color: #333333;
	-webkit-box-shadow: rgba(0, 0, 0, 0.35) 1px 1px 1px;
	background-color: #a9daed;

}
.uibuttonactive {
	border-color: #73b4ce;
	color: #666666;
	background-color: #a9daed;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 1px 1px 8px #84c5de;
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 1px 1px 8px #84c5de;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 1px 1px 8px #84c5de;
}
  input[type=text], input[type=password], .fileupload 
  	{
  	width: 150%;
	max-width:150%;	
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
.uibutton1 {	border-color: #73b4ce ;	
	background-color: #c2e3f0;
	text-shadow:0 1px 0 #ffffff;
	color: #666666;

	background-image:none;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

</style>

<section class="cols">
	<?php echo form_open('konsultasi/validasi'); ?>
					<div class="col">
						<h3>Form Konsultasi</h3>
                        <table width="435" border="0">
  <tr>
    <td width="192" height="35">Nama</td>
    <td width="16">:</td>
    <td width="213"><input type="text" name="nama" class="medium"/></td>
  </tr>
  <tr>
    <td height="35">Unit Kerja / Bidang / Seksi</td>
    <td>:</td>
    <td><input type="text" name="bidang" class="medium"/></td>
  </tr>
  <tr>
    <td height="35">Jabatan</td>
    <td>:</td>
    <td><input type="text" name="jabatan" class="medium"/></td>
  </tr>
  <tr>
    <td height="35">Pendidikan Terakhir</td>
    <td>:</td>
    <td><input type="text" name="pendidikan" class="medium"/></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="" id="submit" /></td>
  </tr>
                      </table>
					</div>
					<div class="cl">&nbsp;</div>
	<?php echo form_close();?>
</section>	
