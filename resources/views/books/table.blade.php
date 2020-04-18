<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Author</th>
                <th>Publication Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $books)
            <tr>
                <td>{{ $books->name }}</td>
                <td>{{ $books->email_author }}</td>
                <td>{{ $books->publication_year }}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$books->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                        @can('edit_books')
                        <a href="{{ route('books.edit', [$books->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('delete_books')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
                        'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>