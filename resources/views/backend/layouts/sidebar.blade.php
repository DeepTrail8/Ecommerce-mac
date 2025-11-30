<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{ route('home.index') }}" id="site-logo-inner">
                            <img class="" id="logo_header" alt="" src="{{ asset('images/logo.png') }}"
                                data-light="{{ asset('images/logo.png') }}" data-dark="{{ asset('images/logo.png') }}">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>

                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Dashboard</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{ route('home.index') }}">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="center-item">
                            <div class="center-heading">Masters</div>

                            <ul class="menu-list">

                                <!-- Products -->
                                <li class="menu-item has-children">
                                    <a class="menu-item-button" data-bs-toggle="collapse" href="#productsMenu"
                                        role="button" aria-expanded="false">
                                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                                        <div class="text">Products</div>
                                    </a>
                                    <ul class="sub-menu collapse" id="productsMenu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('products.create') }}">
                                                <div class="text">Add Product</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('products.index') }}">
                                                <div class="text">Products</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Brand -->
                                <li class="menu-item has-children">
                                    <a class="menu-item-button" data-bs-toggle="collapse" href="#brandMenu"
                                        role="button" aria-expanded="false">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Brand</div>
                                    </a>
                                    <ul class="sub-menu collapse" id="brandMenu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('brands.create') }}">
                                                <div class="text">New Brand</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('brands.index') }}">
                                                <div class="text">Brands</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Category -->
                                <li class="menu-item has-children">
                                    <a class="menu-item-button" data-bs-toggle="collapse" href="#categoryMenu"
                                        role="button" aria-expanded="false">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Category</div>
                                    </a>
                                    <ul class="sub-menu collapse" id="categoryMenu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('categories.index') }}">
                                                <div class="text">New Category</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('categories.index') }}">
                                                <div class="text">Categories</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Order -->
                                <li class="menu-item has-children">
                                    <a class="menu-item-button" data-bs-toggle="collapse" href="#orderMenu"
                                        role="button" aria-expanded="false">
                                        <div class="icon"><i class="icon-file-plus"></i></div>
                                        <div class="text">Order</div>
                                    </a>
                                    <ul class="sub-menu collapse" id="orderMenu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('orders.index') }}">
                                                <div class="text">Orders</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('orders.showall') }}">
                                                <div class="text">Order tracking</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Slider -->
                                <li class="menu-item has-children">
                                    <a class="menu-item-button" data-bs-toggle="collapse" href="#sliderMenu"
                                        role="button" aria-expanded="false">
                                        <div class="icon"><i class="icon-file-plus"></i></div>
                                        <div class="text">Slider</div>
                                    </a>
                                    <ul class="sub-menu collapse" id="sliderMenu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('sliders.create') }}">
                                                <div class="text">Add Slider</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('sliders.index') }}">
                                                <div class="text">Sliders</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Coupons -->
                                <li class="menu-item has-children">
                                    <a class="menu-item-button" data-bs-toggle="collapse" href="#couponMenu"
                                        role="button" aria-expanded="false">
                                        <div class="icon"><i class="icon-file-plus"></i></div>
                                        <div class="text">Coupons</div>
                                    </a>
                                    <ul class="sub-menu collapse" id="couponMenu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('coupons.create') }}">
                                                <div class="text">Add Coupons</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('coupons.index') }}">
                                                <div class="text">Coupons</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- User -->
                                <li class="menu-item">
                                    <a href="{{ route('user.show') }}">
                                        <div class="icon"><i class="icon-user"></i></div>
                                        <div class="text">User</div>
                                    </a>
                                </li>

                                <!-- Settings -->
                                <li class="menu-item">
                                    <a href="{{ route('admin.index') }}">
                                        <div class="icon"><i class="icon-settings"></i></div>
                                        <div class="text">Settings</div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    
                
                </div>
            </div>
