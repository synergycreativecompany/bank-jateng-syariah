<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pinjaman extends Model
{
    use HasFactory;

    protected $table = 'pinjaman';

    protected $fillable = ['user_id', 'amount', 'pinjaman_date', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
