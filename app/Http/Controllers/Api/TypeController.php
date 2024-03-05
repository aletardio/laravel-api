<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::paginate(6);

        return response()->json([
            'status' => true,
            'results' => $types
        ]);
    }
}
