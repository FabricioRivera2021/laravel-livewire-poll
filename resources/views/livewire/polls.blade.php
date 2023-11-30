<div>
    @forelse ($polls as $poll)
        <div class="mb-10">
            <h3 class="mb-4 text-xl bg-zinc-200 p-1">{{$poll->title}}</h3>
            @foreach ($poll->options as $option)
                <div class="mb-2">
                    <button class="btn" wire:click="vote({{$option->id}})" >Vote</button>
                    {{$option->name}} - {{$option->votes->count()}} votes
                </div>
            @endforeach
        </div>
    @empty
        <div class="text-gray-500">
            No poll available
        </div>
    @endforelse
</div>
