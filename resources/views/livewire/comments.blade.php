<div>
    <h1 class="text-3xl">Comments</h1>
        <div class="py-2">
            <form class="my-4 flex" wire:submit.prevent="addComment">
                <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What is in your mind" wire:model.debounce.lazy="newComment">
                <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
            </form>
        </div>
        {{ $newComment }}
    @foreach ($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-between my-2">
                <div class="flex">
                    <p class="font-bold text-lg">{{ $comment->creator->name }}</p>
                    <p class="mx-3 py-1 text-xs text-gray-500 font-semibold"></p>
                </div>
                <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer">{{ $comment->created_at->diffForHumans() }}</i>
            </div>
            <p class="text-gray-800">
                {{ $comment->body }}
            </p>
        </div>
    @endforeach
</div>
