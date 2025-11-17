<?php

session_start();

$roles = [
    'admin' => ['delete_user', 'edit_user', 'create_user'],
    'user'  => ['edit_user'],
    'guest' => []
];

$_SESSION['user_role'] = "admin";

function checkAccess($permission) {
    global $roles;
    $role = $_SESSION['user_role'] ?? 'guest';
    return in_array($permission, $roles[$role]);
}

if (checkAccess('delete_user')) {
    echo '<a href="delete.php">Delete User</a><br>';
}
if (checkAccess('edit_user')) {
    echo '<a href="edit.php">Edit User</a><br>';
}
if (checkAccess('create_user')) {
    echo '<a href="create.php">Create User</a><br>';
}
?>
