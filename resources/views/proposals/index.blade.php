@extends('templates.main')

@section('title')
    Proposals
@endsection

@section('subtitle')
    Home
@endsection
    
@section('content')
<div class="mb-5">
    <div class="p-3">
        <form class="row">
            <input class="form-control col" type="search" name="search" id="" placeholder="Search a proposal by Title, Category, Teach stack or Session" autofocus>
            <input type="submit" class="btn btn-outline-light ml-1" value="Search Proposal"/>
        </form>
    </div>

    <a class="btn btn-success float-right mb-4" href="{{URL::to('/proposals/create')}}">Create New Proposal</a>
    <div class="container">
        {{$proposals->links()}}
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
        {{$proposals->links()}}
    </div>
</div>
@endsection