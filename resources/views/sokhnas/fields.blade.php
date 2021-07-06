<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Datereproduction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateReproduction', 'Datereproduction:') !!}
    {!! Form::text('dateReproduction', null, ['class' => 'form-control','id'=>'dateReproduction']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#dateReproduction').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Lot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lot_id', 'Lot Id:') !!}
    {!! Form::number('lot_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mortalite Male Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mortalite_male', 'Mortalite Male:') !!}
    {!! Form::number('mortalite_male', null, ['class' => 'form-control']) !!}
</div>

<!-- Mortalite Femelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mortalite_femelle', 'Mortalite Femelle:') !!}
    {!! Form::number('mortalite_femelle', null, ['class' => 'form-control']) !!}
</div>

<!-- Mortalite Totale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mortalite_totale', 'Mortalite Totale:') !!}
    {!! Form::number('mortalite_totale', null, ['class' => 'form-control']) !!}
</div>

<!-- Ponte Totale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ponte_totale', 'Ponte Totale:') !!}
    {!! Form::number('ponte_totale', null, ['class' => 'form-control']) !!}
</div>

<!-- Mous Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mous', 'Mous:') !!}
    {!! Form::text('mous', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Casses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('casses', 'Casses:') !!}
    {!! Form::text('casses', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Feles Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feles', 'Feles:') !!}
    {!! Form::text('feles', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Rugueux Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rugueux', 'Rugueux:') !!}
    {!! Form::text('rugueux', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gros', 'Gros:') !!}
    {!! Form::text('gros', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Petits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petits', 'Petits:') !!}
    {!! Form::text('petits', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Difformes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('difformes', 'Difformes:') !!}
    {!! Form::text('difformes', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Couleur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('couleur', 'Couleur:') !!}
    {!! Form::text('couleur', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gel', 'Gel:') !!}
    {!! Form::text('gel', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Evenement Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evenement', 'Evenement:') !!}
    {!! Form::textarea('evenement', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sokhnas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
