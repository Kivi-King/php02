<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        table{
            border: 1px solid black;
        }
        td{
            border: 1px solid black; 
        }
        td:first-child {
            background-color: green;
            font-weight: bold;
            color: white;
            text-align: center;
        }
        tr{
            border: 1px solid black; 
        }
        tr:first-child {
            background-color: green;
            font-weight: bold;
            color: white;
            text-align: center;
        }
    </style>


<?php
    $cols = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    $rows = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    ?>
    <table>
        <?php 
        for ($i = 1; $i <= (count($rows)); $i++) {
            echo "<tr> ";
            for ($j = 1; $j <= (count($cols)); $j++) {
                echo "<td>";
                echo $j * $i;
                echo "</td>";
            }
            echo "</tr>";
        }; 
        ?>
    </table>



</body>
</html>