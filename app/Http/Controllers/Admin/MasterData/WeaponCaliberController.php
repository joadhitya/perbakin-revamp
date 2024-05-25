<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MasterData\WeaponCaliber;
use App\Services\MasterData\WeaponCaliberService;
use Illuminate\Http\Request;

class WeaponCaliberController extends Controller
{
    protected $weaponCaliberService;

    public function __construct(WeaponCaliberService $weaponCaliberService)
    {
        $this->weaponCaliberService = $weaponCaliberService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $id = GeneralHelper::generateNanoId();
        return view('admin.master-data.weapon-caliber.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->weaponCaliberService->getDataTable();
        return view('admin.master-data.weapon-caliber.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $WeaponCaliberRequest = new WeaponCaliber();
        $WeaponCaliberRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponCaliberService->createData($WeaponCaliberRequest);
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
        $data = $this->weaponCaliberService->getData((int) $id);
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
        $WeaponCaliberRequest = new WeaponCaliber();
        $WeaponCaliberRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->weaponCaliberService->updateData($WeaponCaliberRequest, (int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' =>  $data['error'] == true ? $data['errorMessage'] : 'Berhasil mengubah data  ' . $WeaponCaliberRequest->name,
            'status' =>  $data['error'] == true ? 500 : 200,
        ], $data['error'] == true ? 500 : 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->weaponCaliberService->deleteData((int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' => $data['error'] == true ? $data['errorMessage'] : 'Berhasil menghapus data kaliber senjata',
            'status' => $data['error'] == true ? 500 : 200
        ], $data['error'] == true ? 500 : 200);
    }
}
