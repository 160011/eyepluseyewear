   <?php
   error_reporting(E_ERROR | E_PARSE);
   session_start();
   if(isset($_SESSION['loginid'])&&$_SESSION['loginid']){
    ?>
   <!doctype html>
   <html lang="zxx">

    <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eye+ Eyewwear</title>
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


    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- breadcrumb start-->

   <!--================Cart Area =================-->
    <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th socpe='col'>Name</th>
                <th scope="col">Price</th>
                <!-- <th scope="col">Quantity</th> -->
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
            <?php
                            $p=0;
                            include("./include/config.php");
                            $qry = "SELECT * FROM cart WHERE userid='" . $_SESSION['loginid'] . "'";
                            $res = mysqli_query($conn, $qry);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $subqry = "SELECT * FROM product WHERE id='" . $row['productid'] . "'";
                                $subres = mysqli_query($conn, $subqry);
                                $subrow = mysqli_fetch_assoc($subres);
                                $p+=$subrow['productprice'];
                            ?>
              <tr >
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="./image/product/<?php echo $subrow['productimage'] ?>" style="max-width: 238px;max-height: 238px;" alt="" />
                    </div>
                  </div>
                </td>
                <td>
                  <div class="media-body">
                    <p><?php echo $subrow['productname'] ?></p>
                  </div>
                </td>
                <td>
                  <h5><?php echo number_format($subrow['productprice']) ?></h5>
                </td>
                <!-- <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td> -->
                <td>
                  <h5>₹<?php echo number_format($subrow['productprice'])?></h5>
                </td>
              </tr>
           <?php
            }
         ?>
              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>₹<?php echo number_format($p) ; ?></h5>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="checkout.php">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
          </div>
        </div>
      </div>
        </section>
        <!--================End Cart Area =================-->

       <!--::footer_part start::-->
    <?php
     include("common/footer.php");
    ?>
      <!--::footer_part end::-->

      <!-- jquery plugins here-->
      <?php
     include("common/script.php");
    ?>
     </body>

     </html>
     <?php
       }else{
         header("location:login.php");
        }