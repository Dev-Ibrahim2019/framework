<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserID = 1;

$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserID);

view('notes/edit.view.php', [
  'heading' => 'Edit Note',
  'note' => $note,
  'errors' => [],
]);
