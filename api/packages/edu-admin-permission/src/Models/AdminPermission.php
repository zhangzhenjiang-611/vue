<?php

namespace Edu\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    /**
     * @var string
     */
    protected string $table = "admin_permissions";
    protected array $fallible = ["name","slug","description"];
}
