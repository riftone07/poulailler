<div class="table-responsive-sm">
    <table class="table table-striped" id="sokhnas-table">
        <thead>
            <tr>
                <th>Prenom</th>
        <th>Nom</th>
        <th>Telephone</th>
        <th>Adresse</th>
        <th>Email</th>
        <th>Datereproduction</th>
        <th>Lot Id</th>
        <th>User Id</th>
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
        @foreach($sokhnas as $sokhna)
            <tr>
                <td>{{ $sokhna->prenom }}</td>
            <td>{{ $sokhna->nom }}</td>
            <td>{{ $sokhna->telephone }}</td>
            <td>{{ $sokhna->adresse }}</td>
            <td>{{ $sokhna->email }}</td>
            <td>{{ $sokhna->dateReproduction }}</td>
            <td>{{ $sokhna->lot_id }}</td>
            <td>{{ $sokhna->user_id }}</td>
            <td>{{ $sokhna->mortalite_male }}</td>
            <td>{{ $sokhna->mortalite_femelle }}</td>
            <td>{{ $sokhna->mortalite_totale }}</td>
            <td>{{ $sokhna->ponte_totale }}</td>
            <td>{{ $sokhna->mous }}</td>
            <td>{{ $sokhna->casses }}</td>
            <td>{{ $sokhna->feles }}</td>
            <td>{{ $sokhna->rugueux }}</td>
            <td>{{ $sokhna->gros }}</td>
            <td>{{ $sokhna->petits }}</td>
            <td>{{ $sokhna->difformes }}</td>
            <td>{{ $sokhna->couleur }}</td>
            <td>{{ $sokhna->gel }}</td>
            <td>{{ $sokhna->evenement }}</td>
                <td>
                    {!! Form::open(['route' => ['sokhnas.destroy', $sokhna->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sokhnas.show', [$sokhna->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sokhnas.edit', [$sokhna->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>