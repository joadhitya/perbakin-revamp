<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Helpers\GeneralHelper;
use App\Http\Controllers\Controller;
use App\Services\MasterData\ShootingFieldService;
use Illuminate\Http\Request;

class ShootingFieldController extends Controller
{

    protected $shootingFieldService;

    public function __construct(ShootingFieldService $shootingFieldService){
        $this->shootingFieldService = $shootingFieldService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = GeneralHelper::generateNanoId();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
