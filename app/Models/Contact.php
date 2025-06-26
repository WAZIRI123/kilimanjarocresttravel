<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'subscribed_to_newsletter',
        'ip_address',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'subscribed_to_newsletter' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'new',
        'subscribed_to_newsletter' => false,
    ];

    /**
     * Scope a query to only include new contacts.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    /**
     * Scope a query to only include read contacts.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    /**
     * Mark the contact as read.
     *
     * @return bool
     */
    public function markAsRead()
    {
        return $this->update(['status' => 'read']);
    }

    /**
     * Mark the contact as unread.
     *
     * @return bool
     */
    public function markAsUnread()
    {
        return $this->update(['status' => 'new']);
    }

    /**
     * Check if the contact is new.
     *
     * @return bool
     */
    public function isNew()
    {
        return $this->status === 'new';
    }

    /**
     * Check if the contact is read.
     *
     * @return bool
     */
    public function isRead()
    {
        return $this->status === 'read';
    }
}
