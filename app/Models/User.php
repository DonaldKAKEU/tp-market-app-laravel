<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
    ];

    public function addresse(){
        return $this->hasOne(Addresse::class);
    }

    public function reduction(){
        return $this->hasOne(Reduction::class);
    }

    public function panier(){
        return $this->hasMany(Panier::class);
    }

    public function commande(){
        return $this->hasMany(Commande::class);
    }

    public function contrat(){
        return $this->hasOne(Contrat::class);
    }

    public function infoCarteBancaire(){
        return $this->hasOne(infoCarteBancaire::class);
    }

    public function infoVendeur(){
        return $this->hasOne(infoVendeur::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
    
}