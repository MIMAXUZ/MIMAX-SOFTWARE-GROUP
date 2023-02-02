<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
     'image_member',
     'member_full_name',
     'member_job_uz',
     'member_job_ru',
     'member_job_en',
     'facebook_url',
     'twitter_url',
     'linkedin_url',
     'instagram_url',
     'is_active',
    ];
}
