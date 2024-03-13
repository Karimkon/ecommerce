<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Request;

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

     static public function getSingle($id){
        return self::find($id);
    }

    static function getAdmin($name = null, $email = null)
{
    $query = self::select('users.*')
                    ->where('is_admin', '=', 1)
                    ->where('is_delete', '=', 0);

    if (!empty($name)) {
        $query->where('name', 'like', '%' . $name . '%');
    }

    if (!empty($email)) {
        $query->where('email', 'like', '%' . $email . '%');
    }

    return $query->orderBy('id', 'desc')
                 ->paginate(25);
}

public function getProfile()
    {
        if(!empty($this->profile_pic) && file_exists('upload/profile/'.$this->profile_pic))
        {
            return url('upload/profile/'.$this->profile_pic);
        }
        else
        {
            return '';
        }
    }
    public function getProfileDirect()
    {
        if(!empty($this->profile_pic) && file_exists('upload/profile/'.$this->profile_pic))
        {
            return url('upload/profile/'.$this->profile_pic);
        }
        else
        {
            return url('upload/profile/user.png');
        }
    }

    static public function checkEmail($email)
    {
        return User::select('users.*')
        ->where('email','=', $email)
        ->first();

    }
}
