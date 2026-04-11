<?php

namespace App\Http\Controllers;

use App\Models\Creator;

use Illuminate\Http\Request;
use HasFactory;
class CreatorController extends Controller
{
   public function index(Request $request) {
        $keyword = $request->keyword;
        $query = Creator::with('campaigns'); //SELECT * FROM campaigns WHERE creator_id IN (1, 2, 3);
        if ($keyword) {
        $query->where('full_name', 'like', '%' . $keyword . '%')
              ->orWhere('display_name', 'like', '%' . $keyword . '%')
              ->orWhere('email', 'like', '%' . $keyword . '%');
        }
        $creators = $query->latest()->paginate(5)->withQueryString(); 
        return view('creators.index',compact('creators','keyword'));
        }

    public function create() {
          return view('creators.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'full_name' => 'required|string|max:255',
        'display_name' => 'nullable|string|max:255',
        'email' => 'nullable|email|unique:creators,email',
        'phone' => 'required|string|max:20',
        'platform' => 'nullable|string|max:50',
        'follower_count' => 'required|integer|min:0',
        'status' => 'required|in:active,inactive,pending',
        'notes' => 'nullable|string|max:500',
    ]);

    Creator::create([
        'full_name' => $request->full_name,
        'display_name' => $request->display_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'platform' => $request->platform,
        'follower_count' => $request->follower_count,
        'status' => $request->status,
        'notes' => $request->notes,
    ]);

    return redirect()->route('creators.index');
}
    public function edit(Request $request, $id) {
       $creator = Creator::findOrFail($id);
       return view('creators.edit',compact('creator'));
    }

    public function update(Request $request, $id) {
        $request ->validate([
              'full_name' => 'required|string|max:255',
              'display_name' => 'nullable|string|max:255',
              'email' => 'nullable|email|unique:creators,email,' . $id,  
              'phone' => 'required|string|max:20',
              'platform' => 'nullable',
              'follower_count' => 'required|integer|min:0',
              'status' => 'required|in:Active,Inactive,Pending',
              'notes' => 'nullable|string|max:500',
        ]);

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
            $creator->delete();
            return redirect() -> route('creators.index');
    }

    public function show($id){
        $creator = Creator::findOrFail($id);
        return view('creators.view',compact('creator'));
    }
    }
