<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll Title</label>
        <input type="text" wire:model.live="title" >
        @error('title')<span class="text-red-500">{{$message}}</span>@enderror

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption" >Add Option</button>
        </div>

        <div class="mt-4">
            @foreach ($options as $index => $option)
                <div class="mt-4">
                    <label for="">Option {{$index + 1}}</label>
                    <div class="flex gap-2">
                        <input type="text" name="" id="" wire:model="options.{{$index}}" >
                        <button class="btn" wire:click.prevent="removeOption({{$index}})" >Remove</button>
                    </div>
                    @error("options.{$index}")<span class="text-red-500">{{$message}}</span>@enderror
                </div>
            @endforeach
        </div>

        <button class="mt-6 btn" type="submit">Create Poll</button>
    </form>
</div>
