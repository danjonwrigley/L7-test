@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <div class="grid grid-cols-2 gap-4">
        <h2 class="mb-4 text-5xl text-gray-600">All Posts</h2>

        <div class="flex self-center justify-end col-span-1 col-end-3">
            <x-utilities.inputs.button
                href="{{ route('post-create') }}"
                text="Create New"
                type="primary"
            />
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4">
        <x-utilities.cards.datatable
            class="col-span-4"
            cardHeader="List of all posts"
            cardTableId="posts"
            :cardTableData="$table"
        />
    </div>
@endpush

@push('deferred')
    <script>
        $(document).ready(function()
        {
            $('#posts').DataTable({
                'pageLength' : 5,
                'lengthMenu' : [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"],
                ],
                "columnDefs": [
                    {
                        "className" : "no-wrap",
                        "targets" : 4
                    },
                ],
            });
        });
    </script>
@endpush