@extends('admin.layouts.master')
@section('title', 'Master Data Material')
@section('content')
    <div class="col-md-12 ">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-6 col-sm-6 col-6">
                        <h5 class="h5 text-uppercase">List Master Material</h5>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <button type="button" class="btn btn-sm btn-primary mr-1 float-right text-uppercase"
                            onclick="openModal('material','add')"><i class="fe fe-plus"></i> Create Data</button>
                    </div>
                </div>
            </div>

            <div class="card-body pt-2" id="show-data-material">
                <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2" role="material"> <span
                            class="sr-only">Loading...</span> </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('modal')
    @include('admin.master-data.material.modal')
@endsection

@push('page-scripts')
    <script src="{{ asset('script/admin/master-data.js') }}"></script>
    <script src="{{ asset('script/admin/general.js') }}"></script>
@endpush
