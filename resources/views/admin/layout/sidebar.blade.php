<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{ route('admin.dashboard.index') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Bảng điều khiển</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                    <i class="fab fa-product-hunt"></i>
                    <span class="nav-text">Quản lý sản phẩm</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('attributes.index') }}">Thuộc tính sản phẩm</a></li>
                    <li><a href="table-bootstrap-basic.html">Danh sách sản phẩm</a></li>
                    <li><a href="table-bootstrap-basic.html">Danh mục sản phẩm</a></li>
                </ul>
            </li>

        </ul>
        <div class="copyright">
            <p>Bản quyền © {{ date('Y') }} Phạm Ngọc Khánh - Luyện Huy Hướng </p>
        </div>
    </div>
</div>
<!--**********************************
        Sidebar end
    ***********************************-->
