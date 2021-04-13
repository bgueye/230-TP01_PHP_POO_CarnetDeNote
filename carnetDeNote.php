<?php
include 'Matiere.php';

$mathematique = new Matiere('Math', 5);
var_dump($mathematique);
$note1 = new Note(12);
$note2 = new Note(12);
$note3 = new Note(12);
$mathematique->addNote($note1);
$mathematique->addNote($note2);
$mathematique->addNote($note3);
var_dump($mathematique->getListeNote());

