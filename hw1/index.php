<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php 
    $surname = 'Король';
    $name = 'Володимир';
    $patronymic = 'Петрович';
    $age = '22';
    $group = 'WEB22';
    $email = 'vonameva.korol.2012@gmail.com';
    $aboutMe = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, debitis.';
    ?>

    <h1>Home Work 1</h1>
    <div class="cointainer">
        <ul>
            <li>
                <h2>Surname:</h2>
                <p><?php echo $surname ?></p>    
            </li>
            <li>
                <h2>Name:</h2>
                <p><?php echo $name ?></p>
            </li>
            <li>
                <h2>Patronymic:</h2>
                <p><?php echo $patronymic ?></p>
            </li>
            <li>
                <h2>Age:</h2>
                <p><?php echo $age ?></p>
            </li>
            <li>
                <h2>Group:</h2>
                <p><?php echo $group ?></p>
            </li>
            <li>
                <h2>Email:</h2>
                <p><?php echo $email ?></p>
            </li>
            <li>
                <h2>AboutMe:</h2>
                <p><?php echo $aboutMe ?></p>
            </li>
        </ul>
    </div>
    



</body>
</html>