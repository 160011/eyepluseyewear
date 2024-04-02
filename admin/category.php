 <?php
 session_start();
 if(isset($_SESSION["email"]))
 {
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>R and N Eyewear</title>

  <!-- Google Font: Source Sans Pro -->
  <?php
  include('common/style.php');
  ?>
 </head>
 <body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php
  include('common/menu.php');
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include('common/sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="category_process.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">CategoryName</label>
                    <input type="text" class="form-control" placeholder="categoryname" name="categoryname">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">select image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                     
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="add" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           
            <!-- /.card -->

            <!-- Input addon -->
          
            <!-- /.card -->
            <!-- Horizontal Form -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
       </div><!-- /.container-fluid -->
     
       <!-- Content Header (Page header) -->
    

       <!-- Main content -->
       <section class="content">
       <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title"><b>Category</b></h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>categoryname</th>
                    <th>image</th>
                    <th>edit</th>
                    <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>
                          <?php 
                            include_once("include/config.php");
                            $catqry="select * from category order by id asc";
                            $catres=mysqli_query($conn,$catqry) or die("error in select category".mysqli_error($conn));
                            $no=1;
                            while($catrow=mysqli_fetch_row($catres))
                            {
                          ?> 
                          <tr>
                            <td><?php echo $catrow[0]; ?></td>
                            <td><?php echo $catrow[1]; ?></td>
                            <td><a href="../image/category/<?php echo $catrow[2]; ?>" target="blank" width="200px" height="100px"><img src="../image/category/<?php echo $catrow[2]; ?>" width="200px" height="100px"></a></td>
                            <td><a href="category_edit.php?id=<?php echo $catrow[0]; ?>"><i class="fas fa-edit"></a></td>
                            <td><a href="category_process.php?id=<?php echo $catrow[0]; ?>&&op=del"><i class="fas fa-trash"></a></td>

                           </tr>
                           <?php
                           $no++;
                            }
                           ?>
                           </tbody>
                           <!-- <tfoot>
                           <tr>
                           <th>id</th>
                           <th>categoryname</th>
                           <th>image</th>
                           <th>edit</th>
                           <th>delete</th>
                           </tr>
                           </tfoot> -->
                           </table>
                           </div>
                            <!-- /.card-body -->
                           </div>
                             <!-- /.card -->
                           </div>
                           <!-- /.col -->
                             </div>
                            <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                           </section>
                           <!-- /.content -->
                           </div>
                           </section>
                           <!-- /.content -->
                           </div>
                           <!-- /.content-wrapper -->
                            <?php
                            include('common/footer.php');
                            ?>
                            <!-- Control Sidebar -->
                            <!-- <aside class="control-sidebar control-sidebar-dark">
                               
                            </aside> -->
                            <!-- /.control-sidebar -->
                          </div>
                          <!-- ./wrapper -->
                          
                          <!-- jQuery -->
                          <?php
                              include('common/script.php');
                          ?>
                          </body>
                          </html>
                          <?php
                          }else{
                            header("location:index.php");
                          }