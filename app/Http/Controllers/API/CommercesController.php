<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Commerce;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CommercesController extends Controller
{
    function create(Request $request){

        $data = $request->json()->all();
        $user_id = Auth::user()->id;

        $item = new Commerce();
        $item->name = $data['name'] ?? 'N/A';
        $item->rut = $data['rut'] ?? null;
        $item->address = $data['address'] ?? 'N/A';
        $item->description = $data['description'] ?? 'N/A';
        $item->fb_page = $data['fb_page'] ?? null;
        $item->tw_profile = $data['tw_profile'] ?? null;
        $item->ig_profile = $data['ig_profile'] ?? null;
        $item->ws_number = $data['ws_number'] ?? null;
        $item->web_page = $data['web_page'] ?? null;
        $item->logo = $data['logo'] ?? 'logo_commerce.png';
        $item->email = $data['email'] ?? 'no indica correo';
        $item->secret = Hash::make($data['secret']);
        $item->is_active = 1;
        $item->created_by = $user_id;
        $item->created_at = Carbon::now();
        $item->city = $data['city'] ?? null;
        $item->tel = $data['tel'] ?? 'no indica telefono';
        $item->save();

        return response(['id' => $item->id, 'message' => 'Created'], 201);

    }
    function read(Request $request){
        $models = Commerce::all();
        return response()->json($models);
    }
    function update($id, Request $request)
    {
        $data = $request->json()->all();
        $user_id = Auth::user()->id;

        $item = Commerce::where('id', $id)->first();
        if ($item == null)
            return response(['id' => $id, 'message' => 'Not found'], 404);

        $item->name = $data['name'] ?? 'N/A';
        $item->rut = $data['rut'] ?? null;
        $item->address = $data['address'] ?? 'N/A';
        $item->description = $data['description'] ?? 'N/A';
        $item->fb_page = $data['fb_page'] ?? null;
        $item->tw_profile = $data['tw_profile'] ?? null;
        $item->ig_profile = $data['ig_profile'] ?? null;
        $item->ws_number = $data['ws_number'] ?? null;
        $item->web_page = $data['web_page'] ?? null;
        $item->logo = $data['logo'] ?? 'logo_commerce.png';
        $item->email = $data['email'] ?? 'no indica correo';
        $item->secret = Hash::make($data['secret']);
        $item->is_active = 1;
        $item->updated_at = Carbon::now();
        $item->city = $data['city'] ?? null;
        $item->tel = $data['tel'] ?? 'no indica telefono';
        $item->save();

        return response(['id' => $item->id, 'message' => 'Updated'], 200);
    }
    function delete($id, Request $request){

        $data = $request->json()->all();

        $item = Commerce::where('id', $data['id'])->first();
        if ($item == null)
            return response(['id' => $item->id, 'message' => 'Not found'], 404);

        $item->delete();

        return response(['id' => $item->id, 'message' => 'Deleted'], 200);
    }
}
