    {{-- <form action="javascript:void(0)" id="form-mb-member" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="">
        <div class="row">
            <div class="col-md-6">
                <label>Title: </label>
                <div class="form-group">
                    <input type="text" id="title" name="title"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-6">
                <label>Headline: </label>
                <div class="form-group">
                    <input type="text" id="headline" name="headline"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Kategori Artikel: </label>
                <div class="form-group">
                    <select name="id_category[]" multiple id="id_category"
                        class="form-control form-control-sm bg-transparent select2-multi">
                        <option value="">--Silahkan Pilih Kategori--</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label>Keyword: </label>
                <div class="form-group">
                    <input type="text" id="keyword" name="keyword"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Slug: </label>
                <div class="form-group">
                    <input type="text" id="slug" name="slug"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="logo">Gambar:</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Tanggal:</label>
                    <input type="date" id="date_archieve" name="date_archieve"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Meta Title: </label>
                <div class="form-group">
                    <input type="text" id="meta_title" name="meta_title"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-6">
                <label>Meta Keywords: </label>
                <div class="form-group">
                    <input type="text" id="meta_keyword" name="meta_keyword"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Deskripsi Singkat: </label>
                <div class="form-group">
                    <textarea class="form-control" id="short_description" name="short_description" rows="4"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <label>Deskripsi Meta: </label>
                <div class="form-group">
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="4"></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <label>Konten Artikel:</label>
                <textarea class="form-control" id="content" name="content" rows="4"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" id="add-mb-member" class="btn btn-sm btn-block btn-success text-white mr-1"
                    onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
            </div>
        </div>
    </form> --}} <div class="card my-4">
        <div class="card-header">
            <strong>Validation</strong>
        </div>
        <div class="card-body">
            <form id="example-form" action="#">
                <div>
                    <h3>Account</h3>
                    <section>
                        <div class="form-group">
                            <label for="userName">User name *</label>
                            <input id="userName" name="userName" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="password">Password *</label>
                            <input id="password" name="password" type="text" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="confirm">Confirm Password *</label>
                            <input id="confirm" name="confirm" type="text" class="form-control required">
                        </div>
                        <div class="help-text text-muted">(*) Mandatory</div>
                    </section>
                    <h3>Profile</h3>
                    <section>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">First name *</label>
                                <input id="name" name="name" type="text" class="form-control required">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="surname">Last name *</label>
                                <input id="surname" name="surname" type="text" class="form-control required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input id="email" name="email" type="text" class="form-control required email">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" name="address" class="form-control" type="text">
                        </div>
                        <div class="help-text text-muted">(*) Mandatory</div>
                    </section>
                    <h3>Hints</h3>
                    <section>
                        <ul class="ml-5">
                            <li>Foo</li>
                            <li>Bar</li>
                            <li>Foobar</li>
                        </ul>
                    </section>
                    <h3>Finish</h3>
                    <section>
                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label
                            for="acceptTerms">I agree with the Terms and Conditions.</label>
                    </section>
                </div>
            </form>
        </div> <!-- .card-body -->
    </div>
