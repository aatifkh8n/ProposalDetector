<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposals | Show</title>
</head>
<body>
    <h1>List of Proposals</h1>
    {!!Form::open(['action' => ['App\Http\Controllers\ProposalController@update', $proposal->id], 'method' => 'PUT'])!!}
    {{-- <form action="{{URL::to('/proposals/'.$proposal->id)}}">
        @method('PUT') --}}
        {{ csrf_field() }}
        <div>
            <label for="title">Title</label>
            <input name="title" id="title" type="text" value="{{$proposal->title}}">
        </div>
        <div>
            <label for="tools">Tools</label>
            <input name="tools" id="tools" type="text" value="{{$proposal->tools}}">
        </div>
        <div>
            <label for="tech_stack">Tech Stack</label>
            <input name="tech_stack" id="tech_stack" type="text" value="{{$proposal->tech_stack}}">
        </div>
        <div>
            <label for="description">Description</label>
            <input name="description" id="description" type="textarea" value="{{$proposal->description}}">
        </div>
        <hr>
        <div>
            <label for="student_name">Student Name</label>
            <input name="student_name" id="student_name" type="text" value="{{$proposal->student_name}}">
        </div>
        <div>
            <label for="date">Date</label>
            <input name="date" id="date" type="date" value="{{$proposal->date}}">
        </div>
        <div>
            <label for="session">Session</label>
            <input name="session" id="session" type="text" value="{{$proposal->session}}">
        </div>
        <div>
            <label for="group_size">Group Size</label>
            <input name="group_size" id="group_size" type="number" value="{{$proposal->group_size}}">
        </div>
        {{Form::submit('Update')}}
        {{-- <button type="submit">Update</button> --}}
    {{-- </form> --}}
    {!!Form::close()!!}
</body>
</html>