<?php

namespace App\Enums;

enum ActionEnum: string
{
    case CREATE_ROLE = 'create_role';
    case EDIT_ROLE = 'edit_role';
    case LIST_ROLES = 'list_roles';
    case DELETE_ROLE = 'delete_role';
}
