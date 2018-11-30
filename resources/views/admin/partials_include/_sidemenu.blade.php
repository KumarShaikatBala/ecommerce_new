<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">Richard V.Welsh</p>
                        <div>
                            <small class="designation text-muted">Manager</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block">New Project
                    <i class="mdi mdi-plus"></i>
                </button>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Manage Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-success btn-block" href="{{route('products.create')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Add Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('brands.index')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Manage Brand</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-inverse-primary btn-fw text-center" href="{{route('brands.create')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Add Brand</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('categories.index')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Manage Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-success btn-block" href="{{route('categories.create')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Add Category</span>
            </a>
        </li>

    </ul>
</nav>
<!-- partial -->