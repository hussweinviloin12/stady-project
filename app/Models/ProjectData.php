<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectData extends Model
{
    use HasFactory;

    protected $table = 'project_data';
    protected $fillable = [
        'project_name',
        'project_goal',
        'project_features',
        'performance_measure',
        'new_users_monthly',
        'tasks_added_monthly',
        'annual_users',
        'monthly_tasks',
        'recommendations',
        'risk_assessment',
        'completion_date',
        'supported_devices',
        'payment_status',
    ];

    protected $casts = [
        'completion_date' => 'date', // تحويل حقل التاريخ إلى نوع البيانات التاريخ
    ];
}
