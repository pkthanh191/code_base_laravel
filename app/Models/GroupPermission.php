<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupPermission extends Model
{
    use HasFactory;

    protected $table = 'group_permission';
    protected $fillable = [
        'name'
    ];
    protected $dates = ['deleted_at'];

    public function permission()
    {
        return $this->hasMany(Permission::class, 'group_id');
    }
}
