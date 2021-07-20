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
        if(isset($_POST['add'])){
            if($_POST['hoten']==null||$_POST['lop']==null||$_POST['diachi']==null||$_POST['gioitinh']==null){
                echo "<script>alert('ban can nhap day du thong tin');</script>";
            }else{
                $hoten = $_POST['hoten'];
                $lop = $_POST['lop'];
                $diachi = $_POST['diachi'];
                $gioitinh = $_POST['gioitinh'];
    
                if($conn -> query("INSERT INTO list (ten,lop,dia_chi,gioi_tinh) VALUES (N'$hoten',N'$lop',N'$diachi',N'$gioitinh')")){
                    echo "<script>alert('them thanh cong');  window.location='home.php';</script>";
                }else{
                    echo "<script>alert('them that bai');</script>";
                }
            }
           

        }
        $conn->close();
    ?>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="hoten" >Ho va ten</label>
                <input name="hoten" class="form-control">
            
            </div>
            <div class="mb-3">
                <label for="lop" >Lop</label>
                <input name="lop" class="form-control">
            
            </div>
            <div class="mb-3">
                <label for="diachi" >Dia chi</label>
                <input name="diachi" class="form-control">
            
            </div>
            <div class="mb-3">
                <label for="gioitinh" >Gioi tinh</label>
                <input name="gioitinh" class="form-control">
            
            </div>
            <button type="submit" class="btn btn-primary" name="add">Them</button>
        </form>
    </div>    
</body>
</html>