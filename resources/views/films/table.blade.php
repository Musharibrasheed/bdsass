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
            <td>{{ $film->release_date ?? '' }}</td>
            <td>{{ $film->rating ?? '' }}</td>
            <td>{{ $film->ticket_price ?? '' }}</td>
            <td><img src="{{ env('BUCKET_URL').'/'.$film->photo }}" style="width:100px; height:100px;" /></td>
            <td>
            <div class='btn-group'>
                <a href="{{ route('show_details', [$film->slug]) }}" class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                </a>
                <a href="{{ route('films.index',['skip'=> !empty($film->prev) ?( $film->prev - 1) : 0,'limit'=>$film->limit ?? 1]) }}" class='btn btn-default btn-xs' >Previous</a>
                <a href="{{ route('films.index',['skip'=>$film->next ?? 0,'limit'=>$film->limit ?? 1]) }}" class='btn btn-default btn-xs'>Next</a>
            </td>
                
            </tr>
        </tbody>
    </table>
</div>
