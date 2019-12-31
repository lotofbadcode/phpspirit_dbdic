<?php

use phpspirit\dbdic\Factory;

include dirname(__FILE__) . '/../src/Factory.php';
include dirname(__FILE__) . '/../src/Mysql.php';
$factory = Factory::instance('mysql', '106.15.235.114', 'apidoc', 'root', 'zxc,./123');
print_r($factory->tables('apidoc'));
print_r($factory->cloums('ps_user'));