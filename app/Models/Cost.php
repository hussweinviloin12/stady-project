<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $fillable = [
        'general_costs',
        'labor_costs',
        'fixed_costs',
        'advertising_revenue',
        'project_start_date',
        'project_end_date',
    ];

    protected $table = 'costs';
}
