@extends(env('LAYOUTS_ADMIN'))
@dump($post->created_at->format('Y-m-d'))
@push('content')
    {{-- <x-utilities.jumbotron
        fluid="1"
        title="Editing the post: {{ $post->title }}"
    /> --}}
    
    <hr>

    <form class="w-full p-4 mt-4">
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-2/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-first-name">Title</label>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="grid-title"
                    type="text"
                    placeholder="Title of the post"
                >
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-first-name">{{ $post->slug }}</label>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-red-500 rounded appearance-none focus:outline-none focus:bg-white" 
                    id="grid-slug" 
                    type="text" 
                    placeholder="{{ $post->slug }}"
                >
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-content">Content</label>
                <textarea class="block w-full h-40 px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-red-500 rounded appearance-none focus:outline-none focus:bg-white">{{ $post->body }}</textarea>
            </div>
        </div>

        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">Created</label>
                <x-utilities.inputs.input-date
                    name="created"
                    date="{{ $post->created_at }}"
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">Updated</label>
                <x-utilities.inputs.input-date
                    name="updated"
                    date="{{ $post->updated_at }}"
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-city">Published</label>
                <x-utilities.inputs.input-date
                    name="published"
                    date="{{ $post->published_at }}"
                />
            </div>
        </div>
        
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-state">Authored By</label>

                <div class="relative">
                    <select
                        class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-authored"
                    >
                        @foreach ($users as $user)
                            @if ($user->id === $post->authored_by)
                                <option selected>{{ $user->name }}</option>
                            @else
                                <option>{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>

                    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endpush