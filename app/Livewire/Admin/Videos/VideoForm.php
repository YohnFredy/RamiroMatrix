<?php

namespace App\Livewire\Admin\Videos;

use App\Models\Video;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

class VideoForm extends Component
{
    public ?Video $video;

    public $name;
    public $image_path;
    public $short_description;
    public $youtube_url;
    public $slug;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('videos', 'name')->ignore($this->video?->id)],
           /*  'slug' => ['required', Rule::unique('videos', 'slug')->ignore($this->video?->id)], */
            'short_description' => ['required'],
            'youtube_url' => ['required'],
            'image_path' => ['nullable'],
        ];
    }

    public function mount(video $video)
    {
        $this->video = $video ?? new video();

        if ($this->video->exists) {

            $this->authorize('admin.videos.edit');
            $this->loadvideoData();
        } else {
            $this->authorize('admin.videos.create');
        }
    }

    private function loadvideoData()
    {
        $this->name = $this->video->name;
        $this->short_description = $this->video->short_description;
        $this->youtube_url = $this->video->youtube_url;
        $this->image_path = $this->video->image_path;
    }

    public function save()
    {
        $validatedData = $this->validate();

        video::create($validatedData);

        session()->flash('success', 'video creada exitosamente.');
        return redirect()->route('admin.videos.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        $this->video->update($validatedData);

        session()->flash('success', 'Categoira actualizado exitosamente.');
        return redirect()->route('admin.videos.index');
    }

    protected function clearLevelsFrom($startLevel)
    {
        foreach ($this->selectedLevels as $level => $selectedId) {
            if ($level >= $startLevel) {
                unset($this->selectedLevels[$level]);
                unset($this->videoLevels[$level + 1]);
            }
        }
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.videos.video-form');
    }
}
