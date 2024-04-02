   <?php
   session_start();
    include_once("./include/config.php");
   extract($_POST);

   $phone=$_POST['phone'];
   $address = $_POST['address'];
   $subqry = "UPDATE user SET phone='".$phone."', address='".$address."' WHERE ID='".$_SESSION['loginid']."'";
   $subres=mysqli_query($conn,$subqry);

   if ($subres)
   {

    date_default_timezone_set('Asia/Kolkata');
    $currentdate=date("Y/m/d h:i:s");
    $qry="SELECT * FROM cart WHERE userid='".$_SESSION['loginid']."'"; 
    $res=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_assoc($res))
     {
        $subqry="INSERT INTO orders (productid,userid,cartid,quantity,date,address) VALUES ('".$row['productid']."','".$_SESSION['loginid']."','".$row['ID']."','".$row['quantity']."','".$currentdate."','".$address."')";
        $subres=mysqli_query($conn,$subqry);
        header("location:order.php");
     }
   }
   else
   {
    // Handle the case where the update failed
    echo "Error updating user information: " . mysqli_error($conn);
   }
   ?>