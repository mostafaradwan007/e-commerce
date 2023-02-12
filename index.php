<?php
include "header.php" ;
?>
     <?php
                                        $sql = "SELECT * FROM products ";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc() ) {
                                          $image_name = $row['cover'];
                                            $img= explode(",",$image_name);
                                            ?>
                <!--  Modal -->
                <div class="modal fade" id="productView<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background:url('admin/imge/<?php echo $img[0];?>')" href="detail.php?id=<?php echo $row['id'] ?>"   title="<?php echo $row['name'] ?>"></a>     
              </div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4"><?php  echo $row['name'];  ?></h2>
                    <p class="text-muted">$<?php  echo $row['price'];  ?></p>
                    <p class="text-small mb-4"><?php  echo $row['decr'];  ?></p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="#">Add to cart</a></div>
                    </div ><i class="far fa-heart mr-2"></i>Add to wish list</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HERO SECTION-->
<?php
                                        }
                                        ?>
      <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/hero-banner-alt.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">New Inspiration 2020</p>
                <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark" href="shop.php?id=1&page=1&active=1">Browse collections</a>
              </div>
            </div>
          </div>
        </section>
    
        <!-- TRENDING PRODUCTS-->
        <section class="py-5">
          <header>
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
          </header>
          <div class="row">   
            
            <?php
                                        $sql = "SELECT * FROM products limit 4 ";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc() ) {
                                          $image_name = $row['cover'];
                                            $img= explode(",",$image_name);
                                            ?>
                                            <?php
$id =$row['id'];
                                            ?>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white badge-info"></div><a class="d-block" href="detail.php?id=<?php echo $row['id'];   ?>"><img class="img-fluid w-100" src="admin/imge/<?php
                   $img0 = explode(",",$row['cover']);
                   echo $img0[0];
                  ?>" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                    <input name="qunq" type="hidden" value="<?php echo $row['id'] ?>">
                      <li id="pop" class="list-inline-item m-0 p-0 pop"><a id="ss" class="btn btn-sm btn-outline-dark ss <?php
                      $sql0 = "SELECT * FROM `wishlist` where pro_id =$id";
                      $result0 = $conn->query($sql0);
                      $num0=$result0->num_rows;
                       if ($num0==1) {
                        echo "active";
                       }else{
                        echo "";
                       }
                          ?>" href="#"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0">  
                      <!-- <a class="btn btn-sm btn-dark" href="do_add_cart.php?id=">Add to cart</a> -->
                      <input name="qun" type="hidden" value="<?php echo $row['id'] ?>">
                      <input onclick="addTocart()"  class="btn btn-sm btn-dark add" value="Add to cart" type="submit">
                    </li>
                      <li class="list-inline-item mr-0"><a  class="btn btn-sm btn-outline-dark" href="#productView<?php echo $row['id'] ?>" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php?id=<?php echo $row['id'];?>"><?php  echo $row['name'];  ?></a></h6>
                <p class="small text-muted">$<?php  echo $row['price'];  ?></p>
                <div id ="demo"></div>
                <div id ="nemo"></div>
              </div>
            </div>
  
            <?php
             }
            ?>
        </section>
        
        <!-- SERVICES-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row text-center">
              <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="d-inline-block">
                  <div class="media align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#delivery-time-1"> </use>
                    </svg>
                    <div class="media-body text-left ml-3">
                      <h6 class="text-uppercase mb-1">Free shipping</h6>
                      <p class="text-small mb-0 text-muted">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="d-inline-block">
                  <div class="media align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#helpline-24h-1"> </use>
                    </svg>
                    <div class="media-body text-left ml-3">
                      <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                      <p class="text-small mb-0 text-muted">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="media align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#label-tag-1"> </use>
                    </svg>
                    <div class="media-body text-left ml-3">
                      <h6 class="text-uppercase mb-1">Festival offer</h6>
                      <p class="text-small mb-0 text-muted">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- NEWSLETTER-->
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <div class="col-lg-6 mb-3 mb-lg-0">
                <h5 class="text-uppercase">Let's be friends!</h5>
                <p class="text-small text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
              </div>
              <div class="col-lg-6">
                <form action="#">
                  <div class="input-group flex-column flex-sm-row mb-3">
                    <input class="form-control form-control-lg py-3" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#">Online Stores</a></li>
                <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">What We Do</a></li>
                <li><a class="footer-link" href="#">Available Services</a></li>
                <li><a class="footer-link" href="#">Latest Posts</a></li>
                <li><a class="footer-link" href="#">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#">Twitter</a></li>
                <li><a class="footer-link" href="#">Instagram</a></li>
                <li><a class="footer-link" href="#">Tumblr</a></li>
                <li><a class="footer-link" href="#">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-lg-6">
                <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
              </div>
              <div class="col-lg-6 text-lg-right">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/lightbox2/js/lightbox.min.js"></script>
      <script src="vendor/nouislider/nouislider.min.js"></script>
      <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
      <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
      <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
      <script src="js/front.js"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
    <script>
      $(".add").click(function(){
       
                     document.getElementById("demo").innerHTML = ("Added to cart");                    
                     $("#demo").show().delay(500).fadeOut();
                                       

 var id = parseInt($(this).prev().val());
  $.post("do_add_cart.php", 
  {
   id:id,
   count:1,
  },
  
  function(data, status){
    $('.num').text(data)
  });
})

$(".ss").click(function(){
  var test = document.getElementById("ss");
var testClass = this.className;
console.log(testClass);
if (testClass =="btn btn-sm btn-outline-dark ss active") {
  $(this).removeClass("active");
  document.getElementById("nemo").innerHTML = ("deleted from wish list");                    
       $("#nemo").show().delay(500).fadeOut();
      

var id = parseInt($(this).parent().prev().val());
console.log(id);
$.post("deletefrom_wishlist.php", 
{
id:id,
},

function(data, status){
$('.coun').text(data)

});
}else{
  $(this).addClass("active");
  document.getElementById("demo").innerHTML = ("Added to wish list");                    
       $("#demo").show().delay(500).fadeOut();
      

var id = parseInt($(this).parent().prev().val());
console.log(id);
$.post("addto_wishlist.php", 
{
id:id,
},

function(data, status){
$('.coun').text(data)

});
}

  
   
})

    </script>
  </body>
</html>