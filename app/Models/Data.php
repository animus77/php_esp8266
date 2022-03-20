<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model {

    protected $fillable = [
        'date', 'user_id', 'esp_id', 'data'
    ];
}