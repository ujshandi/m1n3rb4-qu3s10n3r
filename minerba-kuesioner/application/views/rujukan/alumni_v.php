


<script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#delete_row').live('click', function(){
                if(confirm("Yakin akan menghapus data ini?")){
                document.location=$(this).attr('href');
                }
                return false;
            });
            } );
</script>
 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Form Alumni
                        <small>Tampil data alumni</small>
                    </h1>
                    <ol class="breadcrumb">
                        
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">

<!-- <div id="step-holder">
    <div class="step-dark-left"><a href="<?php echo base_url() .'rujukan/alumni/tambahdata'; ?>">Tambah data</a></div>
    <div class="step-dark-right">&nbsp;</div>
    <div class="clear"></div>
</div> -->

             <div class="box-body">               
                <!--  start product-table ..................................................................................... -->
                
                
                <!--  end product-table................................... --> 
                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama Pegawai</th>
                                                <th>Instansi</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $no=1; foreach($result->result() as $datafield){ ?>
                                            <tr>
                                                <th><?php echo $no; ?></th>
                                                <th><?php echo $datafield->nik; ?></th>
                                                <th><?php echo $datafield->nama;?></th>
                                                <th><?php echo $datafield->instansi;?></th>
                                                <th class="options-width">
                                                <a href="<?php echo base_url() .'rujukan/alumni/tampil_ubah/'.$datafield->alumni_id; ?>" title="Edit" class="icon-1 info-tooltip">Edit | </a>
                                                <a href="<?php echo base_url() .'rujukan/alumni/hapus/'.$datafield->alumni_id; ?>" title="Hapus" class="icon-2 info-tooltip" id="delete_row">Hapus</a>
                                                </th>
                                            </tr>
                                            <?php $no++; } ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
            </div>
            <!--  start paging..................................................... -->
            
</div>   
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.r            
           <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>public/admin/new/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url(); ?>public/admin/new/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/admin/new/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>public/admin/new/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>public/admin/new/js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>