<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    protected $fillable = ['url'];
    // If you have timestamps in your table (created_at and updated_at), no changes are needed.
    // If not, add public $timestamps = false;
}
