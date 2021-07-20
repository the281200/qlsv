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
       
        $result= $conn -> query("SELECT DISTINCT lop FROM list");
    ?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Danh sach lop</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                <td><a href="home.php?lop=<?php echo $row['lop'];  ?>"><?php echo $row['lop']; ?></a></td>
                </tr>
            <?php } ?> 
            </tbody>
        </table>
    </div>
</body>
</html>