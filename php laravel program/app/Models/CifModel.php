<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CifModel extends Model
{
    use HasFactory;

    protected $table = 'mst_cif';

    protected $primaryKey = 'cifid';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cifid',
        'aoid',
        'dtjoin',
        'fullnm',
        'npwp',
        'countryid',
    ];
}
