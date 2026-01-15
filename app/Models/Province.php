<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    /**
     * Get regencies for this province
     */
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }

    /**
     * Get KDMP surveys for this province
     */
    public function kdmpSurveys()
    {
        return $this->hasMany(KdmpSurvey::class, 'provinsi', 'name');
    }
}
