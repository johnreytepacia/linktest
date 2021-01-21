@extends('layouts.index')

@section('content')
<div class="product-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>

                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                        <li>
                            <img src="/images/bike.png" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Sporta Predator Rx6</h4>
                            <img src="/images/shares.png" alt="" class="shares">
                            <img src="/images/reviews.png" alt="">
                        </div>
                        <div class="col-md-3">
                            <div class="favorites">
                                <p><a href="{{ url('/') }}"><i class="far fa-heart"></i></a></p>
                            </div>
                        </div>
                    </div>

                    <h2>&dollar; 2000</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a,
                        scelerisque sed, lacinia in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh
                        augue suscipit.</p>

                    <div class="quantity headline">
                        <p>Quantity</p>
                        <form>
                            <div class="input-group mb-3">
                                <button class="btn btn-outline-secondary decrease" type="button"><i
                                        class="fas fa-minus"></i></button>

                                <input type="text" class="form-control quan" min="1" value="0">

                                <button class="btn btn-outline-secondary btn2 increase" type="button"><i
                                        class="fas fa-plus"></i></button>

                                <div class="add-cart">

                                    <button type="submit">Add To Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tags headline">
                        <p>Tags</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}">Bike</a></li>
                            <li class="list-inline-item"><a href="{{ url('/') }}">Extreme</a></li>
                            <li class="list-inline-item"><a href="{{ url('/') }}">Mountain</a></li>
                            <li class="list-inline-item"><a href="{{ url('/') }}">MTB</a></li>
                            <li class="list-inline-item"><a href="{{ url('/') }}">Professional</a></li>
                        </ul>
                    </div>
                    <div class="descriptions">
                        <ul class="nav nav-tabs" id="productTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="additional-tab" data-bs-toggle="tab" href="#additional"
                                    role="tab" aria-controls="additional" aria-selected="false">Additional Info</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="reviews" aria-selected="false">Reviews (5)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit
                                    a,
                                    scelerisque sed, lacinia in. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Proin nibh
                                    augue suscipit.</p>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit
                                    a,
                                    scelerisque sed, lacinia in. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Proin nibh
                                    augue suscipit.</p>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit
                                    a,
                                    scelerisque sed, lacinia in. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Proin nibh
                                    augue suscipit.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @include('products.related')

    </div>
</div>
@endsection

@section('custom_css')
<link rel="stylesheet" href="/css/flexslider.css">
<link rel="stylesheet" href="/css/flexslider-rtl-min.css">

<style>
    .flex-direction-nav a:before {
        font-size: 24px;
    }
</style>

@endsection

@section('custom_js')

<script src="/js/plugins/jquery.flexslider-min.js"></script>

<script type="text/javascript">
    $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 137,
            itemMargin: 20,
            asNavFor: '#slider'
        });
    
    $('#carousel li img').hover(function(){
        $(this).click();
    });

    $('#slider').flexslider({
        animation: "fade",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });

    $('.increase').click(function(){
        var value = parseInt($('.quan').val(),10);
        value = isNaN(value) ? 0 : value;
        value++;
        $('.quan').val(value);

    });

    $('.decrease').click(function(){
        var value = parseInt($('.quan').val(),10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        $('.quan').val(value);

    });

        
   
</script>
@endsection