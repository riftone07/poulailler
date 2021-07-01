<!-- Datereproduction Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dateReproduction', 'Date:') !!}
    {!! Form::date('dateReproduction', null, ['class' => 'form-control','id'=>'dateReproduction']) !!}
</div>

<!-- Lot Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lot_id', 'Lot :') !!}
    <select name="lot_id" class="form-control">
        @foreach ($lots as $lot)
            <option value="{{ $lot->id }}">{{ $lot->libelle }}</option>
        @endforeach
    </select>
</div>

<!-- Mortalite Male Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mortalite_male', 'Mortalité Male:') !!}
    {!! Form::number('mortalite_male', null, ['class' => 'form-control']) !!}
</div>

<!-- Mortalite Femelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mortalite_femelle', 'Mortalité Femelle:') !!}
    {!! Form::number('mortalite_femelle', null, ['class' => 'form-control']) !!}
</div>

<!-- Mortalite Totale Field -->
<div class="form-group col-sm-12">
    {!! Form::label('mortalite_totale', 'Mortalité Totale:') !!}
    {!! Form::number('mortalite_totale', null, ['class' => 'form-control']) !!}
</div>

<!-- Ponte Totale Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ponte_totale', 'Ponte Totale:') !!}
    {!! Form::number('ponte_totale', null, ['class' => 'form-control']) !!}
</div>

<!-- Mous Field -->
<div class="form-group col-sm-12">
    {!! Form::label('mous', 'Œufs Mous:') !!}
    {!! Form::text('mous', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Casses Field -->
<div class="form-group col-sm-12">
    {!! Form::label('casses', 'Œufs Cassés:') !!}
    {!! Form::text('casses', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Feles Field -->
<div class="form-group col-sm-12">
    {!! Form::label('feles', 'Œufs Félés:') !!}
    {!! Form::text('feles', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Rugueux Field -->
<div class="form-group col-sm-12">
    {!! Form::label('rugueux', 'Œufs Rugueux:') !!}
    {!! Form::text('rugueux', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gros Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gros', 'Œufs Gros:') !!}
    {!! Form::text('gros', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Petits Field -->
<div class="form-group col-sm-12">
    {!! Form::label('petits', 'Œufs Petits:') !!}
    {!! Form::text('petits', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Difformes Field -->
<div class="form-group col-sm-12">
    {!! Form::label('difformes', 'Œufs Difformes:') !!}
    {!! Form::text('difformes', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Couleur Field -->
<div class="form-group col-sm-12">
    {!! Form::label('couleur', 'Œufs de Couleur:') !!}
    {!! Form::text('couleur', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gel Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gel', 'Œufs Gelés:') !!}
    {!! Form::text('gel', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Evenement Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evenement', 'Evénement:') !!}
    {!! Form::textarea('evenement', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 mt-5">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
</div>
