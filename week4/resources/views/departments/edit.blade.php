@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update of the department: {{ $departments->title_sk }}</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($departments, ['route' => ['departments.update', $departments->id], 'method' => 'PUT']) }}

            {{ Form::label('title_sk', 'Title Slovak') }}
            @if($errors->has('title_sk'))
                @error('title_sk')
                    {{ Form::text('title_sk', $departments->title_sk, array('class' => 'form-control is-invalid')) }}
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                @enderror
            @else
                {{ Form::text('title_sk', $departments->title_sk, array('class' => 'form-control mb-3')) }}
            @endif

            {{ Form::label('title_en', 'Title Slovak') }}
            @if($errors->has('title_en'))
                @error('title_en')
                    {{ Form::text('title_en', $departments->title_en, array('class' => 'form-control is-invalid')) }}
                    <div class="invalid-feedback mb-3">
                        {{ $message }}
                    </div>
                @enderror
            @else
                {{ Form::text('title_en', $departments->title_en, array('class' => 'form-control mb-3')) }}
            @endif
            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection