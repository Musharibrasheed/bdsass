<div class="table-responsive">
    <table class="table" id="comments-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Comments</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comments)
            <tr>
                <td>{{ $comments->name }}</td>
            <td>{{ $comments->comments }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['comments.destroy', $comments->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comments.show', [$comments->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('comments.edit', [$comments->id]) }}"
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
