@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Roles
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

                @include('roles.fields')
                <div class="form-group col-sm-6">
                    <label for="permissions">Permisos:</label>
                    <select required="required" multiple="multiple" name="permissions[]" class="form-control"
                        id="permissions">
                        @foreach($permissions as $permission){
                        <option
                            {{in_array($permission->id, $role->permissions->pluck('id')->toArray())? 'selected':'' }}
                            value="{{$permission->id}}">{{$permission->name}}</option>
                        }
                        @endforeach
                    </select>
                </div>
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection