<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
     'type_laptop',
     'type_display',
     'type_tablet',
     'type_phone',
     'project_image',
     'project_url',
     'project_name',
     'is_active',
    ];
}
