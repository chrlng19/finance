<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['sales', 'revenue', 'customers', 'report_date'];
}
