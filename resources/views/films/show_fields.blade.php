<!-- Film Field -->
<div class="col-sm-12">
    {!! Form::label('film', 'Film:') !!}
    <p>{{ $films->film }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('genres', 'Genres:') !!}
    <p>{{ implode(', ',$films->genres->pluck('genre')->all()) }}</p>
</div>


<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $films->description }}</p>
</div>

<!-- Release Date Field -->
<div class="col-sm-12">
    {!! Form::label('release_date', 'Release Date:') !!}
    <p>{{ $films->release_date }}</p>
</div>

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $films->rating }}</p>
</div>

<!-- Ticket Price Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    <p>{{ $films->ticket_price }}</p>
</div>

<!-- country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $films->related_country->name }}</p>
</div>

<!-- Photo Field -->
<div class="col-sm-12">
    {!! Form::label('photo', 'Photo:') !!}
    <p><img src="{{ env('BUCKET_URL').'/'.$films->photo }}" style="width:25%" /></p>
</div>


