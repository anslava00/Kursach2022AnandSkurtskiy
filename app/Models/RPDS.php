<?php

namespace App\Models;

use App\Models\basicInformation\BasicInformation;
use App\Models\time\TimeForRPD;
use App\Models\time\TotalAkademHours;
use App\Models\time\FormControl;
use App\Models\time\CreditUnits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPDS extends Model
{
    use HasFactory;
    public function rpdAndCompetencies(){
        return $this->hasMany(rpdAndCompetencies::class);
    }
    public function timeForRPD(){
        return $this->hasOne(TimeForRPD::class);
    }
    public function totalAkademHours(){
        return $this->hasOne(TotalAkademHours::class);
    }
    public function formControl(){
        return $this->hasOne(FormControl::class);
    }
    public function departaments(){
        return $this->hasOne(departaments::class);
    }
    public function BasicInformation(){
        return $this->hasOne(BasicInformation::class);
    }
    public function creditUnits(){
        return $this->hasOne(CreditUnits::class);
    }
}
