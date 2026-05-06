<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Campus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'email', 'phone', 'address', 'city', 'logo', 'status',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(fn($campus) => $campus->slug = Str::slug($campus->name));
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function admins()
    {
        return $this->hasMany(User::class)->role('admin');
    }

    public function teachers()
    {
        return $this->hasMany(User::class)->role('teacher');
    }

    public function accountants()
    {
        return $this->hasMany(User::class)->role('accountant');
    }
}