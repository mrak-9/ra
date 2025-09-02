<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conference extends Model
{
    protected $fillable = [
        'title', 'registration_opens_at', 'starts_at', 'ends_at',
        'location', 'conference_type', 'announcement', 'description',
        'post_release', 'important_dates', 'event_days', 'materials',
        'status', 'requires_membership'
    ];

    protected function casts(): array
    {
        return [
            'registration_opens_at' => 'date',
            'starts_at' => 'date',
            'ends_at' => 'date',
            'important_dates' => 'array',
            'event_days' => 'array',
            'materials' => 'array',
            'requires_membership' => 'boolean',
        ];
    }

    public function participants(): HasMany
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

    public function isRegistrationOpen(): bool
    {
        return $this->status === 'registration_open' && 
               $this->registration_opens_at->isPast();
    }

    public function isCompleted(): bool
    {
        return $this->status === 'completed' || $this->ends_at->isPast();
    }
}
