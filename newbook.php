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
                                    <h1><a href="listsach.php" class="btn btn-primary" > <i class="fa fa-undo"></i> Return</a></h1>
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
                               
                                         <strong>thông tin sách:</strong>
                                    
                                </div>
                                <div class="card-body card-block">
                                    <form  method="post"  class="form-horizontal">
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sách</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="txt_masach" placeholder="" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sách</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="txt_tensach" placeholder="" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                             <?php 
                                                    $query=" select MaTG, TenTG from tacgia ";
                                                    $result=mysqli_query($link,$query);
                                                    if(mysqli_num_rows($result)>=0)
                                                    {            
                                                                                             
                                                ?>
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Tác giả</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="cmb_Tg"  class="form-control">
                                                    <option selected value="0">Vui lòng chọn tác giả...</option>
                                                    <?php while($row=mysqli_fetch_assoc($result))
                                                        {  ?>
                                                        <option value=<?php $row['MaTG']?>><?php echo $row['TenTG'] ?></option>
                                                    <?php }}  ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Thể loại</label></div>
                                            <?php 
                                                    $query=" select MaTL,TenTL from theloai ";
                                                    $result=mysqli_query($link,$query);
                                                    if(mysqli_num_rows($result)>=0){            
                                                                                             
                                                ?>
                                            <div class="col-12 col-md-9">
                                                <select name="cmb_TL"  class="form-control">
                                                    <option selected value="0">Vui lòng chọn thể loại</option>
                                                    <?php while($row=mysqli_fetch_assoc($result)){  ?>
                                                    <option value=<?php $row['MaTL']?>><?php echo $row['TenTL'] ?></option>
                                                    <?php }}  ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Thể loại</label></div>
                                            <?php 
                                                    $query=" select MaNXB, TenNXB from nxb ";
                                                    $result=mysqli_query($link,$query);
                                                    if(mysqli_num_rows($result)>=0){            
                                                                                             
                                                ?>
                                            <div class="col-12 col-md-9">
                                                <select name="cmb_NXB"  class="form-control">
                                                    <option selected value="0">Vui lòng chọn NXB</option>
                                                    <?php while($row=mysqli_fetch_assoc($result)){  ?>
                                                    <option value=<?php $row['MaNXB']?>><?php echo $row['TenNXB'] ?></option>
                                                    <?php }}  ?>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung</label></div>
                                            <div class="col-12 col-md-9"><textarea name="txt_bio"  rows="9" placeholder="Tóm tắt nội dung (200)..." class="form-control"></textarea></div>
                                        </div>
                            
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số trang</label></div>
                                            <div class="col-6 col-md-2"><input type="number"  name="txt_sotrang" placeholder="" class="form-control"></div>
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số Lượng</label></div>
                                            <div class="col-6 col-md-2"><input type="number" name="txt_soluong" placeholder="" class="form-control"></div>
                                        </div>
                                    <button name="btn_create" type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Create
                                    </button>
                                    <button name="btn_reset" type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
<?php
        if(isset($_POST['btn_create']))
        {
            $masach= $_POST['txt_masach'];
            $tensach= $_POST['txt_tensach'];
            $sl= $_POST['txt_soluong'];
            $st= $_POST['txt_sotrang'];
            $matg=$_POST['cmb_Tg'];
            $matl=$_POST['cmb_TL'];
            $manxb=$_POST['cmb_NXB']; 
            $noidung=$_POST['txt_bio'];
            $query="INSERT INTO sach VALUE('$masach','$tensach','$matg','$manxb','$matl','$sl','$st','$noidung')";
            mysqli_query($link,$query) or die("thêm không thành công");
            header('location:listsach.php');
        }
?>


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


</body>
</html>
