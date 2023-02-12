<?php
include "header.php";
?>
      </header>
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
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
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$00</p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Cart</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                    
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                      <th class="border-0" scope="col"> </th>
                    
                      <th class="border-0" scope="col"> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    




$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc() ) {
                    ?>
                    
                    <tr class ="tr">
                      <th class="pl-0 border-0" scope="row">
                        <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.php?id=<?php echo $row['pro_id'] ?>"><img src="admin/imge/<?php 
                        $pro_id =$row['pro_id'];
                        $sqlp = "SELECT * FROM products where id =$pro_id";
                        $resultp = $conn->query($sqlp);
                        $rowp = $resultp->fetch_assoc();
                        $image_name = $rowp['cover'];
                                            $image_name_array = explode(",",$image_name);
                                            echo $image_name_array[0];
                                            ?>" alt="..." width="70"/></a>
                          <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.php?id=<?php echo $row['pro_id'] ?>"><?php 
                           $pro_id =$row['pro_id'];
                           $sqlp = "SELECT * FROM products where id =$pro_id";
                           $resultp = $conn->query($sqlp);
                           $rowp = $resultp->fetch_assoc();
                           echo $rowp['name'];
                          ?></a></strong></div>
                        </div>
                      </th>
                      <td class="align-middle border-0">
                        <p class="mb-0 small"><?php $pro_id =$row['pro_id'];
                           $sqlp = "SELECT * FROM products where id =$pro_id";
                           $resultp = $conn->query($sqlp);
                           $rowp = $resultp->fetch_assoc();
                           
                           echo "$".$rowp['price']; ?></p>
                        
                      </td>
                      <td class="align-middle border-0">
                        <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                          
<!-- 55555555555555555555555555555555555555555555555555555555555555555555555555555555555555
5555555555555555555555555555555555555555555555555555555555555555555
55555555555555555 -->

                        <div class="quantity">
                            <button class="dec-btn p-0 sub "><i class="fas fa-caret-left"></i></button>
                            <input disabled name ="qun" class="form-control form-control-sm border-0 shadow-0 p-0 qty-input" type="text" value="<?php echo $row['count']  ?>"/>
                            <button class="inc-btn p-0 add"><i class="fas fa-caret-right"></i></button>
                            <input name="so" type="hidden" value="<?php echo $row['pro_id'] ?>">
                          </div>
                        </div>
                      </td>

                      <td class="align-middle border-0">
                        <p class="mb-0 small dell"><?php  
                        echo"$";
                        echo $row['price']*$row['count']
                        ?></p>
                      </td>
                     
                      <td class="align-middle border-0">
                        <form action="">
                        <input name="id" type="hidden" value="<?php echo $row['id'] ?>">
                        <input name="pro_id" type="hidden" value="<?php echo $row['pro_id'] ?>">
                          <input  class="btn btn-outline-danger btn-sm d" type="submit" value="delete from cart">
                       
                        </form>
                     
                    
                    </td>
                    
                    </tr>
                    <?php
}
                    ?>
                   
                  </tbody>
                  
                </table>
                
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="<?php echo"shop.php?id=1&page=1&active=1"?>"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>
                  <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="checkout.php">Procceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">

                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span class="subtotal"><?php
