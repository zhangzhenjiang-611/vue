<?php

namespace Edu\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    /**
     * @var string
     */
    protected string $table = "admin_menus";
    protected array $fallible = ["title","path","parent_id"];
}
