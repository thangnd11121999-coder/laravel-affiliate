<?php

namespace App\Http\Controllers;

use App\Models\Creator;

use Illuminate\Http\Request;
use HasFactory;
class CreatorController extends Controller
{
   public function index() {
        $creators = Creator::latest()->get(); 
        return view('creators.index',compact('creators'));
    }

    public function create() {
          return view('creators.create');
    }

    public function store(Request $request)
     {
         Creator::create([
            'full_name' => $request -> full_name,
            'display_name' => $request -> display_name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'platform' => $request -> platform,
            'follower_count' => $request -> follower_count,
            'status' => $request -> status,
            'notes' => $request -> notes,
         ]);
        return redirect() -> route('creators.index');
    }

    public function edit(Request $request, $id) {
       $creator = Creator::findOrFail($id);
       return view('creators.edit',compact('creator'));
    }

    public function update(Request $request, $id) {
        $creator = Creator::findOrFail($id);
        $creator -> update([
            'full_name' => $request -> full_name,
            'display_name' => $request -> display_name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'platform' => $request -> platform,
            'follower_count' => $request -> follower_count,
            'status' => $request -> status,
            'notes' => $request -> notes,
        ]);
        return redirect() -> route('creators.index');
    }

    public function destroy($id){
            $creator = Creator::findOrFail($id);
            $creator -> destroy($id);
            return redirect() -> route('creators.index');
    }

    public function show($id){
        $creator = Creator::findOrFail($id);
        return view('creators.view',compact('creator'));
    }
    }
