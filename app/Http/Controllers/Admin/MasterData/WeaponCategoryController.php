<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MasterData\WeaponCategory;
use App\Services\MasterData\WeaponCategoryService;
use Illuminate\Http\Request;

class WeaponCategoryController extends Controller
{
    protected $weaponCategoryService;

    public function __construct(WeaponCategoryService $weaponCategoryService)
    {
        $this->weaponCategoryService = $weaponCategoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $id = GeneralHelper::generateNanoId();
        return view('admin.master-data.weapon-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->weaponCategoryService->getDataTable();
        return view('admin.master-data.weapon-category.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $WeaponCategoryRequest = new WeaponCategory();
        $WeaponCategoryRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponCategoryService->createData($WeaponCategoryRequest);
        return response()->json([
            'data' => $data,
            'message' => 'Berhasil menambahkan data ' . $data->name,
            'status' => $data ? 200 : 400,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->weaponCategoryService->getData((int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' =>  $data['error'] == true ? $data['errorMessage'] : 'success',
            'status' =>  $data['error'] == true ? 500 : 200,
        ], $data['error'] == true ? 500 : 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $WeaponCategoryRequest = new WeaponCategory();
        $WeaponCategoryRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponCategoryService->updateData($WeaponCategoryRequest, (int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' =>  $data['error'] == true ? $data['errorMessage'] : 'Berhasil mengubah data  ' . $WeaponCategoryRequest->name,
            'status' =>  $data['error'] == true ? 500 : 200,
        ], $data['error'] == true ? 500 : 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->weaponCategoryService->deleteData((int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' => $data['error'] == true ? $data['errorMessage'] : 'Berhasil menghapus data kategori senjata',
            'status' => $data['error'] == true ? 500 : 200
        ], $data['error'] == true ? 500 : 200);
    }
}
