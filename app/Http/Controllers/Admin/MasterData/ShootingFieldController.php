<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Helpers\GeneralHelper;
use App\Http\Controllers\Controller;
use App\Models\MasterData\ShootingField;
use App\Services\MasterData\ShootingFieldService;
use Illuminate\Http\Request;

class ShootingFieldController extends Controller
{

    protected $shootingFieldService;

    public function __construct(ShootingFieldService $shootingFieldService)
    {
        $this->shootingFieldService = $shootingFieldService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $id = GeneralHelper::generateNanoId();
        return view('admin.master-data.shooting-field.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->shootingFieldService->getDataTable();
        return view('admin.master-data.shooting-field.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shootingFieldRequest = new ShootingField();
        $shootingFieldRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->shootingFieldService->createData($shootingFieldRequest);
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
        $data = $this->shootingFieldService->getData((int) $id);
        return response()->json([
            'data' => $data,
            'status' => $data ? 200 : 400,
        ]);
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
        $shootingFieldRequest = new ShootingField();
        $shootingFieldRequest->fill([
            'name' => $request->name
        ]);

        $data = $this->shootingFieldService->updateData($shootingFieldRequest, (int) $id);
        return response()->json([
            'data' => $data,
            'message' => 'Berhasil mengubah data  ' . $data->name,
            'status' => $data ? 200 : 400,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->shootingFieldService->deleteData((int) $id);
        return response()->json([
            'data' => $data['data'],
            'message' => $data['error'] == true ? $data['errorMessage'] : 'Berhasil menghapus data bidang tembak',
            'status' => $data['error'] == true ? 500 : 200
        ], $data['error'] == true ? 500 : 200);
    }
}
