@extends(env('LAYOUTS_ADMIN'))

@push('content')
    <h2 class="mb-4 text-5xl text-gray-600">All Users</h2>
    <div class="grid grid-cols-4 gap-4">
        <x-utilities.cards.datatable
            class="col-span-4"
            cardHeader="List of all Users"
            cardTableId="users"
            :cardTableData="$table"
        />
    </div>
@endpush

@push('deferred')
    <script>
        $(document).ready(function()
        {
            $('#users').DataTable({
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