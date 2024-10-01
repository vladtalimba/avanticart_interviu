<?php
include_once "Classes/Form.php";
include_once "Classes/InputField.php";
include_once "Classes/Textarea.php";
include_once "Classes/Checkbox.php";

$action = '/doStuff';
$method = 'POST';
// Instantiate form.
$form = new Form($action, $method);

// Instantiate form fields.
$form->addField(new InputField('nume'));
$form->addField(new InputField('prenume'));
$form->addField(new Textarea('adresa'));
$form->addField(new Checkbox('termeni_si_conditii'));

// Display form.
$form->display();

?>