<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoViews extends Model
{

    protected $fillable = [
        'user_id',
        'video_id',
        'video_played',
        'video_max_watch_time',
        'video_total_watch_time',
        'video_completed',
        'completed_visits',
        'video_duration',
        'last_completed_at',
        'ip_address',
        'user_agent',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'video_played' => 'boolean',
        'video_completed' => 'boolean',
        'last_completed_at' => 'datetime', // <-- AÑADIDO (Importante para manejarlo como objeto Carbon)
    ];
    /**
     * Obtiene el usuario que vio el video.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtiene el video que fue visto.
     */
    public function video(): BelongsTo
    {
        return $this->belongsTo(Video::class);
    }
}
