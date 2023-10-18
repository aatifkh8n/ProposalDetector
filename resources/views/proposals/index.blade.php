<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposals | Home</title>
</head>
<body>
    <h1>List of Proposals</h1>

    @if (Session::has('success'))
        <div>
            {{Session::get('success')}}
            {{Session::put('success', null)}}
        </div>
    @endif

    <a href="{{URL::to('/proposals/create')}}">Create</a>

    <table border="1">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Student Name</th>
            <th>Session</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($proposals as $proposal)
                <tr>
                    <td>1</td>
                    <td>{{$proposal->title}}</td>
                    <td>{{$proposal->student_name}}</td>
                    <td>{{$proposal->session}}</td>
                    <td>
                        <a href="{{URL::to('/proposals/'.$proposal->id)}}" class="btn btn-sm btn-success">V</a>
                        {{-- <a href="#" class="btn btn-sm btn-danger">X</a> --}}
                        {!!Form::open(['action' => ['App\Http\Controllers\ProposalController@destroy', $proposal->id], 'method' => 'DELETE'])!!}
                            {{Form::submit('X')}}
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>