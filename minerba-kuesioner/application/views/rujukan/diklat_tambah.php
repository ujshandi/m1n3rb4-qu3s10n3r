<div class="widget">
                <div class="header"><span><span class="ico gray window"></span>  Form Diklat  </span></div> 
                    <div class="content">
                        <div class="boxtitle"><span class="ico gray audio_knob"></span> Form input data diklat <span class="netip"></span></div>
                 
<?php if($ket == 'tambah') { ?>
<form action="<?php echo base_url(); ?>rujukan/diklat/simpan" method="post" id="diklat">                                                              
<table width="100%" border="0" align="center">
  <tr>
    <td width="10%" align="left"><label> Judul Diklat </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%"><div><input type="text" name="judul_diklat" class="validate[required] large" ></div></td>
  </tr>
  <tr>
  <td width="10%" align="left"><label> Jenis Diklat </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%">
  <div>
    
        <select data-placeholder="Pilih Jenis Diklat..." class="chzn-select" tabindex="2" name="jenis_diklat">
          <option value="" />
          <option value="1" />Diklat Teknis
          <option value="2" />Diklat Terstruktur
          <option value="3" />Diklat Prajabatan
          
        </select>       
    </div>
    </td>
  </tr>
  <tr>
    <td align="left"><label> Tahun </label></td>
    <td align="center">:</td>
    <td><div><input type="text" name="tahun"  class="validate[required] small" ></div></td>
  </tr>
  <tr>
    <td align="left"><label> Angkatan </label></td>
    <td align="center">:</td>
    <td><div><input type="text" name="angkatan"  class="validate[required] small" ></div></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><div><input type="submit" value="Simpan" class="uibutton loading" title="Simpan" rel="1"><input type="reset" value="Batal" class="uibutton special"></div></td>
  </tr>
</table>                                          
</form>
<?php } elseif($ket == 'edit') { ?> 
<form action="<?php echo base_url(); ?>rujukan/diklat/edit" method="post" id="diklat">                                                              
<table width="100%" border="0" align="center">
  <tr>
    <td width="10%" align="left"><label> Judul Diklat </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%"><div><input type="text" name="judul_diklat" class="validate[required] large" value="<?php echo $result->judul_diklat; ?>" ></div></td>
  </tr>
  <tr>
  <td width="10%" align="left"><label> Jenis Diklat </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%">
  <div>
    
        <select data-placeholder="Pilih Jenis Diklat..." class="chzn-select" tabindex="2" name="jenis_diklat">
          <option value="<?php echo $result->jenis_diklat;  ?>" />
          <?php if($result->jenis_diklat = 1) { echo 'Teknis'; } 
          elseif ($result->jenis_diklat = 2) { echo 'Terstruktur'; } 
          elseif ($result->jenis_diklat = 3) { echo 'Prajabatan'; }  else {echo '';} ?> 
          <option value="1" />Diklat Teknis
          <option value="2" />Diklat Terstruktur
          <option value="3" />Diklat Prajabatan
          
        </select>       
    </div>
    </td>
  </tr>
  <tr>
    <td align="left"><label> Tahun </label></td>
    <td align="center">:</td>
    <td><div><input type="text" name="tahun"  class="validate[required] small" value="<?php echo $result->tahun; ?>"></div></td>
  </tr>
  <tr>
    <td align="left"><label> Angkatan </label></td>
    <td align="center">:</td>
    <td><div><input type="text" name="angkatan"  class="validate[required] small" value="<?php echo $result->angkatan; ?>"></div></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><div><input type="submit" value="Simpan" class="uibutton loading" title="Simpan" rel="1"><input type="reset" value="Batal" class="uibutton special"></div></td>
  </tr>
</table>                                          
</form>
<?php } ?>
          
</div>
</div>


    