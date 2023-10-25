<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function click($id): \Illuminate\Http\JsonResponse
    {
        return response()->json(['message' => 'Поповнити мийку' . $id]);
    }

}
