<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;

    const FIXED = 'fixed';
    const PERCENTAGE = 'percentage';
    const ALLOWS_FREE_SHIPPING = 'allows_free_shipping';

    protected $fillable = [
        'code',
        'type',
        'value',
        'combine_with_others',
        'valid_until',
    ];

    protected $appends = [
        'is_valid',
    ];

    private function discount(float $total): float
    {
        if ($this->type == self::FIXED) {
            return $this->value;
        } 
        
        if ($this->type == self::PERCENTAGE) {
            return ($this->value / 100) * $total;
        } 
        
        return 0;
    }

    public function off(float $total): float
    {
        $discount = $this->discount($total);
        if ($discount > $total) return $total;
        return $discount;
    }


    public function getIsValidAttribute(): bool
    {
        return $this->isValid();
    }

    public function isValid(): bool
    {
        return Carbon::parse($this->valid_until)->isAfter(now());
    }
}
