@extends('admin.layout')
@section('title', 'Danh mục')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="manager-group | category">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Danh mục</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>
<div class="card data-custom-tab on-show" data-tab-name="Table">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="align-justify-center">
                    <a href="#" class="btn btn-default btn-sm flex-right tab-action" atr="Create">Tạo mới<i class="fas fa-plus m-l-5"></i></a> 
                </div>
            </div>
        </div>
        <div class="m-t-25">
            <table id="data-table" class="table"> </table>
        </div>
    </div>
</div>

<div class="layout-tab-create">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">   
                    <div class="tab-content" id="myTabContent"> 
                        <div class="card">
                            <div class="card-body">
                                <div class="error-log"> </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Hình ảnh ( 480 x 640 ) *</label> 
                                    <div class="col-md-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input image-input data-image" id="customFile" accept="image/*">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div> 
                                        <div class="image-preview form-preview i-3-4">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Icon *</label> 
                                     <div class="col-md-8">
                                        <input type="hidden" class="data-icon-val">
                                        <div class="icon-selected">
                                            <div class="icon-preview">
                                                
                                            </div>
                                            <div class="icon-list-data">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Tên danh mục *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control data-name" placeholder="">
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Confirm">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-tab-delete">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">   
                    <h3>Xóa đối tượng</h3>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Delete">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-custom-tab" data-tab-name="Create" id="popup-create">
    
</div>
<div class="data-custom-tab" data-tab-name="Update" id="popup-update">
    
</div>
<div class="data-custom-tab" data-tab-name="Delete" id="popup-delete">

</div>

@endsection()
 

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/category.js') }}"></script>

@endsection()