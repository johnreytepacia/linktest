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
                            {{-- <img src="/images/shares.png" alt="" class="shares"> --}}
                            <ul class="list-inline shares">
                                <li class="list-inline-item">
                                    <iframe src="{{ url('/fb') }}" style="border:none;overflow:hidden;width:98px;"
                                        scrolling="no">
                                    </iframe>
                                </li>
                                <li class="list-inline-item">
                                    <iframe src="{{ url('/twitter') }}" style="border:none;overflow:hidden;width:161px;"
                                        scrolling="no">
                                    </iframe>
                                </li>
                                <li class="list-inline-item">
                                    <iframe src="{{ url('/pin') }}" style="border:none;overflow:hidden;width:81px;"
                                        scrolling="no">
                                    </iframe>
                                </li>
                            </ul>



                            {{-- <img src="/images/reviews.png" alt=""> --}}

                            <div class="reviews">
                                <div class="my-rating"></div>
                                <div class="result"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="favorites">
                                <p><a href="{{ url('/') }}" class="main-btn"><i class="far fa-heart"></i></a></p>
                            </div>
                        </div>
                    </div>

                    <h2>&dollar; 2999</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a,
                        scelerisque sed, lacinia in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh
                        augue suscipit.</p>

                    <div class="quantity headline">
                        <p>Quantity</p>
                        <form>
                            <div class="input-group mb-3">
                                <button class="btn btn-outline-secondary decrease main-btn" type="button"><i
                                        class="fas fa-minus"></i></button>

                                <input type="text" class="form-control quan" min="1" value="0">

                                <button class="btn btn-outline-secondary btn2 increase main-btn" type="button"><i
                                        class="fas fa-plus"></i></button>

                                <div class="add-cart">

                                    <button type="submit" class="main-btn">Add To Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tags headline">
                        <p>Tags</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="main-btn-outline">Bike</a></li>
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="main-btn-outline">Extreme</a>
                            </li>
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="main-btn-outline">Mountain</a>
                            </li>
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="main-btn-outline">MTB</a></li>
                            <li class="list-inline-item"><a href="{{ url('/') }}"
                                    class="main-btn-outline">Professional</a></li>
                        </ul>
                    </div>
                    <div class="descriptions product-tabs">
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

    .jq-stars {
        display: inline-block;
    }

    .jq-rating-label {
        font-size: 22px;
        display: inline-block;
        position: relative;
        vertical-align: top;
        font-family: "Open Sans", sans-serif;
    }

    .jq-star {
        width: 100px;
        height: 100px;
        display: inline-block;
        cursor: pointer;
    }

    .jq-star-svg {
        padding-left: 3px;
        width: 100%;
        height: 100%;
    }

    .jq-star-svg path {
        /* stroke: #000; */
        stroke-linejoin: round;
    }

    /* un-used */
    .jq-shadow {
        -webkit-filter: drop-shadow(-2px -2px 2px #888);
        filter: drop-shadow(-2px -2px 2px #888);
    }
</style>

@endsection

@section('custom_js')

<script src="/js/plugins/jquery.flexslider-min.js"></script>
<script src="/js/plugins/jquery.star-rating-svg.js"></script>

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



    $('.my-rating').starRating({
        starSize: 25,
        hoverColor: '#db4a4a',
        activeColor: '#db4a4a',
        ratedColor: '#db4a4a',
        strokeColor: '#a4a4a4',
        callback: function(currentRating, $el){
           $('.reviews .result').append('<p>' + currentRating + ' reviews</p>');
        }
    });

        
   
</script>
@endsection