<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $data)
 */
class Worker extends Model
{
    use HasFactory;

    protected $table='workers';
    protected $guarded = false;
}
