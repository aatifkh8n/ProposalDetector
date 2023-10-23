@extends('templates.main')

@section('title')
    Proposals
@endsection

@section('subtitle')
    Edit
@endsection

@section('heading')
    Edit a Proposal
@endsection

@section('content')
    <div class="container my-5">
        <h2>Edit Form</h2>
        {!!Form::open(['action' => ['App\Http\Controllers\ProposalController@update', $proposal->id], 'method' => 'PUT'])!!}
   
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" name="title" id="title" type="text" value="{{$proposal->title}}" autofocus>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="category">Category</label>
                <input class="form-control" name="category" id="category" type="text" value="{{$proposal->category}}">
            </div>
    
            <div class="form-group col">
                <label for="tech_stack">Tech Stack</label>
                <input class="form-control" name="tech_stack" id="tech_stack" type="text" value="{{$proposal->tech_stack}}">
            </div>
        </div>
        <div class="form-group">
            <label for="tools">Tools</label>
            <input class="form-control" name="tools" id="tools" type="text" value="{{$proposal->tools}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" name="description" id="description" type="textarea" value="{{$proposal->description}}">
        </div>
        <hr>
        <div class="form-group">
            <label for="student_name">Student Name</label>
            <input class="form-control" name="student_name" id="student_name" type="text" value="{{$proposal->student_name}}">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input class="form-control" name="date" id="date" type="date" value="{{$proposal->date}}">
        </div>
        <div class="form-group">
            <label for="session">Session</label>
            <input class="form-control" name="session" id="session" type="text" value="{{$proposal->session}}">
        </div>
        <div class="form-group">
            <label for="group_size">Group Size</label>
            <input class="form-control" name="group_size" id="group_size" type="number" value="{{$proposal->group_size}}">
        </div>
        <div class="float-right">
            <a href="{{URL::to('/proposals/'.$proposal->id)}}" class="btn btn-secondary">Cancel</a>
            {{Form::submit('Update Proposal', ['class' => 'btn btn-info ml-1'])}}
        </div>
        {!!Form::close()!!}
    </div>
@endsection