<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Helpers\GeneralHelper;
use App\Http\Controllers\Controller;
use App\Models\MasterData\ItemCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.master-data.item-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = ItemCategory::get();
        return view('admin.master-data.item-category.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'created_by' => GeneralHelper::getAuthInfo(),
            'updated_by' => json_encode([]),
        ]);
        $data = ItemCategory::create($request->all());
        return response()->json([
            'data' => $data,
            'message' => 'Berhasil menambahkan data Kategori Barang',
            'success' => $data ? 200 : 400,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ItemCategory::findOrFail($id);
        return response()->json([
            'data' => $data,
            'status' => 200,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ItemCategory::findOrFail($id);
        return response()->json([
            'data' => $data,
            'status' => 200,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ItemCategory::findOrFail($id);
        $data->update(array_merge($request->all(), ['updated_by' => GeneralHelper::getAuthInfo()]));
        return response()->json([
            'data' => $data,
            'message' => 'Berhasil mengubah data ' . $data->name,
            'status' => 200,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ItemCategory::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Berhasil menghapus data Kategori Barang',
            'status' => 200,
        ]);
    }
}
