<?php 

require 'app/bootstrap.php';

//$tasks = $app['database']->selectAll('todo_list');
$tasks = App::get('database')->selectAll('todo_list');

require 'views/show.view.php';