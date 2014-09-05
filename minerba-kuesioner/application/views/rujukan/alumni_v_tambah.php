<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
   $(function() {
     $( "#input" ).datepicker({
     changeMonth: true,
     changeYear: true
     });
   });
</script>
 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Form Alumni
                        <small>Input data alumni</small>
                    </h1>
                    <ol class="breadcrumb">
                        
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                               <?php echo form_open('rujukan/alumni/simpan'); ?>
                                
                                    <div class="box-body">
                                        <table width="600" border="0">
    
    <tr>
    <td width="134"><label>NIK</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="nik" placeholder="Nomor Induk Pegawai" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Nama Pegawai</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="nama" placeholder="Nama Pegawai" class="form-control"></td>
    </tr>
   
    <tr>
    <td width="134"><label>Tempat Lahir</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="tempat_lahir" placeholder="Tempat Lahir" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Tanggal Lahir</label></td>
    <td width="10"><label>:</label></td>
    <td width="543">
        <input type="text" id="input" size="15" name="tgl_lahir" value="17/08/1945" />
    </td>
    </tr>

    <tr>
    <td width="134"><label>Agama</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="agama" placeholder="Agama" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Jenis Kelamin</label></td>
    <td width="10"><label>:</label></td>
    <td width="543">
        <select  name ="sex" class="form-control">
          <option value="">Jenis Kelamin</option>
          <option value="1">Laki - Laki</option>
          <option value="1">Perempuan</option>
        </select>
    </td>
    </tr>

    <tr>
    <td width="134"><label>Alamat Rumah</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="alamat" placeholder="Alamat Rumah" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Email</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="email" placeholder="Email" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Nomor Telepon</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="telepon" placeholder="Nomor Telepon" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Instansi</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="instansi" placeholder="Nama Instansi" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Jabatan</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="jabatan" placeholder="Jabatan" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Golongan</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="golongan" placeholder="Golongan" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Alamat Kantor</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="alamat_kantor" placeholder="Alamat Kantor" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Telepon Kantor</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="telepon_kantor" placeholder="Nomor Telepon Kantor" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Provinsi</label></td>
    <td width="10"><label>:</label></td>
    <td width="543">
        <select  name ="provinsi" class="form-control">
          <option value="">Pilih Provinsi</option>
          <option value="1">Jawa Barat</option>
          <option value="2">Jawa Tengah</option>
        </select>
    </td>
    </tr>

    <tr>
    <td width="134"><label>Kota</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="kota" placeholder="Kota" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Klasifikasi Perusahaan</label></td>
    <td width="10"><label>:</label></td>
    <td width="543">
    <select  name ="klasifikasi_perusahaan" class="form-control">
          <option value="">Klasifikasi Perusahaan</option>
          <option value="1">ESDM</option>
          <option value="2">Pemda</option>
          <option value="3">Industri</option>
          <option value="4">Lainnya</option>
        </select>
    </td>
    </tr>

    <tr>
    <td width="134"><label>Riwayat Pendidikan</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="riwayat_pendidikan" placeholder="Riwayat Pendidikan" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Pendidikan Lain</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="pendidikan_ln" placeholder="Pendidikan Lain" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Pendidikan Khusus</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="pendidikan_khusus" placeholder="Pendidikan Khusus" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Riwayat Jabatan</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="riwayat_jabatan" placeholder="Riwayat Jabatan" class="form-control"></td>
    </tr>

    <tr>
    <td width="134"><label>Riwayat Diklat Minerba</label></td>
    <td width="10"><label>:</label></td>
    <td width="543"><input name="riwayat_diklat_minerba" placeholder="Riwayat Diklat Minerba" class="form-control"></td>
    </tr>
    </br>
                                    </table>    
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                
                                <?php echo form_close(); ?><!-- /.box-body -->
                            </div>   
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- /.row -->
                </section><!-- /.content -->
            </aside>

<script type="text/javascript">
            $(function() {

                "use strict";

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"]').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });

                //When unchecking the checkbox
                $("#check-all").on('ifUnchecked', function(event) {
                    //Uncheck all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
                });
                //When checking the checkbox
                $("#check-all").on('ifChecked', function(event) {
                    //Check all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("check");
                });
                //Handle starring for glyphicon and font awesome
                $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function(e) {
                    e.preventDefault();
                    //detect type
                    var glyph = $(this).hasClass("glyphicon");
                    var fa = $(this).hasClass("fa");

                    //Switch states
                    if (glyph) {
                        $(this).toggleClass("glyphicon-star");
                        $(this).toggleClass("glyphicon-star-empty");
                    }

                    if (fa) {
                        $(this).toggleClass("fa-star");
                        $(this).toggleClass("fa-star-o");
                    }
                });

                //Initialize WYSIHTML5 - text editor
                $("#email_message").wysihtml5();
            });
        </script>

        