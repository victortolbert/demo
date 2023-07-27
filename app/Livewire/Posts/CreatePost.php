<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
