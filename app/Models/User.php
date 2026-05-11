<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $fillable = [
        'campus_id', 'name', 'email', 'password', 'phone', 'status', 'avatar',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = ['email_verified_at' => 'datetime'];

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    public function isSuperAdmin(): bool
    {
        return $this->hasRole('super_admin');
    }

    public function isCampusAdmin(): bool
    {
        return $this->hasRole('admin') && $this->campus_id !== null;
    }
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function isTeacher(): bool
    {
        return $this->hasRole('teacher');
    }

     public function isAccounts(): bool
    {
        return $this->hasRole('accounts');
    }

    // ─── Accessors ───────────────────────────────────────
    public function getAvatarUrlAttribute(): string
    {
        return $this->avatar
            ? asset('storage/' . $this->avatar)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=4f46e5&color=fff';
    }

     public function getRoleLabelAttribute(): string
    {
        $role = $this->roles->first();
        return $role ? ucfirst(str_replace('_', ' ', $role->name)) : 'No Role';
    }

    // ─── Scopes ──────────────────────────────────────────
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeForCampus($query, int $campusId)
    {
        return $query->where('campus_id', $campusId);
    }
}