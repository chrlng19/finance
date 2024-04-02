<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client'; 
    protected $fillable = [
        'client_name',
        'company_name',
        'risk_manager',
        'commercial_budget',
        'currency',
        'industry_sector',
        'description',
        'facility',
        'risk_owner',
        'date_raised',
        'risk_occurrence',
        'risk_bearer',
        'probability',
        'hsse_health_safety',
        'hsse_security',
        'hsse_environment',
        'hsse_health_safety_level',
        'hsse_security_level',
        'hsse_environment_level'
    ];
}