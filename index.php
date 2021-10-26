<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$action = isset($_GET['action']) ? $_GET['action'] : '';

if (isset($_POST['Submit'])) {
    if ($_POST['Submit'] == 'register') {
        $action = 'register';
    } else if ($_POST['Submit'] == 'edit') {
        $action = 'edit';
    }
}

switch ($action) {
    case '':
        include './views/home.view.php';
        break;

    case 'delete':
        $user_id = $_GET['id'];
        include './views/delete.view.php';
        break;

    case 'add':
        include './views/add.view.php';
        break;

    case 'register':
        include './views/register.view.php';
        break;

    case 'edit_form':
        include './views/edit_form.view.php';
        break;

    case 'edit':
        include './views/edit.view.php';
        break;
}
