<?php
include "header.php";

?>
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
                    <p class="text-muted">$250</p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
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
                <h1 class="h2 text-uppercase mb-0">Checkout</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="cart.html">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="addtocheckout.php" method="post">
                <div class="row">
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="firstName">First name</label>
                    <input name="firstname" class="form-control form-control-lg" id="exampleFirstName" type="text" placeholder="Enter your first name">
                  <div id="demoo" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="lastName">Last name</label>
                    <input name="lastname" class="form-control form-control-lg" id="exampleLastName" type="text" placeholder="Enter your last name">
                    <div id="last" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="email">Email address</label>
                    <input name="email" class="form-control form-control-lg" id="exampleInputEmail" type="email" placeholder="e.g. Jason@example.com">
                    <div id="emaill" style="color:red;margin-left:10px;"></div>                 
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="phone">Phone number</label>
                    <input name="phone" class="form-control form-control-lg" id="exampleInputphone" type="tel" placeholder="e.g. +02 245354745">
                    <div id="phone" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="company">Company name (optional)</label>
                    <input name="company" class="form-control form-control-lg" id="examplecompany" type="text" placeholder="Your company name">
                  <div id="company" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-6 form-group" >
                    <label class="text-small text-uppercase" for="country">Country</label>
                    <select id="examplecountryy"  name="country" class="selectpicker country"  data-width="fit" data-style="form-control form-control-lg" data-title="Select your country"></select>
                  <div id="country" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" for="address">Address line 1</label>
                    <input name="address" class="form-control form-control-lg" id="exampleaddress" type="text" placeholder="House number and street name">
                    <div id="address" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" for="address">Address line 2</label>
                    <input name="address2" class="form-control form-control-lg" id="exampleaddress2" type="text" placeholder="Apartment, Suite, Unit, etc (optional)">
                    <div id="address2" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="city">Town/City</label>
                    <input name="city" class="form-control form-control-lg" id="examplecity" type="text">
                    <div id="city" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="state">State/County</label>
                    <input name="city2" class="form-control form-control-lg" id="examplecity2" type="text">
                    <div id="city2" style="color:red;margin-left:10px;"></div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Place order</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <ul class="list-unstyled mb-0">
                    <?php
                  $sql = "SELECT * FROM cart";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc() ) {
                    ?>
                    <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">
                    <?php 
                           $pro_id =$row['pro_id'];
                           $sqlp = "SELECT * FROM products where id =$pro_id";
                           $resultp = $conn->query($sqlp);
                           $rowp = $resultp->fetch_assoc();
                           echo $rowp['name'];
                          ?>  (<?php echo $row['count'];?>)

                    </strong><span class="text-muted small">$<?php  
                        
                        echo $row['price']*$row['count']
                        ?></span></li>
                   <li class="border-bottom my-2"></li>


                  <?php
}
                  ?>
                                      <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span>$<?php
$price_total = 0;
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc() ) {
  $price_total  +=($row['price']*$row['count']);
}

echo $price_total;;


                    ?></span></li>
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
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>

    <script>
let firstname = document.querySelector("[name='firstname']");
let lastname = document.querySelector("[name='lastname']");
let email = document.querySelector("[name='email']");
let phone = document.querySelector("[name='phone']");
let company = document.querySelector("[name='company']");
let country = document.querySelector("[name='country']");
let address = document.querySelector("[name='address']");
let address2  = document.querySelector("[name='address2']");
let city = document.querySelector("[name='city']");
let city2 = document.querySelector("[name='city2']");

