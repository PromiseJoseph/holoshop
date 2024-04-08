<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class verifyUser extends Model
{
    use HasFactory;

    protected $table = 'verify_users';

    protected $fillabe = [
        'user_id',
        'verification_code',

    ];

    protected $hidden =[
        'created_at',
        'updated_at',
        //can specify verification_code or all later
    ];

    public function User() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
