@extends('templates.main')

@section('title')
    Proposals
@endsection

@section('subtitle')
    Show
@endsection

@section('heading')
    Show a Proposal
@endsection

@section('content')
    <div class="container my-5">
        <h2>Proposal</h2>
        <table class="table">
            <tr scope="row">
                <td>Title</td>
                <td>{{$proposal->title}}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{$proposal->category}}</td>
            </tr>
            <tr>
                <td>Tools</td>
                <td>{{$proposal->tools}}</td>
            </tr>
            <tr>
                <td>Tech Stack</td>
                <td>{{$proposal->tech_stack}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$proposal->description}}</td>
            </tr>
            <tr>
                <td>Student Name</td>
                <td>{{$proposal->student_name}}</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>{{$proposal->date}}</td>
            </tr>
            <tr>
                <td>Session</td>
                <td>{{$proposal->session}}</td>
            </tr>
            <tr>
                <td>Group Size</td>
                <td>{{$proposal->group_size}}</td>
            </tr>
        </table>
        <div class="row float-right px-3">
            <a href="{{URL::to('/proposals')}}" class="btn btn-secondary">Back</a>
            {!!Form::open(['action' => ['App\Http\Controllers\ProposalController@destroy', $proposal->id], 'method' => 'DELETE'])!!}
                {{Form::submit('Delete', ['class' => 'btn btn-danger ml-1'])}}
            {!!Form::close()!!}
            <a href="{{URL::to('/proposals/'.$proposal->id.'/edit')}}" class="btn btn-info ml-1">Edit</a>
        </div>
    </div>
@endsection