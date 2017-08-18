<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
|
*/
if(PATH_SEPARATOR==':'){//linux
$config = array(
	'default' => array(
		'hostname' => getenv('MC_XP_1_HOST'),
		'port'     => getenv('MC_XP_1_PORT'),
		'weight'   => '1',
	),
);
}else 
{
	$config = array(
			'default' => array(
					'hostname' => '192.168.20.60',
					'port'     => '11211',
					'weight'   => '1',
			),
	);
}
