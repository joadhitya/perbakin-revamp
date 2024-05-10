@push('page-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
@endpush
<div class="modal fade text-left" id="modal-social-media" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Social Media</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-social-media" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" id="name" name="name"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    <label>Icon: </label>
                    <div class="form-group">
                        <select id="icon" name="icon" class="form-control form-control-sm bg-transparent">
                            <option value="">--Pilih Ikon Social Media--</option>
                            <option value="fab fa-instagram">Instagram</option>
                            <option value="fab fa-facebook">Facebook</option>
                            <option value="fab fa-twitter">Twitter</option>
                            <option value="fab fa-youtube">Youtube</option>
                            <option value="far fa-envelope">Email</option>
                            <option value="fa fa-phone">Phone</option>
                        </select>
                    </div>
                    <label>Link: </label>
                    <div class="form-group">
                        <input type="text" id="link" name="link"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo:</label>
                        <input type="file" id="logo" name="logo" class="form-control-file">
                    </div> 
                    <div class="form-group">
                        <label>Deskripsi: </label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-social-media" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-social-media" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
