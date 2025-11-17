<?php

session_start();

$roles = [
    'admin' => ['delete_user', 'edit_user'],
    'user'  => ['edit_user'],
    'guest' => []
];

$_SESSION['user_role'] = "user"; 

function checkAccess($permission) {
    global $roles;
    $role = $_SESSION['user_role'] ?? 'guest';
    return in_array($permission, $roles[$role]);
}

function requirePermission($permission) {
    if (!checkAccess($permission)) {
        header("Location: unauthorized.php");
        exit();
    }
}

requirePermission('delete_user'); 
?>
