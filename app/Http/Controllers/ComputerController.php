<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    public function create()
    {
        return view('computers.create');
    }

    public function store(StoreComputerRequest $request)
    {
        Computer::create($request->validated());

        return redirect()->route('computers.index')
                        ->with('success','Computer created successfully.');
    }

    public function show(Computer $computer)
    {
        return view('computers.show',compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computers.edit',compact('computer'));
    }

    public function update(UpdateComputerRequest $request, Computer $computer)
    {
        $computer->update($request->validated());

        return redirect()->route('computers.index')
                        ->with('success','Computer updated successfully');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computers.index')
                        ->with('success','Computer deleted successfully');
    }
}
