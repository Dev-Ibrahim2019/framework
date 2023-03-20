<?php 

$config = require 'config.php';
$db = new Database($config['database'], 'root', 12009121220191406);

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();

require 'views/notes.view.php';

