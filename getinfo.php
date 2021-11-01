<?php
    header('Content-Type:text/html; charset=utf-8');

    $id=$_POST['id'];
    $pw=$_POST['pw'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $postnum=$_POST['postnum01'] + $_POST['postnum02'];
    $address=$_POST['address'];
    $phonnum=$_POST['phonnum'];

    $conn = mysqli_connect("localhost","youtkddnjs","xkawjd00!", "youtkddnjs");

    mysqli_query($conn,"set names utf8");

    $sql = "INSERT INTO account(id, pw, name, email, postnum, address, phonnum) VALUES('$id','$pw','$name','$email','$postnum','$address','$phonnum')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "저장 성공";
    }else{
        echo "저장 실패";
    }

    mysqli_close($conn);


?>