<?php


require_once './controllers/user.controller.php';

$users = new UserController();

$response = $users->delete($user_id);
$all_users = $users->all();

echo $twig->render('home.html', ['users' => $all_users->data, 'response' => $response]);