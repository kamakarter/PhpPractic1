<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = ['Волков','Сидоров','Смирнов','Васильев','Павлов','Лебедев'];
        print_r($students);


        echo '<pre>';
        echo 'Количество студентов в массиве:' . count($students);


        echo '<pre>';
        if (in_array('Сидоров',$students)){
            echo ' Да, Сидоров есть ';
        }
        else {
            echo 'Нет, Сидоров в массиве нет ';
        }



        // $expelled = end($students);
        
        echo '<pre>';
        $expelled = array_pop($students);
        echo $expelled;

    ?>
</body>
</html>