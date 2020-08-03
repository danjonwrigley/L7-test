<div class="{{ $class ?? null }} card">
    <div class="card-header">{{ $cardHeader ?? '' }}</div>

    <div class="card-body">
        <table id="{{ $cardTableId ?? null }}" class="table table-striped table-bordered display dataTable no-footer">
            <thead>
                <tr>
                    @foreach ($cardTableData['columnNames'] as $columnName)
                        <th>{{ $columnName }}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach ($cardTableData['rows'] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>