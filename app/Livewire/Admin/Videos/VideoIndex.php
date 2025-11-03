<?php

namespace App\Livewire\Admin\Videos;

use App\Models\Video;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class VideoIndex extends Component
{

    use WithPagination, WithoutUrlPagination;

    public $search = '', $searchTerms;

    public function searchEnter()
    {
        if (empty(trim($this->search))) {
            $this->clearSearch();
        } else {
            $this->searchTerms = array_filter(explode(' ', $this->search));
            $this->resetPage();
        }
    }

     public function clearSearch()
    {
        $this->search = '';
        $this->searchTerms = [];
        $this->resetPage();
    }

    public function destroy($id)
    {
        $this->authorize('admin.videos.destroy');

        $video = Video::findOrFail($id);
        $video->delete();

        // Opcional: mandar un mensaje flash
        session()->flash('success', 'el video fue eliminada correctamente.');
    }

     #[Layout('components.layouts.admin')]
    public function render()
    {
        $videos = Video::query();
        if (!empty($this->searchTerms)) {
            foreach ($this->searchTerms as $term) {
                $videos->where(function ($query) use ($term) {
                    $query->where('name', 'like', '%' . $term . '%');
                });
            }
        }

        $videos = $videos->orderBy('id', 'desc')->paginate(10);
        return view('livewire.admin.videos.video-index', [
            'videos' => $videos
        ]);
    }
}
