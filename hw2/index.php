<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $tack1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    function odd($var)
    {
        return $var % 2 !== 0;
    }
    array_filter($tack1, "odd");

    function odd1($var)
    {
        return $var % 3 === 0;
    }
    array_filter($tack1, "odd1");

    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $sum += pow($i, $i);
    }

    


    function func($as)
    {
        $arr = [0, 1];
        if ($as <= 1) {
            return $arr;
        }
        for ($i = 2; $i <= $as; $i++) {
            $sum = $arr[$i - 1] + $arr[$i - 2];

            array_push($arr, $sum);
        }
        return $arr;
    }

    func(20);

    $pandom = [];
    for ($i = 1; $i <= 10; $i++) {
        $num = rand(-50, 50);
        array_push($pandom, $num);

    }
    shuffle($pandom);
    arsort($pandom);

    function cwot($a, $b, $c)
    {
        $D = ($b ** 2) - 4 * $a * $c;
        if ($D > 0) {
            $one = (-$b + sqrt($D)) / 2;
            $two = (-$b - sqrt($D)) / 2;
            echo " <table>
            <tr>
                <td>$one </td>
            </tr>
            <tr>
                <td>$two </td>
            </tr>
            </table>";
            return;
        }
        if ($D === 0) {
            $three = (-($b / (2 * $a)));
            echo " <table>
            <tr>
                <td> $three </td>
            </tr>
    
            </table>";
            return;
        } else {
            echo "<p>'Действительных корней нет'</p>";
        }

    }
    cwot(2, 8, 2);


    $team = [
        "Сидоров" => "Кiрiлл",
        "Шершень" => "Юрий",
        "Лiсiченко" => "Ольга",
        "Чумак" => "Михайло",
    ];
    ?>

    <? ksort($team);
    $i = 1;
    ?>

    <table>
        <? foreach ($team as $key => $value): ?>
            <tr>
                <td>
                    <?= $i ?>
                    <? $i++ ?>
                </td>
                <td>
                    <?= $key ?>
                </td>
                <td>
                    <?= $value ?>
                </td>
            </tr>

        <? endforeach; ?>

    </table>

    <? array_rand($team) ?>
    <? array_rand($team) ?>
    <? array_rand($team) ?>

    <? $group = [
        "user1" => "Сидоров Кiрiлл",
        "user2" => "Шершень Юрий",
        "user3" => "Лiсiченко Ольга",
        "user4" => "Чумак Михайло"
    ];
    extract($group);
    echo "$user1, $user2, $user3, $user4\n";
    ?>

    <?="<br> " ?>
    <? $array_group = [
        "1" => array(
            name => "Сидоров Кiрiлл",
            age => "24",
            group => "WEB-22",
            like_skills => ["PHP", "C#", "C++", "C++ ООП", "MS Sql"]
        ),
        "2" => array(
            name => "Шершень Юрий",
            age => "26",
            group => "WEB-22",
            like_skills => ["HTML", "JS"]
        ),
        "3" => array(
            name => "Лiсiченко Ольга",
            age => "22",
            group => "WEB-22",
            like_skills => ["PHP", "C#", "C++", "C++ ООП", "MS Sql"]
        ),
        "4" => array(
            name => "Чумак Михайло",
            age => "25",
            group => "WEB-22",
            like_skills => ["HTML", "JS"]
        ),
    ]; ?>

    <pre>
        <?= print_r($array_group) ?>
    </pre>

    <? function odd2($pHp)
    {
        return  in_array("PHP", $pHp[like_skills]);
    }

    $filteredArr = array_filter($array_group, "odd2");
    ?>
    <pre>
            <?= print_r($filteredArr) ?>
        </pre>


</body>

</html>