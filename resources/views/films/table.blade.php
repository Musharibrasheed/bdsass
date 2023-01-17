<div class="table-responsive">
    <table class="table" id="films-table">
        <thead>
        <tr>
            <th>Film</th>
            <th>Release Date</th>
            <th>Rating</th>
            <th>Ticket Price</th>
            <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $film->film ?? '' }}</td>
            <td>{{ !empty($film->release_date) ? date('d M, y', strtotime($film->release_date)) : '' }}</td>
            <td>{{ $film->rating ?? '' }}</td>
            <td>{{ $film->ticket_price ?? '' }}</td>
            <td>
                @if( !empty($film->photo))
                    <img src="{{ env('BUCKET_URL').'/'.$film->photo }}" style="width:100px; height:100px;" />
                @endif
            <td>
            <div class='btn-group'>
                @if( !empty($film->id))
                <a href="{{ route('show_details', [$film->slug ?? '']) }}" class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                </a>
                @endif
                <a href="{{ route('films.index',['skip'=> !empty($film->prev) ?( $film->prev - 1) : 0,'limit'=>$film->limit ?? 1]) }}" class='btn btn-default btn-xs' >Previous</a>
                <a href="{{ route('films.index',['skip'=>$film->next ?? 0,'limit'=>$film->limit ?? 1]) }}" class='btn btn-default btn-xs'>Next</a>
            </td>
                
            </tr>
            
        </tbody>
    </table>
    @if( !empty($film->comments->comments) )
    <table class="table">
        <tr>
            <th>Name:</th>
            <th>Comments:</th>
        </tr>
        @foreach( $film->comments->comments as $comment )
        <tr>
            <td>{{ $comment->name ?? "" }}</td>
            <td>{{ $comment->comments ?? "" }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
    @endif
    <table class="table">
        <tbody>
            <tr>
                <td>
                    @if (!Auth::user())
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in to post comments</a>
                    @endif
                </td>
                <td>
                    @if (Route::has('login') && !empty($film->id))
                        @auth
                            <div class="content px-3">

                                @include('adminlte-templates::common.errors')

                                <div class="card">

                                    {!! Form::open(['route' => 'comments.store']) !!}
                                    {!! Form::hidden('films_id', $film->id??0, ['class' => 'form-control']) !!}

                                    <div class="card-body">

                                        <div class="row">
                                            @include('comments.fields')
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                    </div>

                                    {!! Form::close() !!}

                                </div>

                            </div>
                        @endauth
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>
