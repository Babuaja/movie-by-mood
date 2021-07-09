<?php
session_start();
include "../Login-WEB/db_conn.php";

if(isset($_POST['favorite_movie'])){
    $fav = $_POST['favorite_movie'];
    $id = $_SESSION['id_customer'];
    $sql = "UPDATE `example_customer` SET `favorite_movie` = '$fav' WHERE `id_customer` = '$id'";
    $update = mysqli_query($conn, $sql);
    if(!$update){
        header("Location: index.php?error='something wrong'");
        exit();
    } else{
        $_SESSION['favorite_movie'] = $fav;
        header("Location: index.php?");
        exit();
    }
} else if(isset($_POST['disliked_movie']) ){
    $dis = $_POST['disliked_movie'];
    $id = $_SESSION['id_customer'];
    $sql = "UPDATE `example_customer` SET `disliked_movie` = '$dis' WHERE `id_customer` = '$id'";
    $update = mysqli_query($conn, $sql);
    if(!$update){
        header("Location: index.php?error='something wrong'");
        exit();
    } else{
        $_SESSION['disliked_movie'] = $dis;
        header("Location: index.php?");
        exit();
    }
} else{
    exit();
}
?>