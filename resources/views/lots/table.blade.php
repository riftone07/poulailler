<div class="table-responsive-sm">
    <table class="table table-striped" id="lots-table">
        <thead>
            <tr>
                <th>Libelle</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lots as $lot)
            <tr>
                <td>{{ $lot->libelle }}</td>
                <td>
                    {!! Form::open(['route' => ['lots.destroy', $lot->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lots.show', [$lot->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('lots.edit', [$lot->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>