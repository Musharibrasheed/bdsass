<!-- Film Field -->
<div class="form-group col-sm-6">
    {!! Form::label('film', 'Film:') !!}
    {!! Form::text('film', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::select('rating', array('1' => '1', '2' => '2', 3=> '3', 4 => '4', 5 => '5'), null, ['class' => 'form-control'])  !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Release Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('release_date', 'Release Date:') !!}
    {!! Form::text('release_date', null, ['class' => 'form-control','id'=>'release_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#release_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Ticket Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    {!! Form::number('ticket_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Counrty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', $countries, null, ['class' => 'form-control'])  !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Photo:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('photo', ['class' => 'custom-file-input']) !!}
            {!! Form::label('photo', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>

<!-- Ticket Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('genre', 'Genre:') !!}
    {!! Form::select('genre[]', $genres, null, ['class' => 'form-control', 'multiple'=>true])  !!}
</div>

<div class="clearfix"></div>
