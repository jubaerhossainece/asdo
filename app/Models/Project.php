<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectFile;

class Project extends Model
{
    use HasFactory;

    public function projectFiles(){
        return $this->hasMany(ProjectFile::class);
    }

    //to retrieve the latest instance of ProjectFile model
    public function latestFile(){
        return $this->hasOne(ProjectFile::class)->latest('id');
    }
}
