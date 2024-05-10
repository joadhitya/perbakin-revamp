<div class="modal fade text-left" id="modal-md-assessor" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Assessor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-md-assessor" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <label>Kategori: </label>
                    <div class="form-group">
                        <select name="id_category" id="id_category" class="form-control form-control-sm bg-transparent">
                            <option value="">--Silahkan Pilih Kategori--</option>
                            @foreach ($category_assessors as $ca)
                                <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="section-sub-category">
                        <label>Sub Kategori: </label>
                        <div class="form-group">
                            <select name="id_sub_category" id="id_sub_category"
                                class="form-control form-control-sm bg-transparent">
                                <option value="">--Silahkan Pilih Sub Kategori--</option>
                            </select>
                        </div>
                    </div>
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" id="name" name="name"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    <label>Deskripsi: </label>
                    <div class="form-group">
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-md-assessor" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-md-assessor" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
