

<link href="ecat.css" rel="stylesheet" type="text/css" />

@include('menus.header.navbar')

<script src="real.js" type="text/javascript"></script>



    <div class="overlayOffCanvas"></div>
    <div class="responsive-nav-wrapper-parent">
        <div class="responsive-nav-wrapper">
            <div class="menu-title">
                <span>Menu</span>
            </div>
            <div class="mobile-logo">




                <a href="/" class="logo">


                    <img alt="Exco Parts" src="https://www.excohdparts.com/images/thumbs/0000520.png" /></a>
            </div>
            <div class="search-wrap">
                <span>Search</span>
            </div>
            <div class="shopping-cart-link">
                <a href="/cart">Cart</a>
            </div>
        </div>
    </div>
    <div class="master-wrapper-content">




        <div id="product-ribbon-info" data-productid="0"
             data-productboxselector=".product-item, .item-holder"
             data-productboxpicturecontainerselector=".picture, .item-picture"
             data-productpagepicturesparentcontainerselector=".product-essential"
             data-productpagebugpicturecontainerselector=".picture"
             data-retrieveproductribbonsurl="/RetrieveProductRibbons">
        </div>


        <div class="quickViewData" data-productselector=".product-item"
             data-productselectorchild=".buttons"
             data-retrievequickviewurl="/quickviewdata"
             data-quickviewbuttontext="Quick View"
             data-quickviewbuttontitle="Quick View"
             data-isquickviewpopupdraggable="True"
             data-enablequickviewpopupoverlay="True"
             data-accordionpanelsheightstyle="content">
        </div>
        <div class="master-column-wrapper">
            <div class="center-1">

                <div class="page topic-page" id="ph-topic">
                    <div class="page-title" id="ph-title">
                        <h1>Magic</h1>
                    </div>
                    <div class="page-body">
                        <p>Magic Related contents.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>




    <div class="footer">
        <div class="footer-map-holder">
            <div class="title" onclick="displaymap();">
                <strong>Where To Buy</strong>
            </div>
            <div class="">


                <div class="map-wrapper" id="mymap" style="display: none;">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.5238462090742!2d-74.3196348845905!3d40.860376779316034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3074bd6876997%3A0x3cac1cf3e9939605!2s1275%20Bloomfield%20Ave%2C%20Fairfield%2C%20NJ%2007004%2C%20USA!5e0!3m2!1sen!2seg!4v1622022059300!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <script type="text/javascript">
                    $(window).load(function () {
                        var scrollBarrier = 200;
                        var windowObj = $(window);

                        if ($('body').outerHeight() < windowObj.outerHeight() + scrollBarrier) {
                            loadFooterMapScript();
                        }
                        else {
                            windowObj.on('scroll.venturefootermap', function () {
                                if ($(this).scrollTop() > scrollBarrier) {
                                    $(this).off('scroll.venturefootermap');
                                    loadFooterMapScript();
                                }
                            });
                        }
                    });

                    var footerMap;

                    function loadFooterMapScript() {
                        //This check is necessary because if the map script is duplicated (by store locator for example) there are errors in the log and problems with Google maps.
                        if (typeof google === 'object' && typeof google.maps === 'object') {
                            initializeFooterMap();
                        } else {
                            var script = document.createElement("script");
                            script.src = "https://maps.googleapis.com/maps/api/js?callback=initializeFooterMap";
                            var apiKey = "";

                            if (apiKey) {
                                script.src += "&key=" + apiKey;
                            }

                            document.body.appendChild(script);
                        }
                    }

                    function getVentureCustomMapStyles() {
                        var mapStyles = $('.footer-map').attr('data-mapstyles');
                        var mapStylesJson = '';

                        if (!mapStyles) {
                            return '';
                        }

                        try {
                            mapStylesJson = JSON.parse(mapStyles);
                        }
                        catch (e) {
                            console.log('Invalid custom map styles value!');
                        }

                        return mapStylesJson;
                    }

                    function initializeFooterMap() {
                        var mapWrapper = $('.footer-map');
                        mapWrapper.show();
                        var markerX = mapWrapper.attr('data-latitude');
                        var markerY = mapWrapper.attr('data-longitude');

                        var mapOptions = {
                            center: new google.maps.LatLng(markerX, markerY),
                            zoom: 15,
                            draggable: true,
                            scrollwheel: false,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            styles: getVentureCustomMapStyles()
                        };

                        footerMap = new google.maps.Map(mapWrapper[0], mapOptions);

                        var image = mapWrapper.attr('data-pathtoimages') + '/footer-map-marker-icon.png';

                        google.maps.event.addListenerOnce(footerMap, 'idle', function () {
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(markerX, markerY),
                                map: footerMap,
                                title: '',
                                icon: image,
                                draggable: false
                            });

                            marker.setMap(footerMap);

                            footerMap.setCenter(new google.maps.LatLng(markerX, markerY));

                            $(document).trigger('ventureMapLoaded');
                        });
                    }

                </script>
            </div>
        </div>
        <div class="footer-upper">
            <div class="footer-block find-us">
                <div class="title">
                    <strong>Find Us</strong>
                </div>
                <ul class="list footer-collapse">
                    <li class="address">
                        <span>1275 Bloomfield Ave , Fairfield , NJ 07004</span>
                    </li>

                    </li>
                    <li class="mobile-phone">
                        <span>+1 (973) 227-5926</span>
                    </li>
                    <li class="phone">
                        <span>+1 (973) 227-5926</span>
                    </li>
                </ul>
            </div>
            <div class="footer-block information">
                <div class="title">
                    <strong>Information</strong>
                </div>
                <ul class="list footer-collapse">
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\contactus.html">Contact us</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\shippingandreturns.html">Shipping &amp; returns</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\Privacynotice.html">Privacy notice</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\conditionofuse.html">Conditions of Use</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\aboutus.html">About Us</a></li>

                </ul>
            </div>
            <div class="footer-block my-account">
                <div class="title">
                    <strong>My Account</strong>
                </div>
                <ul class="list footer-collapse">
                    <li><a href="C:\Users\user7\Desktop\Themes\headergrey\orders.html">Orders</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\headergrey\addresses.html">Addresses</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\headergrey\submenu\recentvew.html">Recently viewed products</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\sitemap.html">Sitemap</a></li>
                    <li><a href="C:\Users\user7\Desktop\Themes\footer\applyforvendor.html">Apply for vendor account</a></li>
                </ul>
            </div>
            <div class="footer-block newsetter">
                <div class="title">
                    <strong>Newsletter</strong>
                </div>
                <div class="footer-collapse">
                    <p class="newsletter-subscribe-text">Subscribe and become part of the our community. Be the first to hear about our latest offers and discounts!</p>
                    <div class="newsletter">
                        <div class="title">
                            <strong>Newsletter</strong>
                        </div>
                        <div class="newsletter-subscribe" id="newsletter-subscribe-block">
                            <div class="newsletter-email">
                                <input id="newsletter-email" class="newsletter-subscribe-text" placeholder="Enter your email here..." type="email" name="NewsletterEmail" value="" />
                                <input type="button" value="Subscribe" id="newsletter-subscribe-button" class="button-1 newsletter-subscribe-button"/>
                            </div>
                            <div class="newsletter-validation">
                                <span id="subscribe-loading-progress" style="display: none;" class="please-wait">Wait...</span>
                                <span class="field-validation-valid" data-valmsg-for="NewsletterEmail" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="newsletter-result" id="newsletter-result-block"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">



            <ul class="social-sharing">
                <li><a target="_blank" class="twitter" href="https://twitter.com/"></a></li>
                <li><a target="_blank" class="facebook" href="https://www.facebook.com/"></a></li>
                <li><a target="_blank" class="youtube" href="https://www.youtube.com/user/"></a></li>
                <li><a target="_blank" class="rss" href="/news/rss/1"></a></li>
            </ul>
        </div>
        <div class="footer-lower">
            <div class="footer-disclaimer">
                Copyright &copy; 2021 Exco Parts. All rights reserved.
            </div>
            <div class="footer-powered-by" style="display:none;">
                Powered by <a href="http://www.nopcommerce.com/">nopCommerce</a>
            </div>


        </div>

    </div>

    <script lang="ja" type="text/javascript">

        $(document).ready(function () {
            $(".sublist-wrap > ul.rootlevel").append('<li><a href="/product/all" class="view-all">View All</a></li>');
        });
    </script>

