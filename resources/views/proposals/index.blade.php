@extends('templates.main')

@section('title')
    Proposals
@endsection

@section('subtitle')
    Home
@endsection

@section('heading')
    All Proposals
@endsection
    
@section('content')
<div class="row px-3">
    <input class="form-control col" type="text" name="" id="" placeholder="Search a proposal here...">
    <button class="btn btn-primary ml-1">Search Proposal</button>
</div>

<hr>

<a class="btn btn-success float-right" href="{{URL::to('/proposals/create')}}">Create Proposal</a>
<div class="container">
    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Student Name</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            <?php $count = 0 ?>
            @foreach ($proposals as $proposal)
                <tr> 
                    <td scope="row">{{++$count}}</td>
                    <td>{{$proposal->title}}</td>
                    <td>{{$proposal->category}}</td>
                    <td>{{$proposal->student_name}}</td>
                    <td class="row">
                        <a href="{{URL::to('/proposals/'.$proposal->id)}}" class="btn btn-sm btn-warning">View</a>
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