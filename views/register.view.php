<?php

require_once './controllers/user.controller.php';

$users = new UserController();
$response = $users->add($_POST['name'], $_POST['job']);
$all_users = $users->all();
echo $twig->render('home.html', ['users' => $all_users->data, 'response' => $response]);