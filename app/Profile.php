<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'about_me', 'first_name', 'last_name', 'address', 'city', 'country', 'zip_code', 'description', 'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
