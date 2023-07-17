<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Headphone extends Model
{
    use HasFactory;
    protected $table = 'tb_headphone';
    protected $primaryKey = 'headphone_id';
    protected $guarded = '[]';
    protected $fillable = [
        'headphone_id',
        'headphone_id_jenisheadphone',
        'headphone_nama',
        'headphone_harga',
        'headphone_stock'
    ];
    public function jenisheadphone() :BelongsTo
    {
        return $this->belongsTo(Jenisheadphone::class, 'headphone_id_jenisheadphone');    
    }
    public function pelanggan() :HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pelanggan_id_headphone', 'headphone_id');    
    }
}
