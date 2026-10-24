<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialists = Specialist::latest()
            ->paginate(10);
        return view('admin.master-data.specialist.index', compact('specialists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master-data.specialist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Specialist::create($validatedData);
        return redirect()
            ->route('admin.specialist.index')
            ->with('succes', 'Specialist created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Specialist $specialist)
    {
        return view('admin.master-data.specialist.view', compact('specialist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialist $specialist)
    {
        return view('admin.master-data.specialist.update', compact('specialist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialist $specialist)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:specialists,name,' . $specialist->id, //ini biar pas di edit namenya itu ga duplicate. misal kita mau ubah jadi a, padahal a udh ada
        ]);

        $specialist->update($validatedData);
        return redirect()
            ->route('admin.specialist.index')
            ->with('succes', 'Specialist created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();

        return redirect()
            ->route('admin.specialist.index')
            ->with('success', 'Specialist deleted successfully');
    }
}
