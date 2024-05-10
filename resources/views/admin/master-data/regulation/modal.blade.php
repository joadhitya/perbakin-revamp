<div class="modal fade text-left" id="modal-regulation" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Regulasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-regulation" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label>Judul: </label>
                        <input type="text" id="title" name="title"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    {{-- <div class="form-group">
                        <label>Link Judul: </label>
                        <input type="text" id="title_link" name="title_link"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div> --}}
                    <div class="form-group">
                        <label>Subtitle: </label>
                        <input type="text" id="sub_title" name="sub_title"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    {{-- <div class="form-group">
                        <label>Link Subtitle: </label>
                        <input type="text" id="sub_title_link" name="sub_title_link"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div> --}}
                    <div class="form-group">
                        <label>Link: </label>
                        
                        <textarea class="form-control form-control-sm bg-transparent" id="link" name="link" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Link Text: </label>
                        
                        <input type="text" id="link_text" name="link_text"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-regulation" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-regulation" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
