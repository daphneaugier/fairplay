<?php

session_start();
require_once("mte/mte.php");
$tabledit = new MySQLtabledit();
require_once("db-settings.php");



		#####################
		# required settings #
		#####################


# table of the database you want to edit:
$tabledit->table = 'cities';

# the primary key of the table (must be AUTO_INCREMENT):
$tabledit->primary_key = 'id';

# the fields you want to see in "list view"
# Always add the primary key (`employeeNumber)`: 
$tabledit->fields_in_list_view = array('id', 'name','photo','description','navbar');

		#####################
		# optional settings #
		#####################

		# Head of the page (<h1>head_1<h1>):
$tabledit->head_1 = "";


# language (en=English, de=German, fr=French, nl=Dutch, sv=Swedish):
$tabledit->language = 'en';


# numbers of rows/records in "list view": 
$tabledit->num_rows_list_view = 10;


# required fields in edit or add record: 
$tabledit->fields_required = array('name','photo');


# Fields you want to edit (remove this to edit all the fields).
# $tabledit->fields_to_edit = array('lastName','email','job');


# help texts: 
$tabledit->help_text = array(
	'id' => "Don't edit this field",
	'name' => 'City name',
	'photo' => 'picture name with extension',
	'description' => '',
	'navbar' => 'position'
);


# visible name of the fields: 
$tabledit->show_text = array(
	'id' => 'id',
	'name' => 'name',
	'photo' => 'picture file name',
	'description' => 'description',
	'navbar' => 'position'
);


# visible name of the fields in list view: 
$tabledit->show_text_listview = array(
	'id' => 'Id',
	'name' => 'Name',
	'photo' => 'Picture File',
	'description' => 'Description',
	'navbar' => 'position'
);


# Make selectlist on inputfield based on another table
# in this example: `employees`.`job` is based on `jobs`.`jobname`: 
$tabledit->lookup_table = array(
	'job' => array(
		'query' => "SELECT `id`, `name` FROM `cities`;",
		'option_value' => 'id',
		'option_text' => 'name',
		'navbar' => 'position'
	)
);


$tabledit->width_editor = '100%';
$tabledit->width_input_fields = '500px';
$tabledit->width_text_fields = '498px';
$tabledit->height_text_fields = '200px';


# warning no .htaccess ('on' or 'off'): 
$tabledit->no_htaccess_warning = 'on';



		####################################
		# connect, show editor, disconnect #
		####################################


$tabledit->database_connect();

echo "<!DOCTYPE html>
<html lang='en'>
<head>

	<meta charset='utf-8'>

	<title>Fairplay table edit</title>
	</head>
	<body>
	<ul>
	<li><a href='/'>Back to site</a></li>
	<li><a href='artists.php'>Artists</a></li>
	<li><a href='cities.php'>Cities</a></li>
	<li><a href='pic.php'>Picture upload</a></li>
	</ul>";

$tabledit->do_it();

echo "
	</body>
	</html>"
;

$tabledit->database_disconnect();
?>
