<?php 
$path=$_GET['openid'];
$current = file_get_contents($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .sex{
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .textarea{
            display:block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>
    <h1 class="sex">Editor de texto</h1> <br>
    <form action="update.php?openid=<?php echo $path;?>" method="post">
        <textarea class="textarea" id="text" name="text" rows="20" cols="100"><?php echo $current ?> </textarea> <br><br>
        <div class="text-center">
            <input type="submit" value="Actualizar" class="btn btn-primary">
            <a href="index.php" class="btn btn-info">Regresar</a>
        </div>

    </form>

</body>
</html>