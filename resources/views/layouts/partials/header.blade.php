<nav class="navbar navbar-expand-xl">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="/images/logo.png" alt=""></a>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
            aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">



            <ul class="list-inline clickable-icons social-media">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>


            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Important Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>

            <ul class="list-inline clickable-icons widgets">
                <li class="list-inline-item morphing-btn-wrap">
                    <a data-fancybox="search" data-src="#search" href="javascript:;">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ url('/') }}">
                        <i class="fas fa-heart"></i>
                        <span class="badge">1</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ url('/') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">0</span>
                    </a>
                </li>
                <li class="list-inline-item"><a href="{{ url('/') }}"><i class="fas fa-bars"></i></a></li>
            </ul>


        </div>
    </div>

</nav>
<div id="search" class="p-5" style="display: none; max-width: 600px;">
    <h2>
        Search Me!
    </h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque
        sed, lacinia in.
    </p>
    <form>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary main-btn btn" type="button" id="button-addon2"><i
                    class="fas fa-search"></i></button>
        </div>
    </form>

</div>
<div class="container-fluid">
    <div class="divider"></div>
</div>
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-inline navigation">
                    <li class="list-inline-item"><a href="{{ url('/') }}"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="list-inline-item"><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 d-flex">
                <nav aria-label="breadcrumb " class="ms-auto">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Page</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>