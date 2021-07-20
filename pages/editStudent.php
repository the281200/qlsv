<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'connectDB.php' ?>
    <?php 
    
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            $query = "SELECT * FROM list WHERE id = $id";
            $result = mysqli_query($conn,$query);
             
                    $row = $result -> fetch_array();
                    $hoten = $row['ten'];
                    $lop = $row['lop'];
                    $diachi = $row['dia_chi'];
                    $gioitinh = $row['gioi_tinh'];
               
        }
        if(isset($_POST['edit'])){
            $hotenup = $_POST["hoten"];
            $lopup = $_POST["lop"];
            $diachiup = $_POST["diachi"];
            $gioitinhup = $_POST["gioitinh"];

            $sql = "UPDATE list SET ten='$hotenup',lop='$lopup',dia_chi='$diachiup',gioi_tinh='$gioitinhup' WHERE id=$id";
                if(mysqli_query($conn,$sql)){
                    echo "<script>alert('sua thanh cong'); window.location='home.php';</script>"; 
                }else{
                    echo "<script>alert('sua khong thanh cong');</script>";
                }
        }
    ?>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="hoten" >Ho va ten</label>
                <input name="hoten" class="form-control" value="<?php echo $hoten ?>">
            
            </div>
            <div class="mb-3">
                <label for="lop" >Lop</label>
                <input name="lop" class="form-control" value="<?php echo $lop ?>">
            
            </div>
            <div class="mb-3">
                <label for="diachi" >Dia chi</label>
                <input name="diachi" class="form-control" value="<?php echo $diachi ?>">
            
            </div>
            <div class="mb-3">
                <label for="gioitinh" >Gioi tinh</label>
                <input name="gioitinh" class="form-control" value="<?php echo $gioitinh ?>">
            
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Sua</button>
        </form>
    </div>    
</body>
</html>