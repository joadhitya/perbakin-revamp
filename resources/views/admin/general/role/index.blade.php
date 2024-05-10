@extends('admin.layouts.master')
@section('title', 'Role')
@section('content')
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-8 col-sm-8 col-8">
                        <h5 class="h5 text-uppercase">Role</h5>
                    </div>
                    <div class="col-md-4 col-sm-4 col-4">
                        <button id="btn-add-role" type="button" class="btn btn-sm btn-primary mr-1 float-right text-uppercase"
                            onclick="openModal('role','add')"><i class="fe fe-plus"></i> Create Data</button>
                        <button id="btn-back-role" type="button" style="display: none"
                            class="btn btn-sm btn-warning text-white mr-1 float-right text-uppercase"
                            onclick="openModal('role','back')"><i class="fe fe-arrow-left"></i> Back</button>

                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="card-body" id="show-data-role">
                <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>
            </div>
            <div class="card-body" id="access-control-role" style="display: none">
                {{-- <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div> --}}
            </div>
        </div>
    </div>
@endsection


@section('modal')
    @include('admin.general.role.modal')
@endsection

@push('page-scripts')
    <script src="{{ asset('script/admin/general/index.js') }}"></script>
@endpush
