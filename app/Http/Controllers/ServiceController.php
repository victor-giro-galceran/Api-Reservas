<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {

        $services = Service::paginate(10);
        $hasPreviousPage = $services->currentPage() > 1;
        $hasNextPage = $services->hasMorePages();
        return view('services.index', compact('services', 'hasPreviousPage', 'hasNextPage'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {

        $types = Service::distinct()->pluck('type')->all();
        return view('services.create', compact('types'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $request -> validate([

            'type'          => 'required',
            'description'   => 'required',
            'capacity'      => 'required|integer',
            'price'         => 'required',

        ]);

        $service = Service::create($request -> all());
        return redirect() -> route('services.show', $service -> id);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {

        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {

        $request -> validate([

            'type'          => 'required',
            'description'   => 'required',
            'capacity'      => 'required|integer',
            'price'         => 'required',
        
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect() -> route('services.show', $service->id);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service) {
        
        $service -> delete();
        return redirect() -> route('services.index');
    
    }

}
