<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MasterData\WeaponModel;
use App\Services\MasterData\WeaponModelService;
use Illuminate\Http\Request;

class WeaponModelController extends Controller
{
    protected $weaponModelService;

    public function __construct(WeaponModelService $weaponModelService)
    {
        $this->weaponModelService = $weaponModelService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $id = GeneralHelper::generateNanoId();
        return view('admin.master-data.weapon-model.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->weaponModelService->getDataTable();
        return view('admin.master-data.weapon-model.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $WeaponModelRequest = new WeaponModel();
        $WeaponModelRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponModelService->createData($WeaponModelRequest);
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
        $data = $this->weaponModelService->getData((int) $id);
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
        $WeaponModelRequest = new WeaponModel();
        $WeaponModelRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponModelService->updateData($WeaponModelRequest, (int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' =>  $data['error'] == true ? $data['errorMessage'] : 'Berhasil mengubah data  ' . $WeaponModelRequest->name,
            'status' =>  $data['error'] == true ? 500 : 200,
        ], $data['error'] == true ? 500 : 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->weaponModelService->deleteData((int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' => $data['error'] == true ? $data['errorMessage'] : 'Berhasil menghapus data model senjata',
            'status' => $data['error'] == true ? 500 : 200
        ], $data['error'] == true ? 500 : 200);
    }
}
