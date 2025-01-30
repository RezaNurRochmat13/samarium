<?php

namespace App\Livewire\Cms\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use App\Gallery;
use App\GalleryImage;

class GalleryAddImage extends Component
{
    use WithFileUploads;

    public $gallery;

    public $images = [];

    public function render()
    {
        return view('livewire.cms.dashboard.gallery-add-image');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'images.*' => 'image'
        ]);

        DB::beginTransaction();

        try {
            $i = $this->gallery->getHighestPosition() + 1;
            foreach ($this->images as $image) {
                $imagePath = $image->store('gallery_image', 'public');

                $galleryImage = new GalleryImage;

                $galleryImage->gallery_id = $this->gallery->gallery_id;
                $galleryImage->image_path = $imagePath;
                $galleryImage->position = $i;

                $galleryImage->save();

                $i++;
            }

            DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->dispatch('galleryImagesAdded');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
