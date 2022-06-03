<?php

namespace App\Models\Competencies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencies extends Model
{
    use HasFactory;

    public function subCompetencies(){
        return $this->hasMany(SubCompetencies::class);
    }
}
