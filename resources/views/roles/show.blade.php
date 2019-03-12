@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
        @if($role->user_id == Auth::user()->id || Auth::user()->role_id < 3)
        <a href="{!! route('roles.edit',[$role->id]) !!}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
            @endif
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('roles.show_fields')
                    <a href="{!! route('roles.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
