@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>All projects</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        @if(count($projects) > 0)
        <table class="table table-hover">
            <thead class="thead-white">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Jobs done</th>
                <th>Start date</th>
                <th>End date</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>
                        <div>{{$project->id}}</div>
                    </td>
                    <td>
                        <div>{{$project->name}}</div>
                    </td>
                    <td>
                        <div>{{$project->description}}</div>
                    </td>
                    <td>
                        <div>{{$project->price}}</div>
                    </td>
                    <td>
                        <div>{{$project->jobs_done}}</div>
                    </td>
                    <td>
                        <div>{{$project->start_date}}</div>
                    </td>
                    <td>
                        <div>{{$project->end_date}}</div>
                    </td>
                    <td><a class="btn btn-primary" href="{{ route('editproject', $project->id) }}">Edit</a></td>
                    @if($project->leader == Auth::user()->getId())
                    <td><a class="btn btn-primary" href="{{ route('users', $project->id) }}">Add user</a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        No projects.
        @endif
    </div>
</body>

</html>
@endsection