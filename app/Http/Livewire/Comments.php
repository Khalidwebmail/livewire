<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $newComment;

    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui porro animi molestias minus ad sunt velit ipsa, iure earum vitae veritatis, culpa nihil molestiae et repellendus! Dolore dicta eius voluptates!',
            'created_at' => '3 min ago',
            'creator' => 'Khalid Ahmed'
        ]
    ];

    /**
     * addComment
     *
     * @return void
     */
    public function addComment()
    {
        if($this->newComment == "")
        {
            return;
        }
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Noor Hossain'
        ]);
        $this->newComment = "";
    }

    public function mount()
    {
        $initialComments = Comment::all();
        $this->comments = $initialComments;
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
