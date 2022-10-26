@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Adding a New Department</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::open(['route' => 'departments.store']) }}

            {{ Form::label('title_sk', 'Title Slovak') }}
            {{ Form::text('title_sk', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('title_en', 'Title English') }}
            {{ Form::text('title_en', null, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection('content')