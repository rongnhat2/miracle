@extends('admin.layout')
@section('title', 'Kho hàng')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="warehouse-group | warehouse">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Kho hàng</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>

<div class="row I-warehouse">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-default btn-sm flex-right modal-fs-control w-100 tab-action" atr="Create">Nhập kho<i class="fas fa-plus m-l-5"></i></a> 
                <div class="status-list">
                    <p>Danh mục</p>
                    <div class="status-event" atr="Item" data-id="">
                        <div class="d-flex align-items-center">
                            <div class="badge badge-primary badge-dot m-r-10"></div>
                            <div>Kho hàng</div>
                        </div>
                    </div>
                    <div class="status-event is-select" atr="History" data-id="">
                        <div class="d-flex align-items-center">
                            <div class="badge badge-success badge-dot m-r-10"></div>
                            <div>Lịch sử</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card data-custom-tab on-show" data-tab-name="Table">
            <div class="card-body">
                <div class="m-t-25 data-table-wrapper">
                    <table id="data-table" class="table"> </table>
                </div>
            </div>
        </div>
        <div class="data-custom-tab" data-tab-name="Create" id="popup-create">
            
        </div>
        <div class="data-custom-tab" data-tab-name="Update" id="popup-update">
            
        </div>
        <div class="data-custom-tab" data-tab-name="Delete" id="popup-delete">

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
                                    <label class="col-sm-4 col-form-label control-label">Tên chi nhánh *</label>
                                    <div class="col-md-8">
                                        <select name="" id="" class="form-control data-branch">
                                            
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Sản phẩm *</label>
                                    <div class="col-md-8">
                                        <select name="" id="" class="form-control data-product">
                                            
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Số lượng *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control number-type data-quantity" placeholder="">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label control-label">Đơn giá *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control number-type data-prices" placeholder="">
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

@endsection()
 

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/warehouse.js') }}"></script>

@endsection()