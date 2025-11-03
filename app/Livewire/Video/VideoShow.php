<?php

namespace App\Livewire\Video;

use App\Models\Video;
use App\Models\VideoViews;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class VideoShow extends Component
{
    public Video $video;
    public $user, $videos;

    // Propiedad para evitar múltiples incrementos de visitas en una sola sesión de visualización
    protected bool $hasCompletedThisSession = false;


    public function mount(Video $video)
    {
        $this->user = Auth::user();
        $this->video = $video;
        $this->videos = Video::all();
    }

    /**
     * Inicia o reinicia el seguimiento de una nueva sesión de visualización.
     * Ahora también captura la IP y el User Agent.
     */
    public function startVideoTracking(float $duration)
    {
        if (!$this->user) {
            return;
        }

        VideoViews::updateOrCreate(
            [
                'user_id' => $this->user->id,
                'video_id' => $this->video->id,
            ],
            [
                // Reiniciamos los tiempos para la nueva sesión
                'video_max_watch_time' => 0,
                'video_total_watch_time' => 0,
                'video_played' => true,
                'video_duration' => $duration,
                
                // AÑADIDO: Capturamos los datos de contexto en cada nueva sesión
                'ip_address' => Request::ip(),
                'user_agent' => Request::userAgent(),
            ]
        );
    }

    /**
     * Registra el progreso del video periódicamente.
     * (Esta lógica no necesita cambios).
     */
    public function updateProgress(float $currentTime)
    {
        if (!$this->user) {
            return;
        }
        
        $view = VideoViews::firstWhere([
            'user_id' => $this->user->id,
            'video_id' => $this->video->id,
        ]);

        if ($view) {
            $view->video_total_watch_time += 5;
            if ($currentTime > $view->video_max_watch_time) {
                $view->video_max_watch_time = $currentTime;
            }
            $view->save();
        }
    }
    
    /**
     * Marca el video como completado y actualiza el timestamp 'last_completed_at'.
     */
    public function markAsCompleted()
    {
        if (!$this->user || $this->hasCompletedThisSession) {
            return;
        }
        
        $view = VideoViews::firstWhere([
            'user_id' => $this->user->id,
            'video_id' => $this->video->id,
        ]);

        if (!$view || !$view->video_duration) {
            return;
        }

        $percentageWatched = ($view->video_total_watch_time / $view->video_duration) * 100;
        $completionThreshold = 89;

        if ($percentageWatched >= $completionThreshold) {
            if (!$view->video_completed) {
                $view->video_completed = true;
                $view->completed_visits = 1;
            } else {
                $view->increment('completed_visits');
            }
            
            // AÑADIDO: Actualizamos la fecha de la última vez que se completó.
            $view->last_completed_at = now();
            
            $view->save();
            $this->hasCompletedThisSession = true;
        }
    }

    public function render()
    {
        return view('livewire.video.video-show');
    }
}
