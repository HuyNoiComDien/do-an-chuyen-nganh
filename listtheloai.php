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
                                <h1>Thể Loại </h1>
                                <?php $link= new mysqli('localhost','root','','dbbookingbook') or die('kết nối thất bại');
                                        mysqli_query($link,'SET NAMES UTF8'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li class="active">Thể Loại</li>
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="formsign.php" class="btn btn-primary"><i class=" fa fa-plus"></i>New</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table table-dark">
                                    <thead>
                                        <tr>
                                            <th>Mã Thể Loại</th>
                                            <th>Tên Thể Loại</th>
                                            <th>Mô Tả</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
                                                    $query=" select sach.MaSach,TenSach,TenTG,TenTL,TenNXB,SL,SoTrang from sach INNER join tacgia ON sach.MaTG=tacgia.MaTG INNER join theloai on sach.MaTL=theloai.MaTL inner join nxb on sach.MaNXB=nxb.MaNXB";
                                                    $result=mysqli_query($link,$query);
                                                    if(mysqli_num_rows($result)<0)
                                                        {
                                                ?>
                                            <tr>
                                           
                                                 <td>khong co du lieu</td>
                                             </tr>
                                        <?php }
                                           else {
                                                while($row=mysqli_fetch_assoc($result))
                                                {
                                           ?>
                                            <tr>
                                           
                                            <td><?php echo $row['MaSach']; ?></td>
                                            <td><?php echo $row['TenSach']; ?></td>
                                            <td><?php echo $row['TenTG']; ?></td>
                                            <td><?php echo $row['TenTL']; ?></td>
                                            <td><?php echo $row['TenNXB']; ?></td>
                                            <td><?php echo $row['SL']; ?></td>
                                            <td><?php echo $row['SoTrang']; ?></td>
                                            <td>
                                                    <button class="btn btn-primary"><i class="fa fa-edit"></i>Chỉnh Sửa</button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i>Xóa</button>
                                                    <button class="btn btn btn-info"><i class="fa fa-info-circle"></i>Nội Dung</button>

                                            </td>
                                        </tr>
                                        <?php }  } ?>
                                       
                                    </tbody>
                                </table>
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


</body>
</html>
