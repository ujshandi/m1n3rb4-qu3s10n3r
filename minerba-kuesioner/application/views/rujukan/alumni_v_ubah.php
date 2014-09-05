            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Form Alumni
                        <small>Ubah data alumni</small>
                    </h1>
                    <ol class="breadcrumb">
                        
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                               <?php echo form_open('rujukan/alumni/ubah'); ?>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input name="nik" placeholder="Nomor Induk Pegawai" value="<?php echo $result->nik; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" placeholder="Nama Lengkap" value="<?php echo $result->nama; ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" placeholder="Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control" placeholder="Agama">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input class="form-control" placeholder="Jenis Kelamin">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" placeholder="Alamat Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" placeholder="Nomer Telepon">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                            <input name="instansi" placeholder="Nama Instansi" value="<?php echo $result->instansi; ?>">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <?php echo form_close(); ?><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div>