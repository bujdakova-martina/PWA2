@extends('layouts.app')
@section('content')

<div class="container">
<p><a href="{{ route('departments.create') }}" class="btn btn-secondary">Add New Course</a></p>
    <h3 class="mb-5">List of Departments</h3>

    
    <table class="table table-striped table-hover">
    <thead>
<tr>
    <th>id</th>
    <th>Slovak title</th>
    <th>English title</th>
    <th></th>
    <th></th>
</tr>
</thead>
<tbody>
@foreach ($departments as $d)
<tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->title_sk }}</td>
    <td>{{ $d->title_en }}</td>
    <td><a class="btn btn-info" href="{{ route('departments.edit', $d->id) }}">Edit</a></td>
    <td>
        {!! Form::open(array('route' => ['departments.destroy', $d->title_sk], 'method'=>'DELETE')) !!}
        {!! Form::submit('delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the department.")')) !!}
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
</tbody>
    </table>
    
</div>

@endsection('content')