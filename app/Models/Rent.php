<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Rent extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'email',
        'car_id',
        'rent_start',
        'rent_end',
        'km',
        'all_price',
    ];
 
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}