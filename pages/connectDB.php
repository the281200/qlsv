<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="student";

    $conn = mysqli_connect($servername,$username,$password,$database);
    mysqli_set_charset($conn, 'UTF8');
    if(isset($_GET['delete'])){
        $id= $_GET['delete'];
        $conn -> query("DELETE FROM list WHERE id=$id");
        header("location: home.php");
    }
    // if(!$conn){
    //     echo ("ket noi khong thanh cong");
    // }else{
    //     echo ("ket noi thanh cong rui ne :v");
    // }
?>