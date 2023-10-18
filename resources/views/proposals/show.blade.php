<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposals | Show</title>
</head>
<body>
    <h1>List of Proposals</h1>
    <table border="1">
        <tr>
            <td>Title</td>
            <td>{{$proposal->title}}</td>
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
        <tr>
            <td colspan="2">
                {{-- {!!Form::open(['action' => URL::to('/proposals/'.$proposal->id)])!!}
                    {{ csrf_field() }}
                    <a href="{{URL::to('/proposals/'.$proposal->id)}}" class="btn btn-sm btn-info">E</a>
                    {{Form::hidden('_method', 'PUT')}}
                {!!Form::close()!!} --}}
                {{-- <form action="{{URL::to('/proposals/'.$proposal->id)}}">
                    @method('PUT')
                    <button type="submit">E</button>
                </form> --}}
                <a href="{{URL::to('/proposals/'.$proposal->id.'/edit')}}" class="btn btn-sm btn-info">E</a>
                {!!Form::open(['action' => ['App\Http\Controllers\ProposalController@destroy', $proposal->id], 'method' => 'DELETE'])!!}
                    {{Form::submit('X')}}
                {!!Form::close()!!}
            </td>
        </tr>
    </table>
</body>
</html>