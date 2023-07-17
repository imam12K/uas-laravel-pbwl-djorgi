<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenisheadphone extends Model
{
    use HasFactory;
    protected $table = 'tb_jenisheadphone';
    protected $primaryKey = 'jenisheadphone_id';
    protected $guarded = '[]';
    protected $fillable = [
        'jenisheadphone_id',
        'jenisheadphone_nama'
    ];
    public function headphone() :HasMany
    {
        return $this->hasMany(Headphone::class, 'headphone_id_jenisheadphone', 'headphone_id');    
    }
}
