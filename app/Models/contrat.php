<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $table = "contrats";
    protected $fillable = [
        'start_date',
        'end_date',
        'commission',
        'conditions',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
