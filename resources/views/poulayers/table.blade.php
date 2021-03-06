<div class="table-responsive-sm">
    <table class="table table-striped" id="poulayers-table">
        <thead>
        <tr>
            <th>Date de réproduction</th>
            <th>Lot</th>
            <th>Mortalité Male</th>
            <th>Mortalité Femelle</th>
            <th>Mortalité Totale</th>
            <th>Ponte Totale</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($poulayers as $poulayer)
            <tr>
                <td>{{ $poulayer->dateReproduction->format('d/m/Y') }}</td>
                <td>{{ $poulayer->lot->libelle }}</td>
                <td>{{ $poulayer->mortalite_male }}</td>
                <td>{{ $poulayer->mortalite_femelle }}</td>
                <td>{{ $poulayer->mortalite_totale }}</td>
                <td>{{ $poulayer->ponte_totale }}</td>
                <td>
                    {!! Form::open(['route' => ['poulayers.destroy', $poulayer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('poulayers.show', [$poulayer->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('poulayers.edit', [$poulayer->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
