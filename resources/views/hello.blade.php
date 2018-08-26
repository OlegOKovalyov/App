<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--    <h1>Hello, <?php //echo $name; ?>!</h1>-->
<!--    <ul>
        <?php //foreach ($tasks as $task) : ?>

        <li><?php //echo $task; ?></li>

        <?php //endforeach; ?>
    </ul>-->
    
    <ul>
        @foreach ($tasks as $task)

        <li>{{$task}}></li>

        @endforeach
    </ul>    

</body>
</html>
