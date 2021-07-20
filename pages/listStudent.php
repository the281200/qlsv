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
    <?php
        error_reporting(0); 
        require_once 'connectDB.php' 
    ?>
    <?php 
       
      
        if(isset($_GET['lop'])){
            $lop= $_GET['lop'];
            $query = "SELECT * FROM list WHERE lop = '$lop'";
            $resultlop = mysqli_query($conn,$query);           
        }else{
            $result= $conn -> query("SELECT * FROM list");
        }
    ?>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">So thu tu</th>
                <th scope="col">Ho va ten</th>
                <th scope="col">Lop</th>
                <th scope="col">Dia chi</th>
                <th scope="col">Gioi tinh</th>
                <th scope="col">Chuc nang</th>
                </tr>
            </thead>
            <tbody>

            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ten']; ?></td>
                <td><?php echo $row['lop']; ?></td>
                <td><?php echo $row['dia_chi']; ?></td>
                <td><?php echo $row['gioi_tinh']; ?></td>
                <td> <a href="connectDB.php?delete=<?php echo $row['id'];  ?>">Xoa</a> - <a href="editStudent.php?id=<?php echo $row['id'];  ?>">Sua</a> </td>
                </tr>
            <?php } ?> 
            <?php while($row = mysqli_fetch_assoc($resultlop)){ ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ten']; ?></td>
                <td><?php echo $row['lop']; ?></td>
                <td><?php echo $row['dia_chi']; ?></td>
                <td><?php echo $row['gioi_tinh']; ?></td>
                <td> <a href="connectDB.php?delete=<?php echo $row['id'];  ?>">Xoa</a> - <a href="editStudent.php?id=<?php echo $row['id'];  ?>">Sua</a> </td>
                </tr>
            <?php } ?> 

            </tbody>
        </table>
    </div>
</body>
</html>