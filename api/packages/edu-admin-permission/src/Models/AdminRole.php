<?php

namespace Edu\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    /**
     * @var string
     */
    protected string $table = "admin_roles";
    protected array $fallible = ["name","slug","description"];
}
