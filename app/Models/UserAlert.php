<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAlert extends Model
{
    use HasFactory;

    public $table = 'user_alerts';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'alert_text',
        'alert_link',
        'alert_content',
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? date("m/d/Y h:i A", strtotime($value)) : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
