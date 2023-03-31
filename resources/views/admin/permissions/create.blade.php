@extends('layouts.app')
@section('content')
<div class="container-xl">
    <div class="page-header d-print-none">
        <h2 class="page-title">
            {{ trans('global.create') }} {{ trans('cruds.permission.title_singular') }}
        </h2>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("admin.permissions.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="col-sm-2 col-form-label">{{ trans('cruds.permission.fields.title') }}*</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($permission) ? $permission->name : '') }}" required>
                            @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                            @endif
                        </div>
                        <p class="helper-block">
                            {{ trans('cruds.permission.fields.title_helper') }}
                        </p>
                    </div>
                    <div>
                        <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection