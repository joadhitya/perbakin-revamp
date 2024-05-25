<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MasterData\WeaponBrand;
use App\Services\MasterData\WeaponBrandService;
use Illuminate\Http\Request;

class WeaponBrandController extends Controller
{
    protected $weaponBrandService;

    public function __construct(WeaponBrandService $weaponBrandService)
    {
        $this->weaponBrandService = $weaponBrandService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $id = GeneralHelper::generateNanoId();
        return view('admin.master-data.weapon-brand.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->weaponBrandService->getDataTable();
        return view('admin.master-data.weapon-brand.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $WeaponBrandRequest = new WeaponBrand();
        $WeaponBrandRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponBrandService->createData($WeaponBrandRequest);
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
        $data = $this->weaponBrandService->getData((int) $id);
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
        $WeaponBrandRequest = new WeaponBrand();
        $WeaponBrandRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponBrandService->updateData($WeaponBrandRequest, (int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' =>  $data['error'] == true ? $data['errorMessage'] : 'Berhasil mengubah data  ' . $WeaponBrandRequest->name,
            'status' =>  $data['error'] == true ? 500 : 200,
        ], $data['error'] == true ? 500 : 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->weaponBrandService->deleteData((int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' => $data['error'] == true ? $data['errorMessage'] : 'Berhasil menghapus data merk senjata',
            'status' => $data['error'] == true ? 500 : 200
        ], $data['error'] == true ? 500 : 200);
    }
}
