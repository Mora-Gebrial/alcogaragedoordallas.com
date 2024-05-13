<?php
// Do not modify anything yet
$loca = dirname(__FILE__);
include($loca.'/admin/route.php');
$blog = new BlogData();

// with a slash at the end
$blog->my['siteurl'] = 'https://www.alcogaragedoordallas.com/';
$blog->my['blogtitle'] = 'Blog - Alco garage door Dallas TX ';
$blog->my['blogdescription'] = 'Blog - Our experienced technicians can provide quick and effective Garage Door repairs with only a phone call.';

// Checker
$blog->checkall();
$blog->sitemap();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<base href="https://www.alcogaragedoordallas.com/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php
// in head instead of ( Title, description, keywords, canonical )
$blog->head(); ?>

    <meta name="revisit-after" content="1 month"/>
    <meta name="distribution" content="Global"/>
    <meta name="rating" content="Safe For Kids"/>
    <meta name="robots" content="index,all"/>
    <meta name="copyright" content="Alco garage door Dallas TX "/>
    <meta name="classification" content="Garage Door"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.webp">
  
    <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
    <meta property="og:title" content="Blog - Alco garage door Dallas TX " />
    <meta property="og:description" content="Blog - Our experienced technicians can provide quick and effective Garage Door repairs with only a phone call." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.alcogaragedoordallas.com/" />
    <meta property="og:image" content="https://www.alcogaragedoordallas.com/images/favicon.webp" />
    <meta property="og:site_name" content="Alco garage door Dallas TX ">

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Alco garage door Dallas TX ",
        "image": "https://alcogaragedoordallas.com/images/logo.webp",
        "url": "https://alcogaragedoordallas.com/",
        "telephone": "972-421-8251",
        "email": "service@alcogaragedoordallas.com",
        "description": "Alco Garage Door Dallas TX offers installation, repair, maintenance, opener service and customization with expert technicians to guarantee ideal alignment.",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "6700 Interstate 635 Service Rd  ",
          "addressLocality": "Dallas",
          "addressRegion": "TX",
          "postalCode": "75240",
          "addressCountry": "USA"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "reviewCount": "335",
          "bestRating": "5",
          "worstRating": "3"
        },
        "priceRange": "$"
      }
    </script>

   <!-- End Meta -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Merriweather:wght@700&family=Oswald:wght@600&family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@500&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style media="screen">
