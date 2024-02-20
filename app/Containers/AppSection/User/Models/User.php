<?php

namespace App\Containers\AppSection\User\Models;

use App\Containers\AppSection\Authentication\Traits\AuthenticationTrait;
use App\Containers\AppSection\Authorization\Traits\AuthorizationTrait;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Ship\Parents\Models\UserModel as ParentUserModel;
use Illuminate\Validation\Rules\Password;

class User extends ParentUserModel
{
    protected $with = ['roles', 'permissions'];
    use AuthorizationTrait;
    use AuthenticationTrait;

    protected $fillable = [
        'nombre_completo',
        'cargo',
        'name',
        'password',
        'establecimiento_id',
    ];

    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'password' => 'hashed',
        // 'birth' => 'date',
    ];

    public function getPrivilegiosAttribute()
    {
        if ($this->roles->isEmpty()) {
            return collect();
        }

        $privilegios = collect();

        foreach ($this->roles as $role) {
            $privilegios = $privilegios->merge($role->privilegios);
        }

        return $privilegios->unique('id');
    }


    public static function getPasswordValidationRules(): Password
    {
        return Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols();
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }
}