</div>

<script type="text/javascript">function add_chatinline(){var hccid=97799330;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline(); </script>


<script src="{{asset("ecat.js")}}" type="text/javascript"></script>

<script type="text/javascript">
    function newsletter_subscribe(subscribe) {
        var subscribeProgress = $("#subscribe-loading-progress");
        subscribeProgress.show();
        var postData = {
            subscribe: subscribe,
            email: $("#newsletter-email").val()
        };
        $.ajax({
            cache: false,
            type: "POST",
            url: "/subscribenewsletter",
            data: postData,
            success: function(data) {
                subscribeProgress.hide();
                $("#newsletter-result-block").html(data.Result);
                if (data.Success) {
                    $('#newsletter-subscribe-block').hide();
                    $('#newsletter-result-block').show();
                } else {
                    $('#newsletter-result-block').fadeIn("slow").delay(2000).fadeOut("slow");
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert('Failed to subscribe.');
                subscribeProgress.hide();
            }
        });
    }

    $(document).ready(function () {
        $('#newsletter-subscribe-button').click(function () {
            newsletter_subscribe('true');            });
        $("#newsletter-email").keydown(function (event) {
            if (event.keyCode == 13) {
                $("#newsletter-subscribe-button").click();
                return false;
            }
        });
    });
</script>
<script type="text/javascript">
    (function () {
        AjaxCart.init(false, '.header-links .cart-qty', '.header-links .wishlist-qty', '#flyout-cart');
    })();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c-cart-buttons').on('mouseenter', '.ico-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.c-cart-buttons').on('mouseleave', '.ico-cart', function () {
            $('#flyout-cart').removeClass('active');
        });
        $('.header').on('mouseenter', '#flyout-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.header').on('mouseleave', '#flyout-cart', function () {
            $('#flyout-cart').removeClass('active');
        });

        //$('.header').on('mouseenter', '#flyout-cart', function () {
        //    $(this).addClass('active');
        //}).on('mouseleave', '#flyout-cart', function () {
        //    $(this).removeClass('active');
        //});
    });
