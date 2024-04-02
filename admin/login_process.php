 <?php
 session_start();
 include_once("include/config.php");
 extract($_POST);
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qry="select * from admin where email='".$email."' && password='".md5($password)."'";
    echo $qry;
    $res=mysqli_query($conn,$qry);
    $count=mysqli_num_rows($res);
    echo $count;
    if($count>0)
    {
        $_SESSION["email"]=$email;
        header("location:dashboard.php");
    }
    else{
        header("location:index.php");
    }
    ?>