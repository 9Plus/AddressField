<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = ['name', 'zip_code'];

    public function addressFull()
    {
        return $this->belongsTo(Address::class, 'zip_code', '_code');
    }
}