$price_total = 0;
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc() ) {
  $price_total  +=($row['price']*$row['count']);
}
echo "$";
echo $price_total;;


                    ?></span></li>
                    <li>
                      
                        <div class="form-group mb-0">
                          <input class="form-control" type="text" placeholder="Enter your coupon">
                          <button class="btn btn-dark btn-sm btn-block" type="submit"> <i class="fas fa-gift mr-2"></i>Apply coupon</button>
                        </div>
                      
                    </li>
                  </ul>
                </div>
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
      
      <script>
      
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <script src="admin/jquery.js"></script>
   <script>
     $('.inc-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
                console.log(value);
            }
        });

        $('.dec-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
                console.log(value);
            }
            // if(value==0){
            //     value--;
            //     $(this).parent().parent().parent().parent().hide();
            //     console.log(value);
            // }
        });
    
             $(".d").click(function(){
              var tot = parseInt($(this).parent().parent().prev().children().text().replace('$',''));
              var subtot =parseInt($(".subtotal").text().replace('$',''));
              var subtot2 =parseInt($(".subtotal").text((`$${subtot-tot}`)));
              console.log(tot);
  $(this).parent().parent().parent().hide();
});
$('form').submit(function(event){

//1 - stop default behavior
event.preventDefault();


// 2 - get form data
  
$.ajax({
      url:"delete_cart.php",
      method:"post",
      data : new FormData(this),
      success(data){
        
        $('.num').text(data)

          
         
      },
      processData:false,
      contentType:false,
  })
});
// $('form').submit(function(event){

// //1 - stop default behavior
// event.preventDefault();


// 2 - get form data
  
// $.ajax({
//       url:"edite_cart.php",
//       method:"post",
//       data : new FormData(this),
//       success(data){
        
//           let x=JSON.parse(data);

          
         
//       },
//       processData:false,
//       contentType:false,
//   })
// });





// $(".plus").click(function() {
// let count =  parseInt($('input[name="count"]').val())+1;
// console.log(count);
// $.ajax({
//       url:"edite_cart.php",
//       method:"post",
//       data : new FormData(this),
//       success(data){
        
//           let x=JSON.parse(data);

          
         
//       },
//       processData:false,
//       contentType:false,
//   })
// });

$(".add").click(function(){

  var count = parseInt($(this).prev().val());
  var price = parseInt($(this).parent().parent().parent().prev().children().text().replace('$',''));
  var total = parseInt($(this).parent().parent().parent().next().children().text(`$${count*price}`));
  var total2 = parseInt($(this).parent().parent().parent().next().children().text());
  var proid = parseInt($(this).next().val());
  var subtotal =parseInt($(".subtotal").text());
  var dell =parseInt($(".dell").text());
  
// var soso =dell.split(',');
  // var subtotal2 =parseInt($(".subtotal").text(((syo)+"$")));
  
      // var count = parseInt($('input[name="qun"]').val());
    // var count =parseInt($(".add").prev().val());
    // var price =parseInt($(".add").parent().parent().parent().prev().children().text());
    // var total =  parseInt($(".add").parent().parent().parent().next().children().text(count*price));
    // var subtotal1=parseInt($(".subtotal").text());
    // var subtotal=parseInt($(".subtotal").text((count*price)))
    
    console.log(proid);

    $.post("updatecart.php", 
  {
    count:count,
   price:price,
   proid:proid,
  },
  
  function(data, status){
    var subtotal =parseInt($(".subtotal").text(`$${data}`));
  });
// $.post("do_add_cart.php",{
//   count :parseInt($('input[name="qun"]').val()),
// }
// function(data) {
//   console.log(data);
// })
  });
   


  $(".sub").click(function(){
    // var count = parseInt($('input[name="qun"]').val());
    var count =parseInt($(this).next().val());
    var price =parseInt($(this).parent().parent().parent().prev().children().text().replace('$',''));
    var total =  parseInt($(this).parent().parent().parent().next().children().text(`$${count*price}`));
   var proid =parseInt($(this).next().next().next().val());
   var subtotal =parseInt($(".subtotal").text());
   
  
//  var subtotal2 =parseInt($(".subtotal").text((sp)+"$"));
    console.log(proid);
    $.post("updatecart.php", 
  {
    count:count,
   price:price,
   proid:proid,
  },
  function(data, status){
    var subtotal =parseInt($(".subtotal").text(`$${data}`));
  });






// $.post("do_add_cart.php",{
//   count :parseInt($('input[name="qun"]').val()),
// }
// function(data) {
//   console.log(data);
// })

    
  });





   </script>
    </div>
  </body>
</html>