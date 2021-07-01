<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function index(Request $request)
    { 
        
        return Address::where('_code','Like',$request->code."__")
            ->orderBy('_name_en')
            ->pluck('_name_en','_code');    
    }
}
