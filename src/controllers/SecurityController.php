<?php

require_once ROOT_DIR.'/src/models/User.php';

function loginAction()
{
    unset($_SESSION['user']);
    $user = login();
    if ($user['fail']) {
        $_SESSION['messages']['danger'][] = $user['fail'];
    } else {
        $_SESSION['messages']['success'][] = 'Login successful';
        $_SESSION['user'] = $user;
    }
    return redirect(BASE_URL.'/');
}

function logoutAction()
{
    unset($_SESSION['user']);
    return redirect(BASE_URL.'/');
}