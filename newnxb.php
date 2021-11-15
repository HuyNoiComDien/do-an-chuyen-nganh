<?php $link= new mysqli('localhost','root','','dbbookingbook') or die('kết nối thất bại');
                                        mysqli_query($link,'SET NAMES UTF8'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   <?php include 'layouts/headerpage.php' ?>
</head>
<body>
    <!-- Left Panel -->
    <?php include 'layouts/leftpanel.php' ?>
   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <?php include 'layouts/headrightpanel.php' ?>
        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1><a href="listnxb.php" class="btn btn-primary" > <i class="fa fa-undo"></i> Return</a></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dữ Liệu Sách</a></li>
                                        <li><a href="#">List sách</a></li>
                                        <li class="active">Thêm sách mới</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                               
                                         <strong>thông tin NXB:</strong>
                                    
                                </div>
                                <div class="card-body card-block">
                                    <form  method="post"  class="form-horizontal">
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ma NXB</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="txt_maNXB" placeholder="" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên NXB</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="txt_TenNXB" placeholder="" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa Chỉ</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="txt_dc" placeholder="" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">email</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="txt_email" placeholder="" class="form-control"></div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">SDT</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  name="txt_sdt" placeholder="" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                                            <div class="col-12 col-md-9"><textarea name="txt_nd"  rows="9" placeholder="Tóm tắt nội dung (200)..." class="form-control"></textarea></div>
                                        </div>
                                        
                                    <button name="create" type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Create
                                    </button>
                                    <button name="reset" type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        <div class="clearfix"></div>

        <?php include'layouts/footer.php' ?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


<?php
if(isset($_POST['create']))
{
    $ma= $_POST['txt_maNXB'];
    $ten= $_POST['txt_TenNXB'];
    $email=$_POST['txt_email'];
    $sdt=$_POST['txt_sdt'];
    $nd=$_POST['txt_nd'];
    $dc=$_POST['txt_dc'];
    $query="INSERT INTO nxb VALUE('$ma','$ten','$dc','$nd','$email','$sdt')";
    mysqli_query($link,$query) or die ("thêm không thành công.");
    header('localhost:listnxb.php');
}
  ?>
</body>
</html>
