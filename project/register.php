     <!doctype html>
     <html lang="zxx">

     <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Milky Pura</title>
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
                            <h2>Tracking Order</h2>
                            <p>Home <span>-</span> Tracking Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- breadcrumb start-->

     <!--================login_part Area =================-->
     <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="register_check.php" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        Register
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--================login_part end =================-->

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