<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    protected $primaryKey = 'id';

    protected $fillable = [
        'city_id',
        'category_id',
        'hotelname',
        'price',
        'room',
        'person',
        'checkin',
        'checkout',
        'address',
        'description',
        'image',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
