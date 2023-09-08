<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatUser extends Model
{
    protected $table = 'v2_stat_user';
    protected $dateFormat = 'U';
    protected $guarded = ['id'];
    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
}
