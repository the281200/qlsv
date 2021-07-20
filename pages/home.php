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
    <center><h2>Danh sach \f sinh vien</h2></center>
    <form method="post" action="addStudent.php" style="margin-left:540px" >
                <button type="submit"  class="btn btn-primary" >Them sinh vien</button>
    </form>
    <div class="row">
        <div class="col-4">
            <?php include 'listClass.php' ?>
        </div>
        <div class="col-8">
            <?php include 'listStudent.php' ?>
            
        </div>
    </div>
</body>
</html>