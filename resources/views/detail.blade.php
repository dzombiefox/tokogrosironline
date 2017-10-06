<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>TOKO GROSIR</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //tags -->
    {!! Html::style('/css/bootstrap.css') !!}
    {!! Html::style('/css/flexslider.css') !!}
    {!! Html::style('/css/font-awesome.css') !!}
    {!! Html::style('/css/easy-responsive-tabs.css') !!}
    {!! Html::style('/css/style.css') !!}

    <style>
        input[type='number'] {
            -moz-appearance:textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
        .notify-badge{
            position: absolute;
            right:-20px;
            top:-5px;
            background:red;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color:white;
            padding:5px 10px;
            font-size:10px;
        }
        .itemse {
            position:relative;
            /*padding-top:20px;*/
            display:inline-block;
        }
    </style>
</head>
<body>
<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
            <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="#" method="post">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="index.html"><span>T</span>oko Grosir <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <li class="share">Share On : </li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>



        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aksesoris <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="#"> <img src="{{ asset('public/uploads/2017-08/aksesoris.jpeg') }}" alt=""></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Clothing</a></li>
                                                <li><a href="mens.html">Wallets</a></li>
                                                <li><a href="mens.html">Footwear</a></li>
                                                <li><a href="mens.html">Watches</a></li>
                                                <li><a href="mens.html">Accessories</a></li>
                                                <li><a href="mens.html">Bags</a></li>
                                                <li><a href="mens.html">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Jewellery</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Perfumes</a></li>
                                                <li><a href="mens.html">Beauty</a></li>
                                                <li><a href="mens.html">Shirts</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kantor <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Clothing</a></li>
                                                <li><a href="mens.html">Wallets</a></li>
                                                <li><a href="mens.html">Footwear</a></li>
                                                <li><a href="mens.html">Watches</a></li>
                                                <li><a href="mens.html">Accessories</a></li>
                                                <li><a href="mens.html">Bags</a></li>
                                                <li><a href="mens.html">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Jewellery</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Perfumes</a></li>
                                                <li><a href="mens.html">Beauty</a></li>
                                                <li><a href="mens.html">Shirts</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rumah Tangga <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Clothing</a></li>
                                                <li><a href="womens.html">Wallets</a></li>
                                                <li><a href="womens.html">Footwear</a></li>
                                                <li><a href="womens.html">Watches</a></li>
                                                <li><a href="womens.html">Accessories</a></li>
                                                <li><a href="womens.html">Bags</a></li>
                                                <li><a href="womens.html">Caps & Hats</a></li>
                                                <li><a href="womens.html">Watches</a></li>
                                                <li><a href="womens.html">Accessories</a></li>
                                                <li><a href="womens.html">Bags</a></li>
                                                <li><a href="womens.html">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Jewellery</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Perfumes</a></li>
                                                <li><a href="womens.html">Beauty</a></li>
                                                <li><a href="womens.html">Shirts</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="#"> <img src="{{ asset('public/uploads/2017-08/quality.png') }}" alt=""></a>
                                            {{--<a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>--}}
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>

                            <li class="menu__item dropdown">
                                <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Produk Lain <b class="caret"></b></a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="icons.html">Web Icons</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1 ">
                <form action="#" method="post" class="last">
                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                    {{--<input type="hidden" name="display" value="1">--}}

                    <button class="w3view-cart itemse " type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true">   </i><span class="notify-badge">{{$cart}}</span></button>

                </form>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Name" required="">
                            <label>Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="images/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Name" required="">
                            <label>Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="Confirm Password" required="">
                            <label>Confirm Password</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#">By clicking register, I agree to your terms</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="images/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->
<!--/single_page-->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Single <span>Page </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="index.html">Home</a><i>|</i></li>
                    <li>Single Page</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-4 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">

                    <ul class="slides">
                        <li data-thumb="../public/{{$item->images}}">
                            <div class="thumb-image"> <img src="../public/{{$item->images}}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        @foreach($dimages as $dimages)
                        <li data-thumb="../public/{{$dimages->items_imagename}}">
                            <div class="thumb-image"> <img src="../public/{{$dimages->items_imagename}}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            @if(session()->has('message'))
                @if(session()->get('message')=="0")
                    <div class="alert alert-danger">
                       Maaf anda belum memasukkan jumlah belanja
                    </div>
                 @else
                    <div class="alert alert-success">
                    Berhasil menambah keranjang belanja &nbsp;
                        <a class="btn btn-primary " href="{{url('/cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Lihat Keranjang</a>

                    </div>
                @endif


            @endif
            <h3>{{$item->item_name}}</h3>
            <p><span class="item_price">Rp.{{number_format($item->price)}}</span> <del>- Rp.{{number_format($item->priceold)}}</del>
            </p>
            {!! Form::open(['url' => '/savecart', 'class' => 'form-horizontal', 'id' => 'form-save','files' => true]) !!}

            <div class=" button2 " style="float: right;">
                <button class="btn btn-default">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Beli Barang
                </button>

            </div>

            <br>

            <br>
            <table class="table table-responsive table-condensed" style="width: 100%">
                <tbody>
                @foreach($prices as $price)
                    <tr>
                        <td>1{{$price->unitname}}<input type="hidden" name="id[]" value="{{$price->id}}"/><input type="hidden" name="product[]" value="{{$price->items_id}}" /><input type="hidden" name="price[]" value="{{$price->prices}}" />
                            <input type="hidden" name="unitname[]" value="{{$price->unitname}}" /><input type="hidden" name="items[]" value="{{$price->item_name}}" /><input type="hidden" name="images[]" value="{{$price->images}}" /></td>
                        <td >Rp.{{number_format($price->prices)}}</td>
                        <td align="right" style="width: 20%">
                                <input name="qty[]" value="0" class="form-control" type="number" min="0" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 0) ? (1/1) : this.value;">
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {!! Form::close() !!}

            <div class="alert alert-danger">
                <strong>Perhatian :</strong> Minimum pembelian barang {{ $item->minimumorder }}


            </div>

        </div>
        <div class="clearfix"> </div>
        <!-- /new_arrivals -->
        <div class="responsive_tabs_agileits">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Description</li>
                    {{--<li>Reviews</li>--}}
                    <li>Information</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        <div class="single_page_agile_its_w3ls">
                            {{$item->descriptions}}
                          </div>
                    </div>

                    <div class="tab3">

                        <div class="single_page_agile_its_w3ls">
                            {{$item->informations}}
                            {{--<h6>Big Wing Sneakers (Navy)</h6>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>--}}
                            {{--<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //new_arrivals -->
        <!--/slider_owl-->

        <div class="w3_agile_latest_arrivals">
            <h3 class="wthree_text_info">Produk <span>Sejenis</span></h3>
            @foreach($items as $data)
            <div class="col-md-3 product-men single">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="../public/{{ $data->images }}" alt="" class="pro-image-front">
                        <img src="../public/{{ $data->imagesback }}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">Baru</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">{{$data->item_name}}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$140.99</span>
                            <del>$189.71</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            {{--<div class="col-md-3 product-men single">--}}
                {{--<div class="men-pro-item simpleCart_shelfItem">--}}
                    {{--<div class="men-thumb-item">--}}
                        {{--<img src="images/w4.jpg" alt="" class="pro-image-front">--}}
                        {{--<img src="images/w4.jpg" alt="" class="pro-image-back">--}}
                        {{--<div class="men-cart-pro">--}}
                            {{--<div class="inner-men-cart-pro">--}}
                                {{--<a href="single.html" class="link-product-add-cart">Quick View</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span class="product-new-top">New</span>--}}

                    {{--</div>--}}
                    {{--<div class="item-info-product ">--}}
                        {{--<h4><a href="single.html">Black Basic Shorts</a></h4>--}}
                        {{--<div class="info-product-price">--}}
                            {{--<span class="item_price">$120.99</span>--}}
                            {{--<del>$189.71</del>--}}
                        {{--</div>--}}
                        {{--<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">--}}
                            {{--<form action="#" method="post">--}}
                                {{--<fieldset>--}}
                                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                                    {{--<input type="hidden" name="add" value="1">--}}
                                    {{--<input type="hidden" name="business" value=" ">--}}
                                    {{--<input type="hidden" name="item_name" value="Black Basic Shorts">--}}
                                    {{--<input type="hidden" name="amount" value="30.99">--}}
                                    {{--<input type="hidden" name="discount_amount" value="1.00">--}}
                                    {{--<input type="hidden" name="currency_code" value="USD">--}}
                                    {{--<input type="hidden" name="return" value=" ">--}}
                                    {{--<input type="hidden" name="cancel_return" value=" ">--}}
                                    {{--<input type="submit" name="submit" value="Add to cart" class="button">--}}
                                {{--</fieldset>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 product-men single">--}}
                {{--<div class="men-pro-item simpleCart_shelfItem">--}}
                    {{--<div class="men-thumb-item">--}}
                        {{--<img src="images/s6.jpg" alt="" class="pro-image-front">--}}
                        {{--<img src="images/s6.jpg" alt="" class="pro-image-back">--}}
                        {{--<div class="men-cart-pro">--}}
                            {{--<div class="inner-men-cart-pro">--}}
                                {{--<a href="single.html" class="link-product-add-cart">Quick View</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span class="product-new-top">New</span>--}}

                    {{--</div>--}}
                    {{--<div class="item-info-product ">--}}
                        {{--<h4><a href="single.html">Aero Canvas Loafers  </a></h4>--}}
                        {{--<div class="info-product-price">--}}
                            {{--<span class="item_price">$120.99</span>--}}
                            {{--<del>$199.71</del>--}}
                        {{--</div>--}}
                        {{--<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">--}}
                            {{--<form action="#" method="post">--}}
                                {{--<fieldset>--}}
                                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                                    {{--<input type="hidden" name="add" value="1">--}}
                                    {{--<input type="hidden" name="business" value=" ">--}}
                                    {{--<input type="hidden" name="item_name" value="Aero Canvas Loafers">--}}
                                    {{--<input type="hidden" name="amount" value="30.99">--}}
                                    {{--<input type="hidden" name="discount_amount" value="1.00">--}}
                                    {{--<input type="hidden" name="currency_code" value="USD">--}}
                                    {{--<input type="hidden" name="return" value=" ">--}}
                                    {{--<input type="hidden" name="cancel_return" value=" ">--}}
                                    {{--<input type="submit" name="submit" value="Add to cart" class="button">--}}
                                {{--</fieldset>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 product-men single">--}}
                {{--<div class="men-pro-item simpleCart_shelfItem">--}}
                    {{--<div class="men-thumb-item">--}}
                        {{--<img src="images/w7.jpg" alt="" class="pro-image-front">--}}
                        {{--<img src="images/w7.jpg" alt="" class="pro-image-back">--}}
                        {{--<div class="men-cart-pro">--}}
                            {{--<div class="inner-men-cart-pro">--}}
                                {{--<a href="single.html" class="link-product-add-cart">Quick View</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span class="product-new-top">New</span>--}}

                    {{--</div>--}}
                    {{--<div class="item-info-product ">--}}
                        {{--<h4><a href="single.html">Ankle Length Socks</a></h4>--}}
                        {{--<div class="info-product-price">--}}
                            {{--<span class="item_price">$100.99</span>--}}
                            {{--<del>$159.71</del>--}}
                        {{--</div>--}}
                        {{--<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">--}}
                            {{--<form action="#" method="post">--}}
                                {{--<fieldset>--}}
                                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                                    {{--<input type="hidden" name="add" value="1">--}}
                                    {{--<input type="hidden" name="business" value=" ">--}}
                                    {{--<input type="hidden" name="item_name" value="Ankle Length Socks">--}}
                                    {{--<input type="hidden" name="amount" value="30.99">--}}
                                    {{--<input type="hidden" name="discount_amount" value="1.00">--}}
                                    {{--<input type="hidden" name="currency_code" value="USD">--}}
                                    {{--<input type="hidden" name="return" value=" ">--}}
                                    {{--<input type="hidden" name="cancel_return" value=" ">--}}
                                    {{--<input type="submit" name="submit" value="Add to cart" class="button">--}}
                                {{--</fieldset>--}}
                            {{--</form>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="clearfix"> </div>
            <!--//slider_owl-->
        </div>
    </div>
</div>
<!--//single_page-->
<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2><a href="index.html"><span>E</span>lite Shoppy </a></h2>
            <p>Lorem ipsum quia dolor
                sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora.</p>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="mens.html">Men's Wear</a></li>
                        <li><a href="womens.html">Women's wear</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="typography.html">Short Codes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="agile_newsletter_footer">
            <div class="col-sm-6 newsleft">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="Enter your email..." name="email" required="">
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
        <p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->

<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3>Sign up for free</h3>
                            <form>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <h4>Re-type Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <input type="submit" value="REGISTER NOW" >
                                </div>

                            </form>
                        </div>
                        <div class="login-right">
                            <h3>Sign in with your account</h3>
                            <form>
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="single-bottom">
                                    <input type="checkbox"  id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <div class="sign-in">
                                    <input type="submit" value="SIGNIN" >
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->

{{--<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>--}}
{{--<!-- //js -->--}}
{{--<script src="/js/modernizr.custom.js"></script>--}}
{{--<!-- Custom-JavaScript-File-Links -->--}}
{{--<!-- cart-js -->--}}
{{--<script src="/js/minicart.min.js"></script>--}}
{!! Html::script('/js/jquery-2.1.4.min.js') !!}
{!! Html::script('/js/modernizr.custom.js') !!}
{!! Html::script('/js/minicart.min.js') !!}


<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- single -->
{{--<script src="/js/imagezoom.js"></script>--}}
{{--<!-- single -->--}}
{{--<!-- script for responsive tabs -->--}}
{{--<script src="/js/easy-responsive-tabs.js"></script>--}}
{!! Html::script('/js/imagezoom.js') !!}
{!! Html::script('/js/easy-responsive-tabs.js') !!}
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- FlexSlider -->
{{--<script src="/js/jquery.flexslider.js"></script>--}}
{!! Html::script('/js/jquery.flexslider.js') !!}
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->
<!-- //script for responsive tabs -->
<!-- start-smoth-scrolling -->

{!! Html::script('/js/move-top.js') !!}
{!! Html::script('/js/jquery.easing.min.js') !!}
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
{!! Html::script('/js/bootstrap.js') !!}

</body>
</html>
