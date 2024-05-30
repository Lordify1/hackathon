<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountDeletionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'requested_at', 
        'processed_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
