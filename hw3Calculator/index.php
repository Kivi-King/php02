<?
require_once("func.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .cont{
        width: 200px;
        border: 2px solid black;
    }
    form{
        margin-top: 10px;
        width: 200px;
    }
    label{
        display: flex;
    }
    button{
        margin-top: 10px;
        width: 100px;
    }
</style>
<body>
<div class="cont">
    <div><? echo doo($_POST); ?></div>
    <form action="" method="POST">

    <input type="number" name='a'>
    <br>
    <label for="">плюс
    <input type="radio" name="suma" value="0">
    </label>
    <label for="">минус
    <input type="radio" name="suma" value="1">
    </label>
    <label for="">умножить
    <input type="radio" name="suma" value="2">
    </label>
    <label for="">поделить
    <input type="radio" name="suma" value="3">
    </label>
    <br>


    <input type="number" name='b'>
    <br>
    <button type="submit">=</button>


    </form>
</div>








    
</body>
</html>