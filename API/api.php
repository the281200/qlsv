<?php 
    require_once '../pages/connectDB.php';
    $response = array();
    $sql = "SELECT * FROM list";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['ten'] = $row ['ten'];
            $response[$i]['lop'] = $row ['lop'];
            $response[$i]['dia_chi'] = $row ['dia_chi'];
            $response[$i]['gioi_tinh'] = $row ['gioi_tinh'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
?>