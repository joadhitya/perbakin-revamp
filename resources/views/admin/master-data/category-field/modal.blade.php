<div class="modal fade text-left" id="modal-category-field" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Kategori Bidang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-category-field" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" id="name" name="name"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    <label>Kode: </label>
                    <div class="form-group">
                        <input type="text" id="code" name="code"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    <div class="form-group">
                        <label for="logo">Icon:</label>
                        <input type="file" id="logo" name="logo" class="form-control-file">
                    </div>
                    <label>Deskripsi: </label>
                    <div class="form-group">
                        <input type="text" id="description" name="description"
                            class="form-control form-control-sm bg-transparent">
                        <p class="text-danger" id="feedback-category-field_name"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-category-field" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-category-field" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
