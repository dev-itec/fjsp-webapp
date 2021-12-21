<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Commerce;
use Illuminate\Http\Request;

class CommercesController extends Controller
{
    function create(Request $request){

        $data = $request->json()->all();

        $item = Commerce::where('id', $data['id'])->first();
        if ($item != null)
            return response(['id' => $item->id, 'message' => 'Existing'], 200);

        $item = new Commerce();
        $item->name = $data['name'] ?? 'N/A';
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

        $item = Commerce::where('id', $id)->first();
        if ($item == null)
            return response(['id' => $id, 'message' => 'Not found'], 404);

        $item->name = $data['name'] ?? 'N/A';
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
