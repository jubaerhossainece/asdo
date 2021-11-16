<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BloodDonation;

class BloodDonor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id', 'role_id', 'password'
    ];

    public function blood_donations(){
        return $this->hasMany(BloodDonation::class);
    }
}
