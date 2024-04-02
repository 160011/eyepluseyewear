   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/r_n.png" alt="R and N eyewear Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">R and E Eyewear</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">~
          <img src="dist/img/r_n.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jadeja Nupurba</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- -->
          <li class="nav-item">
            <a href="../admin/category.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME']=='/aditi/admin/category.php'?"active":'');?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Category
                <?php
                   include('include/config.php');
                   $qry="SELECT * FROM category ";
                   $res=mysqli_query($conn,$qry);
                   $row=mysqli_num_rows($res);
                ?> 
                <span class="badge badge-info right"><?php echo $row;?></span>
              </p>
            </a>
          </li>
          
            <a href="product.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Product
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="order.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Order
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
    
    </div>
    <!-- .sidebar -->
   </aside>