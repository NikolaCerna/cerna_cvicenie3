<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryApiController extends Controller
{
    // GET /api/categories
    public function index()
    {
        return DB::table('categories')->get();
    }

    // GET /api/categories/{id}
    public function show($id)
    {
        return DB::table('categories')
            ->where('id', $id)
            ->first();
    }

    // POST /api/categories
    public function store(Request $request)
    {
        $id = DB::table('categories')->insertGetId([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'Category created',
            'id' => $id
        ]);
    }

    // PUT /api/categories/{id}
    public function update(Request $request, $id)
    {
        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'updated_at' => now(),
            ]);

        return response()->json([
            'message' => 'Category updated'
        ]);
    }

    // DELETE /api/categories/{id}
    public function destroy($id)
    {
        //DB::table('categories')
            //->where('id', $id)
            //->delete();

        return response()->json([
            'message' => 'Category deleted'
        ]);
    }
}
