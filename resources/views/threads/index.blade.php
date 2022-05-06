<x-main.app>
    <div>
        <p>Create a <a href="/threads/create" class="text-blue-500 mb-2">new thread</a></p>
    </div>
    <div class="columns-3 p-3 text-center">
        @foreach($threads as $thread)
            <p><a href="/threads/{{ $thread->channel->slug }}/{{ $thread->id }}" class="text-sm">{{ $thread->title }}</a></p>
        @endforeach
    </div>
</x-main.app>