/*Blog*/
.blogbox{text-align:justify;padding:20px;background-color:#FFF;box-sizing:border-box;clear:both;overflow:hidden;margin-bottom:15px;box-shadow:3px 3px 7px rgba(0,0,0,0.2)}
.blogbox .blogimg img {float: right; width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.blogbox .read-more a{background-color:#ccc;color:#2D2D2D;padding:10px;border-radius:5px;border:1px solid #2D2D2D}
.blogbox .read-more a:hover {background-color:#2D2D2D;color:#FFF;letter-spacing: 2px;padding:10px 15px}
.blogpost {text-align: justify;padding:20px;background-color: #FFF;box-sizing: border-box}
.blogpost h1, .blogbox h1 {margin:0;font-size:28px;color:#222;}
.blogpost h2, .blogbox h2 {margin:0;font-size:24px;color:#222;}
.blogpost .blog_wrapper img {float: right; max-width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.socialbox{overflow:hidden;position:relative;text-align:center;width:100%;}
.social-share-btns{display:inline-block;overflow:hidden}
.social-share-btns .share-btn{float:left;margin:0 5px;padding:8px 16px;border-radius:3px;color:#fff;font-size:14px;line-height:18px;vertical-align:middle;transition:background .2s ease-in-out;display:flex;align-items:center;}
.social-share-btns .share-btn svg {fill:currentColor;height:1rem;width:1rem;margin-right:10px;}
.share-btn{background-color:#95a5a6}
.share-btn:hover{background-color:#798d8f}
.share-btn-twitter{background-color:#00aced}
.share-btn-twitter:hover{background-color:#0087ba}
.share-btn-facebook{background-color:#3b5998}
.share-btn-facebook:hover{background-color:#2d4373}
.share-btn-linkedin{background-color:#007bb6}
.share-btn-linkedin:hover{background-color:#005983}
@media only screen and (max-width:700px){
.blogbox .blogimg img{max-width:90%;width:auto}
}
</style>
</head>

<body>
    <!-- start header -->
    <header>
      <div class="container">
        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://alcogaragedoordallas.com/"
              ><img
                src="images/logo.webp"
                alt="logo"
                title="Alco garage door Dallas TX "
                class="logo"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span
                class="navbar-toggler-icon"
                style="background-image: url(../images/bars.webp);"
              ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="https://alcogaragedoordallas.com/"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >Home</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="opener.html"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >Opener</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="install.html"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >installation</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="repair.html"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >repair</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="spring.html"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >Spring</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="blog/"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >Blog</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="contact-us.html"
                    style="
                      color: white;
                      font-size: 18px;
                      margin-right: 10px;
                      text-transform: uppercase;
                    "
                    >contact
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- end nav -->

        <div class="row">
          <div class="col-xl-6">
            <div class="header-txt">
              <h1>Alco garage door Dallas TX</h1>

              <p>
                Garage doors are essential for residential and commercial
                properties, giving security, convenience and aesthetic appeal.
                Services include installation, repair, maintenance, opener
                services and customization with our expert technicians to
                guarantee ideal alignment and fit.
              </p>

              <a href=""><button>972-421-8251</button></a>
            </div>
          </div>


        </div>
      </div>
    </header>
    <!-- end header -->



    <div class="container">
  <div class="row"><div class="col-12">
  <?php
// in content box
$blog->content(); ?>
  </div>
</div>
</div>





    <!-- footer -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img src="images/logo.webp" alt="logo" class="logo" title="Alco garage door Dallas TX" />
          </div>
          <div class="col-lg-4 zipcodes text-center">
            <h2>Zip Codes</h2>
            <a href="#" class="btn info-btn mb-1 btn-sm">75001</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75019</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75032</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75043</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75051</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75052</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75061</a>
            <a href="#" class="btn info-btn mb-1 btn-sm">75063</a>

            <h2>social links</h2>
            <div class="social">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-blogger-b"></i>
              <i class="fa-brands fa-google"></i>
              <i class="fa-brands fa-twitter"></i>
            </div>
          </div>
          <div class="col-lg-4 location  text-center">
            <h2>Service locations</h2>
            <a href="#" class="btn info-btn m-1 btn-sm">Hurst</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Colleyville</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Euless</a>
            <a href="#" class="btn info-btn m-1 btn-sm">North Richland Hills</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Richland Hills</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Southlake</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Watauga </a>
            <a href="#" class="btn info-btn m-1 btn-sm">Grapevine</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Arlington</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Keller</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Haltom City</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Coppell</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Grand Prairie</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Irving</a>
            <a href="#" class="btn info-btn m-1 btn-sm">Flower Mound</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer -->
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h4>Alco garage door Dallas TX </h4>
              <p>You can reach us fastest by calling: <br>
                (713) 489-5104
                  </p>
                  <p>222 E Ponce de Leon Ave, Decatur, GA 30030</p>
                  <p><span>Working Hours</span> <br> 
                    Mon - Fri 8:00 AM - 7:00 PM 
                     <br>
                     Sat - Sun 9:00 AM - 5:00 PM
                      </p>
                      <p>24 hours Mobile Service</p>
                      <span id="obfuscatedEmail" style="color: white; background-color: transparent; " class="link">Please enable JavaScript to view the email address</span>
          </div>
  
          <div class="col-lg-6">
              <h4>Service Locations</h4>
              <p>
                  <span>Stafford</span>
                  <span>Missouri City</span>
                  <span>Pecan Grove</span>
                  <span>   Mission Bend</span>
                  <span> Richland Hills</span>
                  <span> Richmond</span>
                  <span> Rosenberg</span>
                  <span> Bellaire</span>
                  <span>West University Place</span>
                  <span>   Katy</span>
                  <span> Houston</span>
                  <span>   Pearland</span>
                  <span>  South Houston</span>
                  <span>  Galena Park</span>
                  <span>  Pasadena</span>
                  <span>  Alvin</span>
              </p>
              <h4>Zip Codes</h4>
              <p>
                  <span>77469</span>
                  <span>30030</span>
                  <span>77479</span>
                  <span>77487</span>
                  <span>77496</span>
                  <span>77498</span>

              </p>
              
          </div>
      
      </div>
      <p>© All rights reserved. www.alcogaragedoordallas.com</p>
  </div>
     
          



    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- live chat -->
    <script id=af367f62fd3aaeb7765a213daaecd73b src="//webserviceexpress.com/script.php?id=af367f62fd3aaeb7765a213daaecd73b" defer></script>

</body>
</html>