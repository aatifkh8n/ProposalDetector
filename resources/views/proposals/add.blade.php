@extends('templates.main')

@section('title')
    Proposals
@endsection

@section('subtitle')
    Add
@endsection

@section('content')
<div class="my-5">
    <h2>Create Form</h2>
{!!Form::open(['action' => 'App\Http\Controllers\ProposalController@store', 'method' => 'POST'])!!}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" name="title" id="title" type="text" autofocus>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label for="category">Category</label>
            <input class="form-control" name="category" id="category" type="text">
        </div>

        <div class="form-group col">
            <label for="tech_stack">Tech Stack</label>
            <input class="form-control" name="tech_stack" id="tech_stack" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="tools">Tools</label>
        <input class="form-control" name="tools" id="tools" type="text">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control" name="description" id="description" type="textarea">
    </div>
    <hr>
    <div class="form-group">
        <label for="supervisor">Supervisor Name</label>
        <input class="form-control" name="supervisor" id="supervisor" type="text">
    </div>
    <div class="form-group">
        <label for="student_name">Student Name</label>
        <input class="form-control" name="student_name" id="student_name" type="text">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" name="date" id="date" type="date">
    </div>
    <div class="form-group">
        <label for="session">Session</label>
        <input class="form-control" name="session" id="session" type="text">
    </div>
    <div class="form-group">
        <label for="group_size">Group Size</label>
        <input class="form-control" name="group_size" id="group_size" type="number">
    </div>
    <a href="{{URL::to('/proposals')}}" class="btn btn-secondary">Back</a>
    {{Form::submit('Create Proposal', ['class' => 'btn btn-success'])}}
{!!Form::close()!!}
</div>
@endsection