</script>
<script type="text/javascript">
    $("#small-search-box-form").submit(function(event) {
        if ($("#small-searchterms").val() == "") {
            alert('Please enter some search keyword');
            $("#small-searchterms").focus();
            event.preventDefault();
        }
    });
</script>
<script id="instantSearchItemTemplate" type="text/x-kendo-template">
    <div class="instant-search-item" data-url="${ data.CustomProperties.Url }">
        <div class="img-block">
            <img src="${ data.DefaultPictureModel.ImageUrl }" alt="${ data.Name }" title="${ data.Name }" style="border: none">
        </div>
        <div class="detail">
            <div class="title">${ data.Name }</div>
            <div class="price"># var price = ""; if (data.ProductPrice.Price) { price = data.ProductPrice.Price } # #= price #</div>
        </div>
    </div>
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c-cart-buttons').on('mouseenter', '.ico-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.c-cart-buttons').on('mouseleave', '.ico-cart', function () {
            $('#flyout-cart').removeClass('active');
        });
        $('.header').on('mouseenter', '#flyout-cart', function () {
            $('#flyout-cart').addClass('active');
        });
        $('.header').on('mouseleave', '#flyout-cart', function () {
            $('#flyout-cart').removeClass('active');
        });

        //$('.header').on('mouseenter', '#flyout-cart', function () {
        //    $(this).addClass('active');
        //}).on('mouseleave', '#flyout-cart', function () {
        //    $(this).removeClass('active');
        //});
    });
</script>

<div class="scroll-back-button" id="goToTop"></div>
<script>
    function displaymap()
    {
        let mymap = document.getElementById("mymap");
        if(mymap.style.display == "none")
        {
            $("#mymap").slideDown("slow");


        }else{
            $("#mymap").slideUp("slow");


        }
    }
</script>
</body>
</html>
