<?php
/**
 * Init file for admin module, add routes
 *
 * @package   Vendo
 * @author    Jeremy Bush <contractfrombelow@gmail.com>
 * @copyright (c) 2010-2011 Jeremy Bush
 * @license   ISC License http://github.com/zombor/Vendo/raw/master/LICENSE
 */

Route::set(
	'user actions',
	'admin/user/<action>.html',
	array(
		'action' => 'add|edit|delete'
	)
)->defaults(
	array(
		'directory' => 'admin',
		'controller' => 'user',
	)
);