<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Service;
use App\Models\Zone;
use App\Models\ReserveZone;
use App\Models\ReserveService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {

        // Fetch the count of reserves grouped by their states
        $reserve_count_by_state = Reserve::select('state', DB::raw('count(*) as count'))->groupBy('state')->get();
 
        // Fetch reserves with pagination        
        $reserves = Reserve::/*with(['services', 'zones'])->*/paginate(10);
        $hasPreviousPage = $reserves->currentPage() > 1;
        $hasNextPage = $reserves->hasMorePages();
        return view('reserves.index', compact('reserves', 'hasPreviousPage', 'hasNextPage', 'reserve_count_by_state'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        
        $zones = Zone::with('services')->get();
        $services = Service::all();
        $states = Reserve::select('state')->distinct()->get(); // Fetch unique states

        return view('reserves.create', compact('zones', 'services', 'states'));
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $request->validate([

            'name'      => 'required',
            'surname'   => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'date'      => 'required',
            'zone'      => 'required',
            'services'  => 'required',
            'state'     => 'required',
        
        ]);
    
        $reserve_data = $request->all();
        $reserve_data['state'] = 'Requested'; // Set the state to 'Requested'
    
        $reserve = Reserve::create($reserve_data);
        return redirect()->route('reserves.show', $reserve->id);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id) {

        $reserve = Reserve::findOrFail($id);
        return view('reserves.show', compact('reserve'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $reserve = Reserve::with('Services')->findOrFail($id);
        $services = Service::all();
        $zones = Zone::all(); // Fetch all zones
        $states = Reserve::select('state')->distinct()->get(); // Fetch unique states

    
        return view('reserves.edit', compact('reserve', 'services', 'zones', 'states'));
    }
    
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {

        $request->validate([
            'name'      => 'required',
            'surname'   => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'date'      => 'required',
            'zone'      => 'required',
            'services'  => 'required|array',
            'state'     => 'required',
        ]);
    
        $reserve = Reserve::findOrFail($id);
        $updated_data = $request->all();
        
        // Fetch the service IDs based on the selected service names (types)
        $selectedServices = Service::whereIn('type', $request->input('services'))->pluck('id');
        
        if ($reserve->state == 'requested') {
            $updated_data['state'] = 'Scheduled';
        }
        
        $reserve->update($updated_data);
        
        // Sync the selected service IDs
        $reserve->services()->sync($selectedServices);
        
        return redirect()->route('reserves.show', $reserve->id);
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserve $reserve) {

        $reserve -> delete();
        return redirect() -> route('reserves.index');
    
    }

}
