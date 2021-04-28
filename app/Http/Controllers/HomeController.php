<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\User;
use App\Level;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(){

        $places = Place::select('places.*', 'levels.name as level_name')
                        ->leftJoin('levels', 'levels.id', 'places.level_id')
                        ->with('staff')
                        ->get();

        $groupedPlaces = $places->groupBy('level_name');
        
        $persons = User::select('users.*', 'levels.name as level_name')
                        ->leftJoin('places', 'places.id', 'users.place_id')
                        ->leftJoin('levels', 'levels.id', 'places.level_id')
                        ->get();

        $groupedPersons = $persons->groupBy('level_name');  

        $levels = Level::all();
        return view('home', compact('groupedPlaces', 'groupedPersons', 'levels'));
    }

    public function placeDetails()
    {
        return view('place-details');
    }

    public function getAutocompleteData(Request $request){

        $response = array();
        if($request->has('search')){
            $search = $request->search;
            
            $places = Place::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();

            foreach($places as $place){
                $response[] = array("value"=>$place->id,"label"=>$place->name, 'type' => 'place');
            }

            $users = User::select('places.id','users.name')->where('users.name', 'like', '%' .$search . '%')
                            ->leftJoin('places', 'places.id', 'users.place_id')
                            ->limit(5)
                            ->orderby('users.name','asc')
                            ->get();

            foreach($users as $user){
                $response[] = array("value"=>$user->id,"label"=>$user->name, 'type' => 'staff');
            }

        }

      return response()->json($response);
    }
}