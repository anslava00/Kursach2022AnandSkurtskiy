<?php

namespace App\Models\basicInformation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    use HasFactory;
    public function theoretical(){
        return $this->hasOne(theoreticalPart::class);
    }
    public function practical(){
        return $this->hasOne(practicalAndIndependentPart::class);
    }
    public function educAndMethodSupport(){
        return $this->hasOne(EducationalAndMethodologicalSupport::class);
    }
    // public function controlAchievement(){
    //     return $this->hasOne(CreditUnits::class);
    // }
    public function listOfLiterature(){
        return $this->hasOne(listOfLiterature::class);
    }
    public function methodInstructions(){
        return $this->hasOne(methodologicalInstructions::class);
    }
    public function materialProduction(){
        return $this->hasOne(materialTexProduction::class);
    }
    public function valuationFunds(){
        return $this->hasOne(valuationFunds::class);
    }
}
