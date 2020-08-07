@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <x-utilities.jumbotron
        fluid="1"
        title="Editing the post: {{ $post->title }}"
    />

    <form class="w-full px-4" method="POST" action="">
        @csrf

        <div class="flex flex-row-reverse flex-wrap mb-6 -mx-3">
            <x-utilities.inputs.button
                href="#"
                text="Delete"
                type="danger"
            />

            <x-utilities.inputs.button
                href="#"
                text="Save"
                type="success"
            />

            <x-utilities.inputs.button
                href="{{ route('posts') }}"
                text="Cancel"
                type="link"
            />
        </div>

        <hr class="mb-4">

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-2/3 md:mb-0">
                <x-utilities.inputs.text
                    id="title"
                    name="title"
                    value="{{ $post->title }}"
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.text
                    id="slug" 
                    name="slug" 
                    value="{{ $post->slug }}"
                />
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <x-utilities.inputs.textarea
                    name="content"
                    content="{{ $post->body }}"
                    cols="30"
                    rows="10"
                />
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.date
                    name="created"
                    date="{{ $post->created_at }}"
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.date
                    name="updated"
                    date="{{ $post->updated_at }}"
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.date
                    name="published"
                    date="{{ $post->published_at }}"
                />
            </div>
        </div>
        
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/4 md:mb-0">
                <label for="grid-authored">Authored By</label>

                <div class="relative">
                    <x-utilities.inputs.select
                        id="authored"
                        name="authored"
                        :options="$users"
                        selected="{{ $post->authored }}"
                    />
                </div>
            </div>
        </div>
    </form>
@endpush