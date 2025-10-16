<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Nama tabel
    protected $table = 'users';

    // Primary key
    protected $primaryKey = 'user_id';

    // Field yang boleh diisi mass assignment
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id',
        'status',
        'bidang_id', // ✅ tambahkan juga ini biar bisa diisi mass assignment
    ];

    // Kolom yang disembunyikan saat serialisasi (misalnya di API response)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casting kolom
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ✅ Hash password otomatis saat di-set
    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    // Relasi ke tabel bidang
    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
