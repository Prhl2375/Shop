<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <?=$meta?>
    <link rel="icon" type="icon/png" href="https://dota2.ru//img/esport/player/583.png">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="/js/simpleCart.min.js"> </script>
    <link href="/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="/js/jquery.easydropdown.js"></script>
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select onchange="currencyChange(this)" tabindex="4" class="currency">
                            <option value="" class="label"> <?=$data['currency']['name'];?></option>
                            <?php foreach ($data['currencies'] as $curr): ?>
                            <option value="<?=$curr['name']?>"><?=$curr['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <a href="/checkout.html">
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                        <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="/images/cart-1.png" alt="" />
                    <p class="simpleCart_empty">Empty Cart</p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="/"><h1>Luxury Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="/">Home</a></li>
                        <li class="grid"><a href="/catalog">Catalog</a>
                        <li class="grid"><a href="/typo.html">Blog</a>
                        </li>
                        <li class="grid"><a href="/contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <form class="search" action="#" onsubmit="return searchSubmit()">
                        <input id="q" type="search" required placeholder="">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
<?=$content;?>
<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="/#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="/#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="/#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="/#"><p>Specials</p></a></li>
                    <li><a href="/#"><p>New Products</p></a></li>
                    <li><a href="/#"><p>Our Stores</p></a></li>
                    <li><a href="/contact.html"><p>Contact Us</p></a></li>
                    <li><a href="/#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="/account.html"><p>My Account</p></a></li>
                    <li><a href="/#"><p>My Credit slips</p></a></li>
                    <li><a href="/#"><p>My Merchandise returns</p></a></li>
                    <li><a href="/#"><p>My Personal info</p></a></li>
                    <li><a href="/#"><p>My Addresses</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="/mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>?? 2015 Luxury Watches. All Rights Reserved | Design by  <a href="/http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
<script src="/js/main.js"></script>
</html>
