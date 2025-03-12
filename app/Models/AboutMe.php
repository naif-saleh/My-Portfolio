<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{

    protected $fillable = [
        'first_name',
        'middle_name',
        'birth_date',
        'birth_date',
        'age',
        'degree',
        'city',
        'about',
        'title',
        'account_id',
        'user_id'
    ];

    public function account()
    {
        return $this->hasMany(Accounts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
