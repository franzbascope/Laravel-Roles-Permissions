<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Permissions</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                @php($permissionsConcatenated = '')
                @foreach($role->permissions as $permission)
                @php ($permissionsConcatenated .=', '.$permission->name)
                @endforeach
                <td>{{substr($permissionsConcatenated,2) }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                        @can('edit_roles')
                        <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('delete_roles')
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