<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Martyr;

class MartyrController extends Controller
{
    public function searchByName(Request $request)
    {
        $name = $request->input('name');

        $martyrs = Martyr::where('full_name', 'LIKE', '%' . $name . '%')->get();

        return response()->json($martyrs);
    }
    public function getByID($id)
    {
        try {
            $martyr = Martyr::with('graveLocation')->findOrFail($id);

            return response()->json($martyr);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Martyr not found'
            ], 404);
        }
    }
}
