<div class="table-responsive-sm">
    <table class="table table-striped" id="poulayers-table">
        <thead>
            <tr>
                <th>Datereproduction</th>
        <th>Lot Id</th>
        <th>Mortalite Male</th>
        <th>Mortalite Femelle</th>
        <th>Mortalite Totale</th>
        <th>Ponte Totale</th>
        <th>Mous</th>
        <th>Casses</th>
        <th>Feles</th>
        <th>Rugueux</th>
        <th>Gros</th>
        <th>Petits</th>
        <th>Difformes</th>
        <th>Couleur</th>
        <th>Gel</th>
        <th>Evenement</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($poulayers as $poulayer)
            <tr>
                <td>{{ $poulayer->dateReproduction }}</td>
            <td>{{ $poulayer->lot_id }}</td>
            <td>{{ $poulayer->mortalite_male }}</td>
            <td>{{ $poulayer->mortalite_femelle }}</td>
            <td>{{ $poulayer->mortalite_totale }}</td>
            <td>{{ $poulayer->ponte_totale }}</td>
            <td>{{ $poulayer->mous }}</td>
            <td>{{ $poulayer->casses }}</td>
            <td>{{ $poulayer->feles }}</td>
            <td>{{ $poulayer->rugueux }}</td>
            <td>{{ $poulayer->gros }}</td>
            <td>{{ $poulayer->petits }}</td>
            <td>{{ $poulayer->difformes }}</td>
            <td>{{ $poulayer->couleur }}</td>
            <td>{{ $poulayer->gel }}</td>
            <td>{{ $poulayer->evenement }}</td>
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