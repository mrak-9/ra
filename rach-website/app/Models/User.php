<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'city',
        'workplace',
        'position',
        'academic_degree',
        'role',
        'is_email_verified',
        'membership_expires_at',
        'membership_type',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_email_verified' => 'boolean',
            'membership_expires_at' => 'datetime',
        ];
    }

    public function conferenceParticipants(): HasMany
    {
        return $this->hasMany(ConferenceParticipant::class);
    }

    public function abstracts(): HasMany
    {
        return $this->hasMany(ConferenceAbstract::class);
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function hasActiveMembership(): bool
    {
        return $this->membership_expires_at && $this->membership_expires_at->isFuture();
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isVerifiedUser(): bool
    {
        return $this->role === 'verified_user' || $this->isAdmin();
    }
}
