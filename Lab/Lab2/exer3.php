<?php

session_start();

$roles = [
    'admin' => ['view_user', 'create_user', 'edit_user', 'delete_user'],
    'user'  => ['view_user', 'edit_own_profile'],
    'guest' => ['view_user']
];

$_SESSION['user_role'] = 'admin'; 

function checkAccess($required_permission) {
    global $roles;

    $role = $_SESSION['user_role'] ?? 'guest';

    return in_array($required_permission, $roles[$role]);
}

echo checkAccess('delete_user') ? "Allowed" : "Denied";
?>
