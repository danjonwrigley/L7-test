@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <x-utilities.jumbotron
        fluid="1"
        title="Create new post"
    />

    <hr class="mb-6">

    <form action="{{ route('post-store') }}" method="post">
        @csrf
        
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-2/3 md:mb-0">
                <x-utilities.inputs.text
                    id="title"
                    name="title"
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.text
                    id="slug" 
                    name="slug" 
                />
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <x-utilities.inputs.textarea
                    name="content"
                    cols="30"
                    rows="10"
                />
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.date
                    name="created"
                    date=""
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.date
                    name="updated"
                    date=""
                />
            </div>

            <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <x-utilities.inputs.date
                    name="published"
                    date=""
                />
            </div>
        </div>
        
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/4 md:mb-0">
                <x-utilities.inputs.select
                    id="authored"
                    name="authored"
                    :options="$users"
                />
            </div>
        </div>
    </form>
@endpush