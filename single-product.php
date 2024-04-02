      <!doctype html>
      <html lang="zxx">

      <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Eye+ Eyewear</title>
      <?php
     include("common/style.php");
     ?>
      </head>

      <body>
     <!--::header part start::-->
      <?php
     include("common/header.php");
     ?>
      <!-- Header part end-->

      <!-- breadcrumb start-->
      <section class="breadcrumb breadcrumb_bg">
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Shop Single</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
     </div>
     </section>
     <!-- breadcrumb start-->
      <!--================End Home Banner Area =================-->

     <!--================Single Product Area =================-->
     <div class="product_image_area section_padding">
     <div class="container">
     <?php
                include("./include/config.php");
                $qry = "SELECT * FROM product WHERE id='" . $_REQUEST['productid'] . "'";
                //echo $qry;
                $res = mysqli_query($conn, $qry);
                $row = mysqli_fetch_assoc($res);
                ?>
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <div >
                <img src="./image/product/<?php echo $row['productimage'] ?>" style='min-width: 500px; max-width: 600px;' />
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h3><?php echo $row['productname'] ?></h3>
            <h2><?php echo number_format($row['productprice']) ?>₹</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category :</span> <?php
                   $subqry = "SELECT * FROM category WHERE ID='" . $row['categoryid'] . "'";
                   $subres = mysqli_query($conn, $subqry);
                    $subrow = mysqli_fetch_array($subres);
                   echo $subrow[1];
                 ?></a>
              </li>
            </ul>
            
            <div class="card_area d-flex justify-content-between align-items-center">
              
              <a href="addcart.php?productid=<?php echo $row['id'] ?>" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
            <p><?php echo $row['productdesc'] ?></p>
          </div>
        </div>
      </div>
      </div>
      </div>
      <!--================End Single Product Area =================-->

     <!--================Product Description Area =================-->

      <!-- product_list part end-->

     <!--::footer_part start::-->
     <?php
     include("common/footer.php");
     ?>
     <!--::footer_part end::-->

     <!-- jquery plugins here-->
     <!-- jquery -->
     <?php
     include("common/script.php");
     ?>
     </body>
     </html>