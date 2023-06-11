<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ApiReserveController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {

        $email = $request->input('email'); // Retrieve the email parameter from the request

        if ($email) {
            // If email is provided, search for reserves with the given email
            $reserves = Reserve::where('email', $email)->get();
        } else {
            // If email is not provided, return all reserves
            $reserves = Reserve::all();
        }

        return response()->json($reserves);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        if ($request->user()->tokenCan('create')) {

            $new_reserve = Reserve::create($request->all());
            return response()->json($new_reserve);
            
        } else {

            return response()->json('The token does not have permissions');

        }

    }

    /**
     * Display the specified resource.
     */
    public function show($email) {

        // Find reserves with the given email
        $reserves = Reserve::where('email', $email)->get();

        return response()->json($reserves);
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {

        $reserve = Reserve::find($id);

        if (!$reserve) {
            return response()->json('Reserve not found', 404);
        }

        if ($request->user()->tokenCan('update')) {
            $reserve->update($request->all());
            return response()->json($reserve);
        } else {
            return response()->json('The token does not have permissions', 403);
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserve $reserve) {

        $reserve->delete();
        return response()->json('Reserve deleted successfully');
    
    }

}
