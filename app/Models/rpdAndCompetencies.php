<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rpdAndCompetencies extends Model
{
    use HasFactory;
    public function competencies(){
        return $this->hasMany(Competencies::class);
    }
}
