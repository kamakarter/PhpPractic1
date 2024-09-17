<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // задание 1
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


        // задаиние 2

        echo '<pre>';
        $array_task_2 = [
            'Спортивный' => 'Сидоров',
            'Художественный' => 'Емелина',
            'Музыкальный' => 'Иванова',
            'Литературный' => 'Петров',
            'Биологический' => 'Антонова'
        ];

        asort($array_task_2);

        foreach($array_task_2 as $e){
            echo '<li>'.$e.'</li>';
        }



        // задание 3

        echo '<pre>';
        $my_data = [
            'name' => 'Камиль',
            'surname' => 'Загидуллин',
            'group' => '427ВЕБ',
            'hobby' => 'Программирование',
            'social' => ['Telegram','KamilZag']
        ];

        foreach($my_data  as $e){
            echo '<li>'.$e.'</li>';
        }


    ?>
</body>
</html>