<!doctype html>
<html>
    <head>
        <title>Blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        {{-- <h1 class="text-lg font-bold p-2">This is the blog page</h1>
        <a class="font-bold p-2" href={{ route('blog.index') }}>Actualiser</a>
        <a class="font-bold p-2" href={{ route('blog.show',['id'=>1,'name'=>"Ahmed"]) }}>Show</a> --}}
        <!-- To see only the title of the post -->
        {{-- {{ $posts->title }} --}}

        <!-- To see all rows -->
        {{-- {{ dump($posts) }} --}}

        <!-- Show with conditions -->
        {{-- @if (count($posts) === 100)
            <h2>
                {{  dd($posts) }}
            </h2>
            @else
            <h1 class="text-lg font-bold p-2">
                No Post is here now
            </h1>
        @endif --}}

        <!-- To show the titles of all items -->
        {{-- @forelse ($posts as $post)
            {{ $post->title }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show the numbers of items in side the loop starting from 0 -->
        {{-- @forelse ($posts as $post)
        {{ $loop->index }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show the numbers of items in side the loopstarting from the last row -->
        {{-- @forelse ($posts as $post)
        {{ $loop->remaining }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show numbers of items in side the loop starting from 1 -->
        {{-- @forelse ($posts as $post)
            {{ $loop->iteration }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show cout of items in side the loop -->
        {{-- @forelse ($posts as $post)
            {{ $loop->cout }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show the first item in side the loop -->
        {{-- @forelse ($posts as $post)
            {{ $loop->first }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show the last item in side the loop -->
        {{-- @forelse ($posts as $post)
            {{ $loop->last }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show how many loop using -->
        {{-- @forelse ($posts as $post)
            {{ $loop->depth }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <!-- To show the parent loop of the existing loop -->
        {{-- @forelse ($posts as $post)
            {{ $loop->parent }}
        @empty
            <p>No post have been set</p>
        @endforelse --}}

        <div class="w-4/5 mx-auto">
            <div class="text-center pt-20">
                <h1 class="text-3xl text-gray-700">
                    All Articles
                </h1>
                <hr class="border border-1 border-gray-300 mt-10">
            </div>
    
            <div class="py-10 sm:py-20">
                <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                   href="">
                    New Article
                </a>
            </div>
        </div>

        @foreach($posts as $post)

        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                <div class="w-11/12 mx-auto pb-10">
                    <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        <a href="{{ route('blog.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
    
                    <p class="text-gray-900 text-lg py-8 w-full break-words">
                        {{ $post->excerpt }}
                    </p>
    
                    <span class="text-gray-500 text-sm sm:text-base">
                        Made by:
                            <a href="{{ route('blog.show', $post->id) }}"
                               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                                Dary
                            </a>
                        on 13-07-2022
                    </span>
                </div>
            </div>
        </div>

        @endforeach

    </body>
</html>