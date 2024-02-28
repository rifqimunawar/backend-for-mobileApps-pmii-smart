<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Tiket;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'tiket_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function tikets()
    {
        return $this->belongsToMany(Tiket::class, 'user_tikets');
    }
    

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            // Cek apakah pengguna memiliki tiket terkait
            if ($user->tiket()->exists()) {
                // Jika iya, lempar pengecualian untuk mencegah penghapusan
                throw new \Exception("User cannot be deleted because they have related tickets.");
            }
        });
    }

    public function hasAnyRole($roles)
  {
    return null !== $this->roles()->whereIn('role', $roles)->first();
  }

}