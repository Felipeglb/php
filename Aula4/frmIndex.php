<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("Conexao.php");
    ?>
    <div class="container">
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <input class="form-control" id="txtID" name="txtID">
                </div>
                <div class="col-sm-3">

                <select name="txtStatus"  id="txtStatus" >
                <option value=""

                </select>
                </div>

                </div>
        </form>
    </div>
</body>

</html>