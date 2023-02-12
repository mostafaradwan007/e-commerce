<?php
include "header.php";

?>
<div id ="demo"></div>
                <div id ="nemo"></div>
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
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Fashion &amp; Acc</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                 <?php
                     $sql = "SELECT*FROM category";
                     $result=$conn->query($sql);
                     while ($row = $result->fetch_assoc()) {
                     
                    


                ?>

                  <li class="mb-2"><a class="reset-anchor" href="?page=1&id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                  <?php
 }
                  ?>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Health &amp; Beauty</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="#">Shavers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">bags</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Cosmetic</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Nail Art</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Skin Masks &amp; Peels</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Korean cosmetics</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">USB Flash drives</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Headphones</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Portable speakers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Cell Phone bluetooth headsets</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#">Keyboards</a></li>
                </ul>
                <h6 class="text-uppercase mb-4">Price range</h6>
                <div class="price-range pt-4 mb-5">
                  <div id="range"></div>
                  <div class="row pt-2">
                    <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
                    <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
                  </div>
                </div>
                <h6 class="text-uppercase mb-3">Show only</h6>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck1" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck2" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck3" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck4" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                  <input class="custom-control-input" id="customCheck5" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
                </div>
                <div class="custom-control custom-checkbox mb-4">
                  <input class="custom-control-input" id="customCheck6" type="checkbox">
                  <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
                </div>
                <h6 class="text-uppercase mb-3">Buying format</h6>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio3">Auction</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                  <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
                </div>
              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-search"></i></a></li>
                      <li class="list-inline-item">
                        <input type="text" placeholder="Search">
                        <!-- <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                          <option value="default">Default sorting</option>
                          <option value="popularity">Popularity</option>
                          <option value="low-high">Price: Low to High</option>
                          <option value="high-low">Price: High to Low</option>
                        </select> -->
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <!-- PRODUCT-->
                  <?php
                  $page = $_GET['page'];
                  $n   = ($page-1) * 3 ;
                ?>
                  <?php
                  $id=$_GET['id'];
  $sql = "SELECT*FROM products where cat=$id limit 3 OFFSET $n";
$result=$conn->query($sql);
while ($row = $result->fetch_assoc()) {

                    


                ?>
                <?php
                $idw= $row['id'];
                ?>
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.php?id=<?php echo $row['id']   ?>"><img class="img-fluid w-100" src="admin/imge/<?php
$img0 = explode(",",$row['cover']);
    echo $img0[0];?>" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                          <input name="qun" type="hidden" value="<?php echo $row['id'] ?>">
                          <li id="pop" class="list-inline-item m-0 p-0 pop"><a id="ss" class="btn btn-sm btn-outline-dark ss <?php
                      $sql0 = "SELECT * FROM `wishlist` where pro_id =$idw";
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
                      <input  class="btn btn-sm btn-dark add" value="Add to cart" type="submit">
                    </li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView<?php echo $row['id'] ?>" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.php?id=<?php echo $row['id']   ?>"><?php echo $row['name']   ?></a></h6>
                      <p class="small text-muted">$<?php echo $row['price']   ?></p>
                    </div>
                  </div>
          <?php
                }
?>
                
                <!-- PAGINATION-->
              
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <?php
if ($_GET['page']==1) {
  echo "";
}else {
?>
<li class="page-item"><a class="page-link" href="
                    ?id=<?php echo $id ?>&page=<?php
                    $next = $_GET['page'];
                    if($next>1){
                    echo $next-1;
                    }else{
                    echo 1;
                    }
                    
                    
                    ?>
                    
                    " aria-label="Previous"><span aria-hidden="true">«</span></a></li>
<?php
}

?>
                    
                    <?php
                    $id=$_GET['id'];
                    for ($i=1; $i <5 ; $i++) { 
                      ?>
                      <li class="page-item <?php if ( $_GET['page']==$i ) {
                        echo "active";
                      }  ?> "><a class="page-link" href="<?php echo "?id=$id&page=$i"  ?>"><?php echo $i  ?></a></li>
                      <?php
                    }
                    ?>
                    
          
              <?php
if ($_GET['page']==4) {
  echo "";
}else {
?>
                    <li class="page-item "><a class="page-link" href="?id=<?php echo $id ?>&page=<?php
                    $next = $_GET['page'];
                    echo $next+1;
                    
                    ?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    <?php
}

?>
                  </ul>
                </nav>
                
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
        <div id ="demo"></div>
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
      <!-- Nouislider Config-->
      <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });
        
      </script>
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
      //  var num= parseInt($(".num").text());
       
      //  $(".num").text(num+1);
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