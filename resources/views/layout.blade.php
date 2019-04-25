<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Shree Online Shop</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
   <!-- [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->





<style>
    .paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("frontend/images/home/money1.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("frontend/images/home/bikash.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("frontend/images/home/roket.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("frontend/images/home/DBBL.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
    background-image: url("frontend/images/home/bikash.jpg");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
}
</style>










<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 01716281019</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> deepshami0449@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/deep.paul.3576"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="{{asset('frontend/images/home/logo2.png')}}" height="100px;" width="100px;" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Bangladesh
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.google.com/maps/place/%E0%A6%A2%E0%A6%BE%E0%A6%95%E0%A6%BE/@23.7805733,90.2792371,11z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.810332!4d90.4125181">Dhaka</a></li>
                                    <li><a href="https://www.google.com/maps/place/%E0%A6%B8%E0%A6%BF%E0%A6%B2%E0%A7%87%E0%A6%9F/@24.8997472,91.7909416,12z/data=!3m1!4b1!4m5!3m4!1s0x375054d3d270329f:0xf58ef93431f67382!8m2!3d24.8949294!4d91.8687063">Sylhet</a></li>
                                    <li><a href="https://www.google.com/maps/place/%E0%A6%9A%E0%A6%9F%E0%A7%8D%E0%A6%9F%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AE/@22.3258742,91.6797789,11z/data=!3m1!4b1!4m5!3m4!1s0x30acd8a64095dfd3:0x5015cc5bcb6905d9!8m2!3d22.356851!4d91.7831819">Chittagong</a></li>
                                     <li><a href="https://www.google.com/maps/place/%E0%A6%95%E0%A7%81%E0%A6%AE%E0%A6%BF%E0%A6%B2%E0%A7%8D%E0%A6%B2%E0%A6%BE/@23.4530549,91.1482907,13z/data=!3m1!4b1!4m5!3m4!1s0x37547f249815015d:0x549a77e542115f77!8m2!3d23.4606574!4d91.1809065">Comilla</a></li>
                                      <li><a href="https://www.google.com/maps/place/%E0%A6%B0%E0%A6%BE%E0%A6%9C%E0%A6%B6%E0%A6%BE%E0%A6%B9%E0%A7%80/@24.3800614,88.5709504,13z/data=!3m1!4b1!4m5!3m4!1s0x39fbefa96a38d031:0x10f93a950ed6f410!8m2!3d24.3635886!4d88.6241351">Rajshahi</a></li>
                                       <li><a href="https://www.google.com/maps/place/%E0%A6%96%E0%A7%81%E0%A6%B2%E0%A6%A8%E0%A6%BE/@22.8452866,89.4624606,12z/data=!3m1!4b1!4m5!3m4!1s0x39ff9071cb47152f:0xf04b212290718952!8m2!3d22.845641!4d89.5403279">Khulna</a></li>
                                        <li><a href="https://www.google.com/maps/place/%E0%A6%AC%E0%A6%B0%E0%A6%BF%E0%A6%B6%E0%A6%BE%E0%A6%B2/@22.6953679,90.2837632,12z/data=!3m1!4b1!4m5!3m4!1s0x37553407fbece487:0x5d069b9599d4414a!8m2!3d22.7010021!4d90.3534511">Barisal</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Payment System
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="https://dutchbanglabank.com/schedule_charge/schedule-of-charges.pdf">Datch Bangla Bank</a></li>
                                    <li><a href="https://www.bkash.com/bn/products-services/payment">Bikash </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                               
                                <li><a href="{{URL::to('/login_check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="{{URL::to('/show_cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                     <?php $customer_id=Session::get('customer_id'); ?>
                                 <?php if($customer_id != NULL) {?>
                        <li><a href="{{URL::to('/login_check')}}"><i class="fa fa-lock"></i> Logout</a></li>
                              <?php }else {?>
                                <li><a href="{{URL::to('/login_check')}}"><i class="fa fa-lock"></i> Login</a></li>
                                 <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/view_product')}}">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li> 
                                        <li><a href="{{URL::to('/login_check')}}">Checkout</a></li> 
                                        <li><a href="{{URL::to('/show_cart')}}">Cart</a></li> 
                                        <li><a href="{{URL::to('/admin')}}">Admin Login</a></li> 
                                    </ul>
                                </li> 
                              
                            
                             
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
      <?php $all_published_slider=DB::table('tbl_slider')
                                         ->where('publication_status',1)
                                         ->get();

                                         ?>
                                          

    @yield('slider');

            <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                               <?php
                               $all_published_category=DB::table('tbl_category')
                                         ->where('publication_status',1)
                                         ->get();

                                       foreach ($all_published_category as $v_category){?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>
                            </div>

                            <?php } ?>
                        </div><!--/category-products-->
                        </div>
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                    <?php
                               $all_published_manufacture=DB::table('tbl_manufacture')
                                         ->where('publication_status',1)
                                         ->get();

                                       foreach ($all_published_manufacture as $v_manufacture){?>
                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}""> <span class="pull-right">(50)</span>{{$v_manufacture->manufacture_name}}</a></li>
                     <?php } ?>
                                   
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">100 Tk</b> <b class="pull-right">30000 Tk</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset('frontend/images/home/shipping.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                       
                    @yield('content')
                  </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Sh</span>-ree</h2>
                             <h2><span>Online Shop </span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/deep.jpg')}}"  height="100px;"  alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Deponkor Paul</p>
                                <p>Deliver Men</p>
                                <h2>17 March 2019</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/shami.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Shami Purkayastha</p>
                                <p>Deliver Women</p>
                                <h2>12 Feb 2019</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/priya.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Priya Purkayastha</p>
                                  <p>Deliver Women</p>
                                <h2>24 Feb 2019</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{URL::to('frontend/images/home/tonni.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Ankita Paul Tonni</p>
                                <p>Deliver Women</p>
                                <h2>22 Murch 2019</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{URL::to('frontend/images/home/bangladesh.jpg')}}" height="200px;" alt="" />
                            <p>Bangladesh Map</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2019- DeepShami Company.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Deep Shami Company</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>