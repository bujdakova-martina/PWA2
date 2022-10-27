@extends('layouts.app')
@section('content')

<div class="container">

    <h3 class="mb-5">List of Courses</h3>
    
    <p><a href="{{ route('courses.create') }}" class="btn btn-secondary">Add New Course</a></p>
    
    <table class="table table-striped table-hover">
    <thead>
<tr>
    <th>id</th>
    <th>type</th>
    <th>title</th>
    <th>department</th>
    <th>credit</th>
    <th>semester</th>
    <th>supervisor</th>
    <th></th>
    <th></th>
</tr>
</thead>
<tbody>
    @foreach ($courses as $d)
    <tr @if($d->trashed())class="table-danger"@endif >
    <td>{{ $d->id }}</td>
    <td>{{ $d->type }}</td>
    <td>{{ $d->title }}</td>
    <td>{{ $d->department }}</td>
    <td>{{ $d->credit }}</td>
    <td>{{ $d->semester }}</td>
    <td>{!! $d->supervisor->full_name ?? '' !!}</td>
    <td><a class="btn btn-info" href="{{ route('courses.edit', $d->id) }}">Edit</a></td>
    <td>
        @if(!$d->trashed())
        {!! Form::open(array('route' => ['courses.destroy', $d->id], 'method'=>'DELETE')) !!}
        {!! Form::submit('delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the course.")')) !!}
        {!! Form::close() !!}
        @else
            {!! Form::open(array('route' => ['courses.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
            {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the course.")')) !!}
            {!! Form::close() !!}
            {!! Form::open(array('route' => ['courses.restore', $d->id], 'method'=>'POST')) !!}
            {!! Form::submit('Restore', array('class' => 'btn btn-success btn-sm mt-1')) !!}
            {!! Form::close() !!}
            @endif
    </td>
</tr>
@endforeach
</tbody>
    </table>
    
</div>

@endsection('content')