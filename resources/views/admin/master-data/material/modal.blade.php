<div class="modal fade text-left" id="modal-material" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Material</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-material" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Kode Material</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="material_code"
                                name="material_code">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Kategori Material</label>
                            <select
                                onchange="chooseSelectedData('category-material','id_category_material','id_sub_category_material')"
                                name="id_category_material" id="id_category_material"
                                class="form-control form-control-sm bg-transparent">
                                <option value="">--Silahkan Pilih Kategori--</option>
                                @foreach ($category_material as $cm)
                                    <option value="{{ $cm->id }}">{{ $cm->category_material_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sub Kategori Material</label>
                            <select name="id_sub_category_material" id="id_sub_category_material"
                                class="form-control form-control-sm bg-transparent">
                                <option value="">--Silahkan Pilih Sub Kategori--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Nama Material</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="material_name"
                                name="material_name">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Satuan Unit</label>
                            <select name="id_unit" id="id_unit" class="form-control form-control-sm bg-transparent">
                                <option value="">--Silahkan Pilih Unit--</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->unit_material_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Material Status</label>
                            <input id="material_status" name="material_status" type="text"
                                class="form-control form-control-sm bg-transparent" value="ACTIVE">
                        </div>

                        <div class="form-group col-md-3">
                            <label>Qty Min Stock</label>
                            <input id="material_qty_min" name="material_qty_min" type="text"
                                class="form-control form-control-sm bg-transparent" value="0">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Harga Material</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-transparent"
                                    id="material_price" name="material_price">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Spesifikasi Material</label>
                            <input type="text" class="form-control form-control-sm bg-transparent"
                                id="material_specification" name="material_specification">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-material" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-material" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
