@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update of the Course: {{ $course->title }}</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'PUT']) }}

            {{ Form::label('type', 'Type') }}
            @if($errors->has('type'))
                @error('type')
                    {{ Form::text('type', $course->type, array('class' => 'form-control is-invalid')) }}
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                @enderror
            @else
                {{ Form::text('type', $course->type, array('class' => 'form-control mb-3')) }}
            @endif

            {{ Form::label('title', 'Title') }}
            @if($errors->has('title'))
                @error('title')
                    {{ Form::text('title', $course->title, array('class' => 'form-control is-invalid')) }}
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                @enderror
            @else
                {{ Form::text('title', $course->title, array('class' => 'form-control mb-3')) }}
            @endif

            {{ Form::label('department', 'Department') }}
            {{ Form::text('department', $course->department, array('class' => 'form-control mb-3')) }}

            {{ Form::label('credit', 'Credit') }}
            {{ Form::text('credit', $course->credit, array('class' => 'form-control mb-3')) }}

            {{ Form::label('semester', 'Semester') }}
            {{ Form::text('semester', $course->semester, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection