<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Terapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TerapistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terapists = Terapist::latest()
            ->paginate(10);
        return view('admin.master-data.terapist.index', compact('terapists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialists = Specialist::all();
        return view('admin.master-data.terapist.create', compact('specialists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255',
            'specialist_id' => 'required|exists:specialists,id',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData['image'] = $request->file('image')
            ->store('categories', 'public');

        Terapist::create($validatedData);

        return redirect()
            ->route('admin.terapist.index')
            ->with('success', 'Terapist created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Terapist $terapist)
    {
        return view('admin.master-data.terapist.view', compact('terapist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terapist $terapist)
    {
        $specialists = Specialist::all();
        return view('admin.master-data.terapist.update',compact('terapist', 'specialists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terapist $terapist)
    {
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255',
            'specialist_id' => 'required|exists:specialists,id',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($terapist->image) {
                Storage::disk('public')->delete($terapist->image);
            }

            $validatedData['image'] = $request->file('image')
                ->store('terapists', 'public');
        }

        $terapist->update($validatedData);

        return redirect()
            ->route('admin.terapist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terapist $terapist)
    {
        if ($terapist->image) {
            Storage::disk('public')->delete($terapist->image);
        }

        $terapist->delete();

        return redirect()
            ->route('admin.master-data.terapist.index')
            ->with('success', 'Terapist deleted successfully.');
    }
}
