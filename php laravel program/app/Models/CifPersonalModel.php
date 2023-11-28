<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CifPersonalModel extends Model
{
    use HasFactory;

    protected $table = 'mst_cifpersnl';

    protected $primaryKey = 'cifid';

    public $timestamps = false;

    protected $fillable = [
        'cifid',
        'aoid',
        'fullnm',
        'surenm',
        'mothrnm',
        'npwp',
        'brtdt',
        'brtplace',
        'typeid',
        'addr',
        'rt',
        'rw',
        'kelnm',
        'postalcode',
        'kecnm',
        'cityid',
        'provid',
        'countryid',
        'expdt',
        'sex',
        'nohp',
        'homeid',
        'ownid',
        'alias',
        'note',
        'nip',
    ];
}
