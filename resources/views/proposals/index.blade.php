@extends('templates.main')

@section('title')
    Proposals
@endsection

@section('subtitle')
    Home
@endsection

@section('heading')
    List of Proposals
@endsection

@section('content')
<a class="btn btn-primary float-right" href="{{URL::to('/proposals/create')}}">Create Proposal</a>
<div class="container">
    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Student Name</th>
            <th scope="col">Session</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach ($proposals as $proposal)
                <tr>
                    <td scope="row">1</td>
                    <td>{{$proposal->title}}</td>
                    <td>{{$proposal->student_name}}</td>
                    <td>{{$proposal->session}}</td>
                    <td class="row">
                        <a href="{{URL::to('/proposals/'.$proposal->id)}}" class="btn btn-sm btn-success">View</a>
                        {{-- <a href="#" class="btn btn-sm btn-danger">X</a> --}}
                        {!!Form::open(['action' => ['App\Http\Controllers\ProposalController@destroy', $proposal->id], 'method' => 'DELETE'])!!}
                            {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger ml-1'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection