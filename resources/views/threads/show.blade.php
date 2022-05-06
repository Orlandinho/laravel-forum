<x-main.app>
    <div class="text-center bg-white overflow-hidden border border-gray-400 shadow-sm sm:rounded-lg text-gray-600">
        <div class="border-b border-gray-400 p-3 text-2xl">
            {{ $thread->title }}
            <p class="text-sm">Posted by: <a href="user/{{ $thread->creator->id }}" class="text-blue-500"> {{ $thread->creator->name }} </a></p>
        </div>
        <div class="text-lg px-3 py-1">
            {{ $thread->body }}
        </div>
    </div>
    <div class="mt-4 bg-white overflow-hidden border border-gray-400 shadow-sm sm:rounded-lg text-gray-600">
        @foreach($thread->replies as $replied)
            <div class="border-b last:border-b-0 border-gray-400 p-3 text-md">
                <a href="user/{{ $replied->owner->id }}" class="text-blue-500"> {{ $replied->owner->name }} </a> said {{ $replied->created_at->diffForHumans() }}
                <div class="w-5xl mt-2 bg-gray-200 p-1 text-center text-sm">
                    {{ $replied->body }}
                </div>
            </div>

        @endforeach
    </div>
    @auth
        <div class="mt-4">
            <form action="/threads/{{ $thread->id }}/replies" method="POST">
                @csrf
                <textarea name="body" class="rounded-lg focus:ring-0 border border-gray-400 focus:border-gray-500 w-full text-gray-600" placeholder="Say Something!" cols="30" rows="3"></textarea>
                <button type="submit" class="bg-blue-400 text-white mt-2 rounded-lg hover:bg-blue-500 py-1.5 px-3">Reply</button>
            </form>
        </div>
    @else
        <div class="mt-4 text-gray-600">
            <p>Join the conversation! <a href="{{ route('login') }}" class="text-blue-500">Login</a> or <a href="{{ route('register') }}" class="text-blue-500">Register</a></p>
        </div>
    @endauth
</x-main.app>

