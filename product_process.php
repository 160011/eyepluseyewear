 <?php
 include_once('include/config.php');
 if (isset($_POST['submit']) && $_POST['submit'] == "add") {
    extract($_FILES);
    extract($_POST);
    $filename = $_FILES['productimage']['name'];
    $newname = time() . '-' . $filename;
    $path = '../image/product/' . $newname;
    print_r($_POST);
    if (move_uploaded_file($_FILES['productimage']['tmp_name'], $path)) {
        $catqry = "INSERT INTO product (productname,productimage,productprice,productdesc,categoryid) VALUES ('" . $productname . "','" . $newname . "','" . $productprice . "','" . $productdesc . "','" . $categoryid . "')";
        mysqli_query($conn, $catqry);
        header("location:product.php");
    }
 } elseif (isset($_REQUEST['val'])&&$_REQUEST["val"] == 'del') {
    print_r($_REQUEST);
    extract($_REQUEST);
    $cquery = "SELECT * FROM product WHERE id='" . $id . "'";
    $cres = mysqli_query($conn, $cquery);
    $drow = mysqli_fetch_assoc($cres);
    $dpath = "../image/product/" . $drow['productimage'];
    unlink($dpath);
    $qry = "DELETE FROM product WHERE id='" . $id . "'";
    $res = mysqli_query($conn, $qry);
    header("location:product.php");
 } elseif (isset($_POST['submit']) && $_POST['submit'] == "edit") {
    print_r($_POST);
    extract($_POST);
    extract($_FILES);
    if ($_FILES['productimage']['name'] == NULL) {
        extract($_POST);
        $qry = "UPDATE product SET productname='" . $productname . "' , productprice='" . $productprice . "', productdesc='" . $productdesc . "' , categoryid='" . $categoryid . "' WHERE id='" . $id . "'";
        $res = mysqli_query($conn, $qry);
        header("location:product.php");
    } else {
        extract($_POST);
        extract($_FILES);
        $cquery = "SELECT * FROM product WHERE id='" . $id . "'";
        echo $cquery;
        $cres = mysqli_query($conn, $cquery);
        $drow = mysqli_fetch_assoc($cres);
        $dpath = "../image/product/" . $drow['productimage'];
        unlink($dpath);
        $filename = $_FILES['productimage']['name'];

        $newname = time() . '-' . $filename;
        $path = '../image/product/' . $newname;
        if (move_uploaded_file($_FILES['productimage']['tmp_name'], $path)) {
            $qry =  "UPDATE product SET productname='" . $productname . "',productimage='" . $newname . "' , productprice='" . $productprice . "', productdesc='" . $productdesc . "',categoryid='" . $categoryid . "' WHERE id='" . $id . "'";
            $res = mysqli_query($conn, $qry);
            header("location:product.php");
        }
    }  
 } else {
    echo "not add";
 }
