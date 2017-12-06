<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection( [
	                         'driver'    => 'mysql',
	                         'host'      => '127.0.0.1',
	                         'database'  => 'mvc',
	                         'username'  => 'root',
	                         'password'  => 'root',
	                         'charset'   => 'utf8',
	                         'collation' => 'utf8_general_ci',
	                         'prefix'    => 'dgs_'
                         ] );

$capsule->setAsGlobal();

$capsule->bootEloquent();