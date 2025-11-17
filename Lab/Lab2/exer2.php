<?php

$roles = [
    'admin' => ['view_user', 'create_user', 'edit_user', 'delete_user'],
    'user'  => ['view_user', 'edit_own_profile'],
    'guest' => ['view_user']
];

$user_roles = [
    1 => 'admin',
    2 => 'user',
    3 => 'guest'
];

function hasPermission($user_id, $permission) {
    global $user_roles, $roles;

    $role = $user_roles[$user_id] ?? 'guest';

    return in_array($permission, $roles[$role]);
}

?>
