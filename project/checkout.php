<?php
session_start();
print_r($_SESSION);
if(isset($_SESSION['loginid'])&&$_SESSION['loginid']){
?>
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

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Producta Checkout</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
    <?php
     include("./include/config.php");
     $qry = "SELECT * FROM user WHERE ID='".$_SESSION['loginid']."'";
     $res = mysqli_query($conn, $qry);
     $row = mysqli_fetch_assoc($res);
    ?>
    <div class="container">
      
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
            <form class="row contact_form" action="addorder.php" method="post" novalidate="novalidate">
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" value="<?php echo $row['name'];?>"/>
               
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number"/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" />
               
              </div>
              
              <div class="col-md-12 form-group p_star">
                <textarea type="text" class="form-control" required id="address" name="address" placeholder="Address"></textarea>
                
              </div>
              <div class="mt-3">
                                <button type="submit" class="btn btn-success w-100 shadow-0 mb-2"> Place Order </button>
                               
                            </div>
            </form>
          </div>
          <div class="col-lg-4">
          
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
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
                <li>
                  <a href="#"><?php echo $subrow['productname'] ?>
                  <span class="last">₹<?php echo number_format($subrow['productprice']) ?></span>
                  </a>
                </li>
                <?php
                            }
                            ?>

               
              </ul>
              <ul class="list list_2">
               
                <li>
                  <a href="#">Total
                    <span>₹<?php echo number_format($p) ; ?></span>
                  </a>
                </li>
              </ul>
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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
  ?>