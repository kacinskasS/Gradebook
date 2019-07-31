<?php

require_once ROOT_DIR.'/lib/Db.php';

function login()
{
    $pass = md5($_POST['password']);
    $query = "SELECT id, name, email
                FROM gradebook.users
                WHERE users.name = ? AND users.password = ?";

    $user = dbQuery($query, ['s', 's'], [$_POST['username'], $pass]);

    if (empty($user)) {
        return ['fail' => 'Login failed'];
    }

    return reset($user);
}