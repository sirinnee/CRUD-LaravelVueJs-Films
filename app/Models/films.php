<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class films extends Model
{
    use HasFactory;
    protected $fillable = ['titre','realisateur','pays','date_sortie','description','poster','duree','langue'];
}
