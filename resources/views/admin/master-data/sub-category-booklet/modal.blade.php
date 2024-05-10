<div class="modal fade text-left" id="modal-sub-category-booklet" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Sub Kategori Booklet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-sub-category-booklet" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <label>Kategori: </label>
                    <div class="form-group">
                        <select name="id_category" id="id_category" class="form-control form-control-sm bg-transparent">
                            <option value="">--Silahkan Pilih Kategori--</option>
                            @foreach ($category_booklets as $cf)
                                <option value="{{ $cf->id }}">{{ $cf->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" id="name" name="name"
                            class="form-control form-control-sm bg-transparent" value="">
                    </div>
                    <label>Apakah menjadi booklet? </label>
                    <div class="form-group">
                        <select name="is_booklet" id="is_booklet" onchange="selectIsBooklet()"
                            class="form-control form-control-sm bg-transparent">
                            <option value="no">Tidak</option>
                            <option value="yes">Ya</option>
                        </select>
                    </div>
                    <div id="section-booklet" style="display: none">
                        <label>Link: </label>
                        <div class="form-group">
                            <input type="text" id="link" name="link"
                                class="form-control form-control-sm bg-transparent" value="">
                        </div>
                        <label>Tulisan Link: </label>
                        <div class="form-group">
                            <input type="text" id="link_text" name="link_text"
                                class="form-control form-control-sm bg-transparent" value="klik">
                        </div>
                    </div>
                    <label>Deskripsi: </label>
                    <div class="form-group">
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-sub-category-booklet" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-sub-category-booklet" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('page-scripts')
    <script>
        function selectIsBooklet() {
            var selectedValue = $("#is_booklet").val();
            if (selectedValue == "no") {
                $("#section-booklet").hide();
            } else if (selectedValue === "yes") {
                $("#section-booklet").show();
            }
        }
    </script>
@endpush
