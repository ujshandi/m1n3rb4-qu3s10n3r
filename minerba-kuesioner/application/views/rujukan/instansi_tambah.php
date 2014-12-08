<div class="widget">
                <div class="header"><span><span class="ico gray window"></span>  Form instansi  </span></div> 
                    <div class="content">
                        <div class="boxtitle"><span class="ico gray audio_knob"></span> Form input data instansi <span class="netip"></span></div> 

<?php if($ket == 'tambah') { ?> 
<form action="<?php echo base_url(); ?>rujukan/instansi/simpan" method="post" id="instansi">                                                          
<table width="100%" border="0" align="center">
  <tr>
    <td width="10%" align="left"><label> Nama instansi </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%"><div><input type="text" name="nama_instansi" class="validate[required] large" value=""></div></td>
  </tr>
  <tr>
  <td width="10%" align="left"><label> Jenis instansi </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%">
  <div>
        <select data-placeholder="Pilih Jenis instansi..." class="chzn-select" tabindex="2" name="jenis_instansi">
          <option value="" />
          <option value="1" />ESDM
          <option value="2" />PEMDA
          <option value="3" />Industri
          <option value="4" />Lainnya
        </select>       
    </div>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><div><input type="submit" value="Simpan" class="uibutton loading" title="Simpan" rel="1"><input type="reset" value="Batal" class="uibutton special"></div></td>
  </tr>
</table>                              
</form>

<?php } elseif($ket == 'edit') { ?> 
                      
<form action="<?php echo base_url(); ?>rujukan/instansi/edit" method="post" id="instansi">                                                           
<table width="100%" border="0" align="center">

  <tr>
    <td width="10%" align="left"><label> Instansi ID </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%"><div><input type="text" name="instansi_id" disabled="disabled" class="large" value="<?php echo $result->instansi_id; ?>"></div></td>
  </tr>
  <tr>
    <td width="10%" align="left"><label> Nama instansi </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%"><div><input type="text" name="nama_instansi" class="large" value="<?php echo $result->nama_instansi; ?>"></div></td>
  </tr>
  <tr>
  <td width="10%" align="left"><label> Jenis instansi </label></td>
    <td width="4%" align="center">:</td>
    <td width="86%">
  <div>
    
        <select data-placeholder="Pilih Jenis instansi..." class="chzn-select" tabindex="2" name="jenis_instansi">
          <option value="<?php echo $result->jenis_instansi;  ?>" />
          <?php if($result->jenis_instansi = 1) { echo 'ESDM'; } 
          elseif ($result->jenis_instansi = 2) { echo 'PEMDA'; } 
          elseif ($result->jenis_instansi = 3) { echo 'Industri'; }
          else { echo 'Lainnya'; }  ?> 
          <option value="1" />ESDM
          <option value="2" />PEMDA
          <option value="3" />Industri
          <option value="4" />Lainnya
        </select>       
    </div>
    </td>
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


    