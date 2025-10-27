<?php

namespace App\Livewire\Video;

use App\Models\Video;
use App\Models\VideoViews;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VideoIndex extends Component
{
    public $videos, $videosViewed, $unwatchedVideos;

    public function mount()
    {
        $user = Auth::user();

        // Si NO está logueado → mostrar todos los videos
        if (! $user) {
            $this->unwatchedVideos = Video::all();
            $this->videosViewed = collect(); // vacío
            return;
        }

        // Listado de videos completados por el usuario
        $this->videosViewed = Video::whereHas('videoViews', function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->where('video_completed', true);
        })->get();

        // Verificar si el usuario tiene algún registro en video_views
        $hasRecords = VideoViews::where('user_id', $user->id)->exists();

        if ($hasRecords) {

            // Videos que AÚN no ha completado ✅
            $this->unwatchedVideos = Video::whereDoesntHave('videoViews', function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->where('video_completed', true);
            })->get();
        } else {

            // Si no hay registros → todos los videos están sin ver ✅
            $this->unwatchedVideos = Video::all();
        }
    }



    public function render()
    {
        return view('livewire.video.video-index');
    }
}
