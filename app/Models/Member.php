<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable implements Transformable,JWTSubject
{
    use TransformableTrait;
    use Notifiable;
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function transform()
    {
        return [
            'id'      => (int) $this->id,
            'email'   => $this->email,
            'content' => $this->content
        ];
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
