<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'bil01',
        'bil02',
    ];

    public static function saveTransaction($a, $b)
    {
        return self::create([
            'bil01' => $a,
            'bil02' => $b,
        ]);
    }

    public static function getAll(){
        return self::orderBy('id', 'desc')->get();
    }
}
