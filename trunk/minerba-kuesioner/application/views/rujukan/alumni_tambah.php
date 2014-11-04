 <div class="widget">
                <div class="header"><span><span class="ico gray window"></span>  Form Alumni  </span></div> 
                    <div class="content">
                        <div class="boxtitle"><span class="ico gray audio_knob"></span> Form input data alumni  <span class="netip"></span></div>
              
                        <!-- <form id="demo" /> 
                            <div class="section">                               

                                <label> NIP <small>Nomor Induk Pegawai</small></label>
                                <div><input type="text" name="nik"  class=" medium"></div>
    
                                <label> Nama Pegawai </label>
                                <div><input type="text" name="nama"  class=" medium"></div>
    
                                <label> Tempat Lahir </label>
                                <div><input type="text" name="tempat_lahir"  class=" medium"></div>
    
                                <label>Tanggal Lahir <small></small></label>
                                <div>
                                  <input id="datepick" class="datepicker" readonly="readonly" name="tgl_lahir"/>
                                  <span class="f_help"></span>
                                </div>

                                <label> Agama <small></small></label>
                                <div><input type="text" name="agama"  class=" medium"></div>
     
                                <label> Jenis Kelamin <small></small></label>
                                <div>
                                  <select data-placeholder="Jenis Kelamin..." class="chzn-select" tabindex="2" name ="sex" >
                                    <option value="" /> 
                                    <option value="1" />Laki - Laki
                                    <option value="2" />Perempuan 
                                   
                                  </select>       
                                </div>
    
                                <label> Alamat Rumah <small></small></label>                            
                                <div>
                                  <textarea name="alamat" id="Textarealimit" class="large" cols="" rows=""></textarea>
                                  <span class="f_help"> Limit character <span class="limitchars">140</span></span>
                                </div> 

                                <label> Email <small></small></label>
                                <div><input type="text" name="email"  class=" medium"></div>
    
                                <label> Nomor Telepon <small></small></label>
                                <div><input type="text" name="telepon"  class=" medium"></div>
    
                                <label> Instansi <small> Nama Instansi / Perusahaan</small></label>
                                <div><input type="text" name="instansi"  class=" medium"></div>
    
                                <label> Jabatan <small></small></label>
                                <div><input type="text" name="jabatan"  class=" medium"></div>
    
                                <label> Golongan <small></small></label>
                                <div><input type="text" name="golongan"  class=" medium"></div>
    
                                <label> Alamat Kantor <small></small></label>
                                <div>
                                  <textarea name="alamat_kantor" id="Textarealimit" class="large" cols="" rows=""></textarea>
                                  <span class="f_help"> Limit character <span class="limitchars">140</span></span>
                                </div> 
    
                                <label> Telepon Kantor <small>Nomor Telepon Kantor</small></label>
                                <div>
                                  <input id="phone" type="text" tabindex="2" name="telepon_kantor"/>
                                  <span class="f_help"></span>
                                </div>

                                <label> Provinsi <small>Nama Provinsi</small></label>
                                <div>
                                  <select data-placeholder="Pilih Provinsi..." class="chzn-select" tabindex="2" name ="provinsi" >
                                    <option value="" /> 
                                    <option value="1" />Jawa Barat 
                                    <option value="2" />Jawa Tengah 
                                    <option value="3" />Jawa Timur
                                  </select>       
                                </div>
      
                                <label> Kota <small></small></label>
                                <div><input type="text" name="kota"  class=" medium"></div>
    
                                <label> Klasifikasi Perusahaan <small></small></label>
                                <div>
                                  <select data-placeholder="Pilih Perusahaan..." class="chzn-select" tabindex="2" name ="klasifikasi_perusahaan">
                                    <option value="" /> 
                                    <option value="1">ESDM
                                    <option value="2">Pemda
                                    <option value="3">Industri
                                    <option value="4">Lainnya
                                  </select>       
                                </div>
    
                                <label> medium <small>Riwayat Pendidikan</small></label>
                                <div><input type="text" name="riwayat_pendidikan"  class=" medium"></div>
    
                                <label> medium <small>Pendidikan Lain</small></label>
                                <div><input type="text" name="pendidikan_ln"  class=" medium"></div>
    
                                <label> medium <small>Pendidikan Khusus</small></label>
                                <div><input type="text" name="pendidikan_khusus"  class=" medium"></div>
    
                                <label> medium <small>Riwayat Jabatan</small></label>
                                <div><input type="text" name="riwayat_jabatan"  class=" medium"></div>
       
                                <label> medium <small>Riwayat Diklat Minerba</small></label>
                                <div><input type="text" name="riwayat_diklat_minerba"  class=" medium"></div>
                            </div>

                            <div class="section last">
                                  <div><a class="uibutton loading" title="Simpan" rel="1">Simpan</a> <a class="uibutton special">Batal</a></div>
                            </div>
                            
                        </form> -->
            
           
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>rujukan/alumni/import">
                    <div> <label> Pilih File Excel* : </label> <input type="file" class="fileupload" />
                    <span class="f_help">* file yang bisa di import adalah .xls (Excel 2003-2007) . 
                    Download template excel : <a href="<?php echo base_url(); ?>temp_upload/alumni.xls" class="red" title="Download template excel alumni"> alumni.xls </a>
                    <img src="<?php echo base_url(); ?>public/admin/images/icon/link.png" alt="link" /></span>
                    </div>
                    </br>
                    <input type="submit" value="Import" class="uibutton loading" title="Import" rel="1">
                </form>
                
               
                    </div>
</div>