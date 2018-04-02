<?php

use Todo\Models\Task;
use Todo\TaskManager;
use Todo\Storage\MySqlDatabaseTaskStorage;

require 'vendor/autoload.php';
date_default_timezone_set('Europe/Kiev');

$db = new PDO('mysql:host=127.0.0.1;dbname=todo;' , 'username', 'passwd');

$storage = new MySqlDatabaseTaskStorage($db);
$manager = new TaskManager($storage);


$tasks = $manager->getTasks();
