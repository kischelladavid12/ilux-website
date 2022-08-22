<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'local_id';

    protected $fillable = [
        'user_id',
        'turbo_order_id',
        'turbo_service_id',
        'package_name',
        'price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
