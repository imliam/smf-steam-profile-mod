<?php

if (!defined('SMF'))
	die('Hacking attempt...');

global $smcFunc;

db_extend('packages');

$smcFunc['db_add_column']("members",
                array(
                     'name' => 'steam', 'type' => 'varchar(50)', 'null' => false,
                ),
                array(),
                'do_nothing',
                ''
      );

?>