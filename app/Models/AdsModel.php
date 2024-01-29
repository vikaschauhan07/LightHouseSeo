<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsModel extends Model
{
    use HasFactory;

    protected $table = 'adstable'; // Specify the table name if it's different

    protected $fillable = [
        'heading',
        'description',
    ];
}
