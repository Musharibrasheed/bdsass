<div class="table-responsive">
    <table class="table" id="genres-table">
        <thead>
        <tr>
            <th>Genre</th>
        <th>Slug</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($genres as $genres)
            <tr>
                <td>{{ $genres->genre }}</td>
            <td>{{ $genres->slug }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['genres.destroy', $genres->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('genres.show', [$genres->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('genres.edit', [$genres->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
