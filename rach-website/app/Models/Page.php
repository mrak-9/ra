<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'temporary_content',
        'show_in_menu',
        'is_published',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'show_in_menu' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeInMenu(Builder $query): Builder
    {
        return $query->where('show_in_menu', true);
    }

    public function getDisplayContent(): string
    {
        return $this->temporary_content ?: $this->content;
    }
}
