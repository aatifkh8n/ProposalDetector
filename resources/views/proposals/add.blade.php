<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposals | Show</title>
</head>
<body>
    <h1>List of Proposals</h1>
    {!!Form::open(['action' => 'App\Http\Controllers\ProposalController@store', 'method' => 'POST'])!!}
    {{ csrf_field() }}
        <div>
            <label for="title">Title</label>
            <input name="title" id="title" type="text" value="">
        </div>
        <div>
            <label for="tools">Tools</label>
            <input name="tools" id="tools" type="text" value="">
        </div>
        <div>
            <label for="tech_stack">Tech Stack</label>
            <input name="tech_stack" id="tech_stack" type="text" value="">
        </div>
        <div>
            <label for="description">Description</label>
            <input name="description" id="description" type="textarea" value="">
        </div>
        <hr>
        <div>
            <label for="student_name">Student Name</label>
            <input name="student_name" id="student_name" type="text" value="">
        </div>
        <div>
            <label for="date">Date</label>
            <input name="date" id="date" type="date" value="">
        </div>
        <div>
            <label for="session">Session</label>
            <input name="session" id="session" type="text" value="">
        </div>
        <div>
            <label for="group_size">Group Size</label>
            <input name="group_size" id="group_size" type="number" value="">
        </div>
        {{Form::submit('Add')}}
    {!!Form::close()!!}
</body>
</html>