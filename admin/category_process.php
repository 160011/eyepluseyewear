 <?php
 session_start();
 include_once("include/config.php");
 if(isset($_POST['submit']) && $_POST['submit']=="add")
 {
    extract($_POST);
    $filename=$_FILES['image']['name'];
    $newname=time()."-".$filename;
    $path="../image/category/".$newname;

    if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
    {
        $catqry="insert into category(categoryname,image) values('".$categoryname."','".$newname."')";
        mysqli_query($conn,$catqry) or die("error in select category".mysqli_error($conn));
        header("location:category.php"); 
        echo "success";           
    }
    else{
        echo"upload fail";
    }
 }
 elseif(isset($_POST['submit']) && $_POST['submit']=="edit")
 {
    extract($_POST);
    if($_FILES['image']['name']!="")
    {
        $catqry="select * from category where id='".$id."'";
        $catres=mysqli_query($conn,$catqry);
        $catrow=(mysqli_fetch_row($catres));
        unlink("../image/category/".$catrow[2]);
        $filename=$_FILES['image']['name'];
        $newname=time()."-".$filename;
        $path="../image/category/".$newname;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
        $qry="update category set categoryname='".$categoryname."',image='".$newname."' where id='".$id."'";
        mysqli_query($conn,$qry);
        header("location:category.php");
    
    }
    else{
        $catqry="update category set categoryname='".$categoryname."'where id='".$id."'";
        mysqli_query($conn,$catqry);
        header("location:category.php");
    }
 }
    elseif(isset($_REQUEST['id']) && $_REQUEST['op']=="del")
    {
        extract($_REQUEST);
        
        $catqry="select image from category";
        $catres=mysqli_query($conn,$catqry);
        $catrow=(mysqli_fetch_row($catres));
        $qry="delete from category where id='".$_REQUEST['id']."'";
        unlink("../image/category/".$catrow[0]);
        $res=mysqli_query($conn,$qry)or die ("error in delete category".mysqli_error($conn));
        header("location:category.php");

    }

 ?>

