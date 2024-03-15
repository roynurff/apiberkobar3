<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table="Address";
    protected $primaryKey="id";
    protected $keyType="int";
    public $incrementing=true;
    public $timestamps=true;

    protected $fillable=['street', 'city','province', 'country','postal_code'];
    public function contact():BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }
    use HasFactory;
}
