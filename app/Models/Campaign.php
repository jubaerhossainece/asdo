<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CampaignFile;

class Campaign extends Model
{
    use HasFactory;

    public function campaignFiles(){
        return $this->hasMany(CampaignFile::class);
    }

    //to retrieve the latest instance of ProjectFile model
    public function latestFile(){
        return $this->hasOne(CampaignFile::class)->latest('id');
    }
}
