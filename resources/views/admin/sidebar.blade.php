<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">  
            <li class="nav-item dropdown statistic-group">
                <a class="dropdown-toggle statistic" href="{{ route('admin.product.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-area-chart"></i>
                    </span>
                    <span class="title">Thống kê</span>
                </a>
            </li>
            <li class="nav-item dropdown manager-group">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Quản lí</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu"> 
                    <li class="category"> <a href="{{ route('admin.category.index') }}">Danh mục</a> </li>
                    <li class="product"> <a href="{{ route('admin.product.index') }}">Sản phẩm</a> </li>
                    <li class="discount"> <a href="{{ route('admin.discount.index') }}">Giảm giá</a> </li>
                </ul>
            </li> 
            <li class="nav-item dropdown order-group">
                <a class="dropdown-toggle order" href="{{ route('admin.order.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-file-text"></i>
                    </span>
                    <span class="title">Đơn hàng</span>
                </a>
            </li>
            <li class="nav-item dropdown branch-group">
                <a class="dropdown-toggle branch" href="{{ route('admin.branch.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-bank"></i>
                    </span>
                    <span class="title">Chi nhánh</span>
                </a>
            </li>
            <li class="nav-item dropdown warehouse-group">
                <a class="dropdown-toggle warehouse" href="{{ route('admin.warehouse.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-inbox"></i>
                    </span>
                    <span class="title">Kho hàng</span>
                </a>
            </li>
            <li class="nav-item dropdown manager-group">
                <a class="dropdown-toggle manager" href="{{ route('admin.branch.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Nhân viên</span>
                </a>
            </li>
            <li class="nav-item dropdown customer-group">
                <a class="dropdown-toggle customer" href="{{ route('admin.branch.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-team"></i>
                    </span>
                    <span class="title">Khách hàng</span>
                </a>
            </li>
            {{-- <li class="nav-item d-none dropdown news-group">
                <a class="dropdown-toggle news" href="{{ route('admin.news.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-question-circle"></i>
                    </span>
                    <span class="title">Hướng dẫn</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>