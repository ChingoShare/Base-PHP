<?php

$name = readline("Как вас зовут? ");
// $age = readline("Сколько вам лет? ");
// echo "Вас зовут $name, вам $age лет";

$task1 = readline("Какая задача стоит перед вами сегодня? ");
$time1 = readline("Сколько примерно времени эта задача займет? ");

$task2 = readline("Какая задача стоит перед вами сегодня? ");
$time2 = readline("Сколько примерно времени эта задача займет? ");

$task3 = readline("Какая задача стоит перед вами сегодня? ");
$time3 = readline("Сколько примерно времени эта задача займет? ");

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n" .
    "- $task1 ($time1" . "ч)\n" .
    "- $task2 ($time2" . "ч)\n" .
    "- $task3 ($time3" . "ч)\n" .
    "Примерное время выполнения плана = " . $time1 + $time2 + $time3 . "ч";
