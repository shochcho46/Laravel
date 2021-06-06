<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'mainmenu_id',
        'sub_name',
        'serial',
        'status',

    ];

    public function mainmenu()
    {
        return $this->belongsTo(Mainmenu::class);
    }
}
