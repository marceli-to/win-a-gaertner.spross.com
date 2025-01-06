<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Participant extends Model
{
  protected $fillable = [
    'selection',
    'name',
    'street',
    'zip',
    'city',
    'email',
    'phone',
    'email_verified_at',
  ];

  protected static function boot()
  {
    parent::boot();
    static::creating(function ($model) {
      $model->uuid = Str::uuid();
    });
  }
}
