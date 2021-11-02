<?php

    header('Content-Type:text/html; charset=utf-8');

    $conn = mysqli_connect("localhost","youtkddnjs","xkawjd00!", "youtkddnjs");

    mysqli_query($conn,"set names utf8");

    $sql = "SELECT * FROM account WHERE id";

    $result = mysqli_query($conn, $sql);

    if($result){

        $rowCnt = mysqli_num_rows($result);
        for($i=0; $i<$rowCnt; $i++){
            
            $row = mysqli_fetch_array($result);

            echo $row[0];

        }

    }else{
        echo "검색 실패";
    }

    mysqli_close($conn);

?>