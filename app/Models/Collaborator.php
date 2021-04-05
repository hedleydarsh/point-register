<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'ocupattion',
        'dt_birth',
        'cep',
        'manager_id',
        'user_id',
        'address',
        'age'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    //Acessor para retornar nomes sempre em letra maiúscula
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }


    ////Acessor para retornar data de nascimento em formato brasileiro
    public function getDtBirthAttribute($value)
    {
        $value = Carbon::createFromFormat('Y-m-d', $value)
            ->format('d-m-Y');
        return strtoupper($value);
    }
}
