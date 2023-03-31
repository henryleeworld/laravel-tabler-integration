@extends('layouts.app')
@section('content')
<div class="container-xl">
    <div class="page-header d-print-none">
        <h2 class="page-title">
            {{ trans('global.show') }} {{ trans('cruds.permission.title') }}
        </h2>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.permission.fields.id') }}
                                </th>
                                <td>
                                    {{ $permission->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.permission.fields.title') }}
                                </th>
                                <td>
                                    {{ $permission->name }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <nav class="mb-3">
                    <div class="nav nav-tabs">
                    </div>
                </nav>
                <div class="tab-content">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection