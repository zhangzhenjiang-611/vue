<?php

namespace Edu\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    /**
     * @var string
     */
    protected string $table = "admin_users";
    protected array $fallible = ["user_name","password","name","mobile","remark"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(AdminRole::class,'role_users','user_id','role_id')
            ->withTimestamps();

    }
}
