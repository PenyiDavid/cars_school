<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Car extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'car_model',
        'caution_money',
        'km_price',
        'day_price',
        'description',
    ];
 
    public function rents()
{
    return $this->hasMany(Rent::class, 'car_id');
}
}
