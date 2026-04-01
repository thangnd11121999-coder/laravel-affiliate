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
}
