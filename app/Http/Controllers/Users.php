<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class Users extends Controller
{
    public function data($p = null)
    {
        $data=User::all();

        $result = new \stdClass();
        $result->iTotalRecords = 0;
        $result->iTotalDisplayRecords = 0;
        $result->aaData = $data;

        return response()->json($result);
    }

}
