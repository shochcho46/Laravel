<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainmenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_name',
        'serial',
        'status',

    ];

    public function submenus()
    {
        return $this->hasMany(Submenu::class);
    }
}
