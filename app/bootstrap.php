<?php

require 'database/QueryBuilder.php';
require 'database/Connection.php';
require 'Task.php';
require 'app/App.php';

// $app = [];

// $app['config'] = require 'config/database.php';

// $app['database'] = new QueryBuilder(
// 	Connection::make($app['config']['database'])
// );

App::bind('config', require 'config/database.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));