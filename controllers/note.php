<?php 

$config = require 'config.php';
$db = new Database($config['database'], 'root', 12009121220191406);

$heading = "Notes";
$currentUserID = 1;

$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserID);

require 'views/note.view.php';


