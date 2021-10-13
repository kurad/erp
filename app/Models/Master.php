<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Discussion;

    class Master extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'masters';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function master()
    {
        return $this->belongsTo(Discussion::class);
    }
    }