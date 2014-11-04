<div class="widget">
                <div class="header"><span><span class="ico gray window"></span>  Form Kuesioner - Pertanyaan  </span></div> 
                    <div class="content">
                        <div class="boxtitle"><span class="ico gray audio_knob"></span> Form input pertanyaan kuesioner <span class="netip"></span></div>
                 
                        
<form action="<?php echo base_url(); ?>rujukan/model_jawaban/simpan" method="post" id="model_jawaban">                                                          
<table width="100%" border="0" align="center">
  
  <tr>
    <td width="14%" align="left"><label> Model Jawaban </label></td>
    <td width="2%" align="center">:</td>
    <td width="84%">
    <div>
    
        <select data-placeholder="Pilih Model Jawaban..." class="chzn-select" tabindex="2" name="model_id">
          <option value="" /> 
          <?php foreach($result->result() as $datafield){ ?>
          <option value="<?php echo $datafield->model_id; ?>" /><?php echo $datafield->singkatan; ?> - <?php echo $datafield->nama; ?>
          <?php  } ?> 
        </select>       
    </div>

    </td>
  </tr>
  <tr>
    <td align="left"><label> Pertanyaan </label></td>
    <td align="center">:</td>
    <td>
      <div>
        <textarea name="Textarealimit" id="Textarealimit" class="large" cols="" rows=""></textarea>
        <span class="f_help"> Limit chars <span class="limitchars">140</span></span>
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
          
                    </div>
</div>


    