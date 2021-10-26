<?php

require_once './controllers/user.controller.php';

$users = new UserController();

$allUsers = $users->all();

echo $twig->render('home.html', ['users' => $allUsers->data]);