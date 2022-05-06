<x-main.app>
    <div class="max-w-3xl mx-auto border border-gray-300 text-gray-600 rounded-md">
        @auth
            <form action="/threads" method="post">
                @csrf
                <div class="p-2 text-center border-b">
                    <p>Create a New Thread</p>
                </div>
                <div class="py-2 px-4 mb-2">
                    <label for="title" class="block font-semibold mb-2">Title</label>
                    <input type="text" autofocus name="title"
                           class="w-full px-2 py-1 focus:ring-0 border-gray-300 focus:border-gray-400 rounded-md"
                           id="title" />
                </div>
                <div class="py-2 px-4">
                    <label for="body" class="block font-semibold mb-2">Body</label>
                    <textarea name="body"
                              class="w-full px-2 py-1 focus:ring-0 border-gray-300 focus:border-gray-400 rounded-md"
                              rows="3" id="body"></textarea>
                </div>
                <div class="py-2 px-4">
                    <label for="channel" class="block font-semibold mb-2">Tags</label>
                    <div class="w-full px-2 py-1 inline-flex justify-evenly items-center border border-gray-300 rounded-md">
                        @foreach($tags as $tag)
                            <div>
                                <input type="radio" name="channel" id="{{ $tag->id }}" value="{{ $tag->id }}"/>
                                <label for="{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="py-2 px-4">
                    <button type="submit" class="px-4 py-1.5 rounded-md bg-blue-400 hover:bg-blue-500 text-white">Publish
                    </button>
                </div>
            </form>
        @else
            <div class="p-2 text-center">
                <p>You need to <a href="{{ route('login') }}" class="text-blue-500">sign in</a> to create a new thread</p>
                <p>Don't have an account yet? Just <a href="{{ route('register') }}" class="text-blue-500">create</a> one, it's free!</p>
            </div>
        @endauth
    </div>
</x-main.app>

