<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $appends = ['user_image'];
    
    //--fOR JWT authentication end --//
    // public function getImgAttribute($value) {
    //     return asset("uploads/user/$value");
    // }

    public function getUserImageAttribute(){
        if(!empty($this->img)){
            $string =  $this->img;
            if (strpos($string, 'https') === 0) {
               $image = $this->img;
            } else {
               $image = asset('uploads/user/'.$this->img);
            }
        }else{
            $image = asset('storage/no-image.png');
        }

        
        return $image;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
}
