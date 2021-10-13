<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Discussion;

    class Champion extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'champions';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function champion()
        {
            return $this->belongsTo(Discussion::class);
        }
    }