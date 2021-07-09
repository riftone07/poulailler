<!-- Datereproduction Field -->
<div class="form-group">
    {!! Form::label('dateReproduction', 'Date de réproduction :') !!}
    <p>{{ $poulayer->dateReproduction }}</p>
</div>

<!-- Lot Id Field -->
<div class="form-group">
    {!! Form::label('lot_id', 'Lot:') !!}
    <p>{{ $poulayer->lot->libelle }}</p>
</div>

<!-- Mortalite Male Field -->
<div class="form-group">
    {!! Form::label('mortalite_male', 'Mortalité Male:') !!}
    <p>{{ $poulayer->mortalite_male }}</p>
</div>

<!-- Mortalite Femelle Field -->
<div class="form-group">
    {!! Form::label('mortalite_femelle', 'Mortalité Femelle:') !!}
    <p>{{ $poulayer->mortalite_femelle }}</p>
</div>

<!-- Mortalite Totale Field -->
<div class="form-group">
    {!! Form::label('mortalite_totale', 'Mortalité Totale:') !!}
    <p>{{ $poulayer->mortalite_totale }}</p>
</div>

<!-- Ponte Totale Field -->
<div class="form-group">
    {!! Form::label('ponte_totale', 'Ponte Totale:') !!}
    <p>{{ $poulayer->ponte_totale }}</p>
</div>

<!-- Mous Field -->
<div class="form-group">
    {!! Form::label('mous', 'Œufs Mous:') !!}
    <p>{{ $poulayer->mous }}</p>
</div>

<!-- Casses Field -->
<div class="form-group">
    {!! Form::label('casses', 'Œufs Cassés:') !!}
    <p>{{ $poulayer->casses }}</p>
</div>

<!-- Feles Field -->
<div class="form-group">
    {!! Form::label('feles', 'Œufs Félés:') !!}
    <p>{{ $poulayer->feles }}</p>
</div>

<!-- Rugueux Field -->
<div class="form-group">
    {!! Form::label('rugueux', 'Œufs Rugueux:') !!}
    <p>{{ $poulayer->rugueux }}</p>
</div>

<!-- Gros Field -->
<div class="form-group">
    {!! Form::label('gros', 'Œufs Gros:') !!}
    <p>{{ $poulayer->gros }}</p>
</div>

<!-- Petits Field -->
<div class="form-group">
    {!! Form::label('petits', 'Œufs Petits:') !!}
    <p>{{ $poulayer->petits }}</p>
</div>

<!-- Difformes Field -->
<div class="form-group">
    {!! Form::label('difformes', 'Œufs Difformés:') !!}
    <p>{{ $poulayer->difformes }}</p>
</div>

<!-- Couleur Field -->
<div class="form-group">
    {!! Form::label('couleur', 'Œufs de Couleur:') !!}
    <p>{{ $poulayer->couleur }}</p>
</div>

<!-- Gel Field -->
<div class="form-group">
    {!! Form::label('gel', 'Œufs Gelés:') !!}
    <p>{{ $poulayer->gel }}</p>
</div>

<!-- Evenement Field -->
<div class="form-group">
    {!! Form::label('evenement', 'Evénement:') !!}
    <p>{{ $poulayer->evenement }}</p>
</div>