document.forms[0].onsubmit=function(e) {

let firstnameValid =false;
let lastnameValid =false;
let emailValid =false;
let phoneValid =false;
let companyValid =false;
let countryValid =false;
let addressValid =false;
let addresstValid =false;
let cityValid =false;
let citytValid =false;
if (firstname.value !== "") {
    document.getElementById("exampleFirstName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='lastname']").focus();
    document.getElementById("demoo").innerHTML = "  ";
    if (firstname.value.length <= 10) {
        document.getElementById("exampleFirstName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='lastname']").focus();
    document.getElementById("demoo").innerHTML = "  ";
    if (firstname.value.length >= 3) {
        document.getElementById("exampleFirstName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='lastname']").focus();
    document.getElementById("demoo").innerHTML = "  ";
    }else{
        document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demoo").innerHTML = "min length 3 Letters";
    };
    }else{
        document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demoo").innerHTML = "Max length 10 Letters";
    };
   
    if (/^[a-zA-Z\s]+$/.test(firstname.value)) {
        firstnameValid =true;
    }else{
    document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demoo").innerHTML = "Type letters only";
    };
}else{
    document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demoo").innerHTML = "can not be empty";
};

if (lastname.value !== "") {
    document.getElementById("exampleLastName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='email']").focus();
    document.getElementById("last").innerHTML = "  ";
    if (lastname.value.length >= 3) {
    document.getElementById("exampleLastName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='email']").focus();
    document.getElementById("last").innerHTML = "  "
    if (lastname.value.length <= 10) {
    document.getElementById("exampleLastName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='email']").focus();
    document.getElementById("last").innerHTML = "  "
    }else{
    document.getElementById("exampleLastName").style.borderColor = "red";
    document.getElementById("last").innerHTML = "Max length 10 letters"
    }
    }else{
    document.getElementById("exampleLastName").style.borderColor = "red";
    document.getElementById("last").innerHTML = "min length 3 letters"
    }
    if (/^[a-zA-Z\s]+$/.test(lastname.value)) {
        lastnameValid =true;
    }else{
    document.getElementById("exampleLastName").style.borderColor = "red";
    document.getElementById("last").innerHTML = "Type letters only"
    }
}else{
    document.getElementById("exampleLastName").style.borderColor = "red";
    document.getElementById("last").innerHTML = "can not be empty"
}

if (email.value !== "" ) {
    document.getElementById("exampleInputEmail").style.borderColor = "#D9D9D6";
    document.getElementById("emaill").innerHTML = " ";
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
      document.querySelector("[name='phone']").focus();
     emailValid =true;
    }else{
        document.getElementById("exampleInputEmail").style.borderColor = "red";
        document.getElementById("emaill").innerHTML = " Please Write Real Email"
    };
}else{
    document.getElementById("exampleInputEmail").style.borderColor = "red";
    document.getElementById("emaill").innerHTML = " can not be empty"
};
if (phone.value !== "" ) {
    document.getElementById("exampleInputphone").style.borderColor = "#D9D9D6";
    document.getElementById("phone").innerHTML = " ";
    if (/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/.test(phone.value)) {
     phoneValid =true;
    }else{
        document.getElementById("exampleInputphone").style.borderColor = "red";
        document.getElementById("phone").innerHTML = " Please Write Real phone"
    };
}else{
    document.getElementById("exampleInputphone").style.borderColor = "red";
    document.getElementById("phone").innerHTML = " can not be empty"
};


if (company.value !== "") {
    document.getElementById("examplecompany").style.borderColor = "#D9D9D6";
    document.querySelector("[name='email']").focus();
    document.getElementById("company").innerHTML = "  ";
    if (company.value.length >= 2) {
    document.getElementById("examplecompany").style.borderColor = "#D9D9D6";
    document.querySelector("[name='email']").focus();
    document.getElementById("company").innerHTML = "  "
    if (company.value.length <= 40) {
    document.getElementById("examplecompany").style.borderColor = "#D9D9D6";
    document.querySelector("[name='email']").focus();
    document.getElementById("company").innerHTML = "  "
    }else{
    document.getElementById("examplecompany").style.borderColor = "red";
    document.getElementById("company").innerHTML = "Max length 40 letters"
    }
    }else{
    document.getElementById("examplecompany").style.borderColor = "red";
    document.getElementById("company").innerHTML = "min length 2 letters"
    }
    if (/^[a-zA-Z\s]+$/.test(company.value)) {
        companyValid =true;
    }else{
    document.getElementById("examplecompany").style.borderColor = "red";
    document.getElementById("company").innerHTML = "Type letters only"
    }
}else{
    document.getElementById("examplecompany").style.borderColor = "red";
    document.getElementById("company").innerHTML = "can not be empty"
}

if (country.value !== "") {
    document.getElementById("examplecountryy").style.borderColor = "#D9D9D6";
    document.querySelector("[name='address']").focus();
    document.getElementById("country").innerHTML = "  ";
    countryValid =true;
}else{
    document.getElementById("examplecountryy").style.borderColor = "red";
    document.getElementById("country").innerHTML = "can not be empty"
}
if (address.value !== "") {
    document.getElementById("exampleaddress").style.borderColor = "#D9D9D6";
    document.querySelector("[name='address2']").focus();
    document.getElementById("address").innerHTML = "  ";
    addressValid =true;
}else{
    document.getElementById("exampleaddress").style.borderColor = "red";
    document.getElementById("address").innerHTML = "can not be empty"
}

if (address2.value !== "") {
    document.getElementById("exampleaddress2").style.borderColor = "#D9D9D6";
    document.querySelector("[name='city']").focus();
    document.getElementById("address2").innerHTML = "  ";
    addresstValid =true;
}else{
    document.getElementById("exampleaddress2").style.borderColor = "red";
    document.getElementById("address2").innerHTML = "can not be empty"
}
if (city.value !== "") {
    document.getElementById("examplecity").style.borderColor = "#D9D9D6";
    document.querySelector("[name='city2']").focus();
    document.getElementById("city").innerHTML = "  ";
    cityValid =true;
}else{
    document.getElementById("examplecity").style.borderColor = "red";
    document.getElementById("city").innerHTML = "can not be empty"
}
if (city2.value !== "") {
    document.getElementById("examplecity2").style.borderColor = "#D9D9D6";
    document.getElementById("city2").innerHTML = "  ";
    citytValid =true;
}else{
    document.getElementById("examplecity2").style.borderColor = "red";
    document.getElementById("city2").innerHTML = "can not be empty"
}


if (firstnameValid === false || lastnameValid ===false || emailValid ===false || phoneValid === false || companyValid === false || countryValid === false || addressValid === false || addresstValid === false || cityValid === false || citytValid === false)
{
    e.preventDefault();
}
};




</script>
  </body>
</html>