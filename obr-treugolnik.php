<?php
//1
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $rezult='-';
    $s=0;

    $p=$first+$second+$third/2;



    if ($_POST['send'])//5

    {

        if ($first + $second <= $third or $first<=0 or $second<=0 or $third<=0) {
            $rezult = 'Такого треугольника нет. Введите корректные значения<br>';
        }//12

//        if ($first + $second >$third) {
//            $rezult = 'Площадь<br>' . ($first - $second);
//        }//13

        elseif ($first == $second and $second == $third and $third == $first) {
            $rezult = 'Равносторонний треугольник<br>';
        }//14

        elseif ($first == $second and $second > $third and $first > $third) {
            $rezult = 'Равнобедренный треугольник<br>';


        }//15

        elseif ($first < $second and $second < $third and $third > $first) {
            $rezult = 'Разносторонний треугольник<br>';


        } else {
            $rezult = '';
        }
    }
    $s=sqrt($p*($p-$first)*($p-$second)*($p-$third));


    echo 'Ответ: '.$rezult.'<br>';
    echo 'Площадь: '. $s.'<br>';

    echo '<a href="treugolnik.php">еще раз </a>';
}//4
?>
<STYLE>
    body{
        TEXT-ALIGN: center;
        WIDTH: 395PX;
        MARGIN: auto;
    }
    a{
        BACKGROUND-COLOR: aquamarine;
        BORDER-RADIUS: 20PX;
        PADDING: 14PX 30PX;
        COLOR: BLACK;
        TEXT-DECORATION: NONE;
        FONT-SIZE: 17PX;
        MARGIN-TOP: 30PX;
        DISPLAY: block;
        TEXT-ALIGN: center;
    }
</STYLE>
