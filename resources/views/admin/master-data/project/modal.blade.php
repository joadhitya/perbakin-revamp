<div class="modal fade text-left" id="modal-project" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Project</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-project" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Kode Proyek</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="project_code"
                                name="project_code" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Person In Charge</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="project_pic"
                                name="project_pic">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Proyek Status</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="project_status"
                                name="project_status" value="DRAFT">
                        </div>
                        <div class="form-group col-md-8">
                            <label>Nama Proyek</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="project_name"
                                name="project_name">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Proyek Kontak</label>
                            <input type="text" class="form-control form-control-sm bg-transparent" id="project_contact"
                                name="project_contact">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Projek Mulai</label>
                            <input type="date" class="form-control form-control-sm bg-transparent" id="project_date_start"
                                name="project_date_start">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Projek Selesai</label>
                            <input type="date" class="form-control form-control-sm bg-transparent" id="project_date_end"
                                name="project_date_end">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Deskripsi</label>
                            <textarea name="project_description" id="project_description" cols="30" rows="3"
                                class="form-control form-control-sm bg-transparent"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-project" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-project" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
