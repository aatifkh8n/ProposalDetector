<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use Illuminate\Support\Facades\Session;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proposals = Proposal::Paginate(10);
        return view('proposals.index')->with('proposals', $proposals);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proposals.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proposal = new Proposal;

        $proposal->title = $request->title;
        $proposal->category = $request->category;
        $proposal->tools = $request->tools;
        $proposal->tech_stack = $request->tech_stack;
        $proposal->description = $request->description;
        $proposal->date = $request->date;
        $proposal->student_name = $request->student_name;
        $proposal->session = $request->session;
        $proposal->group_size = $request->group_size;

        $proposal->save();

        Session::put('success', 'New Proposal "' . $proposal->title . '" has been added successfully!');

        return redirect('/proposals');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proposal = Proposal::find($id);
        return view('proposals.show')->with('proposal', $proposal);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proposal = Proposal::find($id);
        return view('proposals.edit')->with('proposal', $proposal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proposal = Proposal::find($id);
        
        // $this->validate($request, ['title' => 'reqiured']);

        $proposal->title = $request->title;
        $proposal->category = $request->category;
        $proposal->tools = $request->tools;
        $proposal->tech_stack = $request->tech_stack;
        $proposal->description = $request->description;
        $proposal->date = $request->date;
        $proposal->student_name = $request->student_name;
        $proposal->session = $request->session;
        $proposal->group_size = $request->group_size;

        $proposal->update();

        Session::put('success', 'Proposal "' . $proposal->title . '" has been updated successfully!');

        return redirect('/proposals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proposal = Proposal::find($id);
        $title = $proposal->title;
        $proposal->delete();

        Session::put('success', 'Proposal "' . $title . '" has been deleted successfully!');

        return redirect('/proposals');
    }
}
