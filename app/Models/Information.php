<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = "information";

    protected $fillable = ["process", "title", "clients", "video", "image", "description", "active"];
}
