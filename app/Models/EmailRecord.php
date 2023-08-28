<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'from',
        'recipient_ids',
        'membership_levels',
        'message',
        'attachment',
        'is_all',
    ];
}
