<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light sm-4">
        <a class="navbar-brand col" href="#">
            <!-- <img src="./public/img/app-icon/app-icon.png" alt=""> -->
        </a>
        <div class="col">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="input-group my-2 my-lg-0">
                <input class="form-control mr-sm-5 bg-gray" type="text" placeholder="Search">
                <button class=" my-2 my-sm-0 ml-30 btn btn-outline-secondary " type="submit">Search
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

        <div class=" col  infor">
            <button type=" button" class="btn d-flex">
                <i class="bi bi-person"></i> Tài khoản
            </button>
            <!-- <button type="button" class="btn d-flex  ">
                <i class="bi bi-cart"></i> Giỏ hàng
            </button> -->

            <div class="dropdown">
                <button type="button" class="btn d-flex dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-cart"></i> Giỏ hàng
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Product 1</a>
                    <a class="dropdown-item" href="#">Product 2</a>
                    <a class="dropdown-item" href="#">Product 3</a>

                    <span class="dropdown-item">trống</span>
                </div>
            </div>

        </div>
    </nav>
    <ul class="nav justify-content-center bg-dark menu">
        <li class="nav-item">
            <a class="nav-link text-light hover-underline-animation" href="?controller=home">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light hover-underline-animation" href="?controller=product">Sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light hover-underline-animation" href="#">Khuyến mãi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light hover-underline-animation" href="#">Giới thiệu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light hover-underline-animation" href="#">Liên hệ</a>
        </li>
    </ul>
</header>