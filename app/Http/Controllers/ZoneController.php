<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller {
    
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $zones = Zone::paginate(10);
        $hasPreviousPage = $zones->currentPage() > 1;
        $hasNextPage = $zones->hasMorePages();
        return view('zones.index', compact('zones', 'hasPreviousPage', 'hasNextPage'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {

        return view('zones.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $request -> validate([
            
            'code'       => 'required',
            'name'       => 'required',
            'description'=> 'required',
            'area'       => 'required',
            'height'     => 'required',
            'cocktail'   => 'required',
            'theater'    => 'required',
            'school'     => 'required',
            'feast'      => 'required',
            'cabaret'    => 'required',

        ]);

        $zone = Zone::create($request->all());
        return redirect() -> route('zones.show', $zone->id);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {

        $zone = Zone::findOrFail($id);
        return view('zones.show', compact('zone'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

        $zone = Zone::findOrFail($id);
        return view('zones.edit', compact('zone'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {

        $request -> validate([
            
            'code'       => 'required',
            'name'       => 'required',
            'description'=> 'required',
            'area'       => 'integer',
            'height'     => 'integer',
            'cocktail'   => 'integer',
            'theater'    => 'integer',
            'school'     => 'integer',
            'feast'      => 'integer',
            'cabaret'    => 'integer',
        
        ]);

        $zone = Zone::findOrFail($id);
        $zone->update($request->all());

        return redirect()->route('zones.show', $zone->id);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zone $zone) {

        $zone -> delete();
        return redirect() -> route('zones.index');
    
    }

}
