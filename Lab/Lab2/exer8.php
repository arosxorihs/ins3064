<?php

$role_inherit = [
    'manager' => 'user',
    'admin'   => 'manager'
];

$roles = [
    'user'    => ['view_user'],
    'manager' => ['edit_user'],
    'admin'   => ['delete_user']
];

function getAllPermissions($role) {
    global $roles, $role_inherit;

    $result = [];

    while ($role != null) {
        $result = array_merge($result, $roles[$role]);
        $role = $role_inherit[$role] ?? null;
    }

    return array_unique($result);
}

print_r(getAllPermissions('admin'));
?>
