<?php
session_start();
    if(isset(  $_SESSION['bookshelfUserSessionID']) || isset($_COOKIE['bookshelfUserSessionID']) && isset($_POST['wishBtn']) ){
        include "../connection.php";
        $bookID = $_POST['pid'];
         $userID = $_COOKIE['bookshelfUserID'];
        $query="delete from wishlist where userID=$userID and productID=$bookID";
        $res = mysqli_query($con,$query);
        if($res){
            echo "1";        
        }
        else{
            echo "0";
        }
    }
    else{
        echo "Access Denied";
    }

?>