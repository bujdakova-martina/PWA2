@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Adding a New Course</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::open(['route' => 'courses.store']) }}

            {{ Form::label('type', 'Type') }}
            @if($errors->has('type'))
            @error('type')
        {{ Form::text('type', null, array('class' => 'form-control is-invalid')) }}
        <div class="invalid-feedback mb-3">
            {{ $message }}
        </div>
        @enderror 
        @else
            {{ Form::text('type', null, array('class' => 'form-control mb-3')) }}
@endif
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('department', 'Department') }}
            {{ Form::text('department', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('credit', 'Credit') }}
            {{ Form::text('credit', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('semester', 'Semester') }}
            {{ Form::text('semester', null, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection