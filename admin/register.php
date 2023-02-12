<?php
// include 'config.php';
// $loginURL = $google_client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="google-signin-client_id" content="916484568862-i0ahftlova3q4lhgemh3520pkrc9roet.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://apis.google.com/js/api:client.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>







</script>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="add_new_user.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="firstname" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                            <div style ="color:red;margin-left:30px;" id ="demo"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="lastname"name="name" type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                            <div style ="color:red;margin-left:30px;" id ="last"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                        <div style ="color:red;margin-left:30px;" id ="email"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                            <div style ="color:red;margin-left:30px;" id ="pass"></div>

                                    </div>
                                    <div class="col-sm-6">
                                        <input name="passwordrepeat" type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                            <div style ="color:red;margin-left:30px;" id ="repeat"></div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="  Register Account">
                                <!-- <a href="login.php" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                                <hr>
                                <a onclick="window.location ='<?php echo $loginURL  ?>'" id="google-login" href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
<script>
let firstname = document.querySelector("[name='firstname']");
let lastname = document.querySelector("[name='lastname']");
let email = document.querySelector("[name='email']");
let password = document.querySelector("[name='password']");
let repeatpassword = document.querySelector("[name='passwordrepeat']");
document.forms[0].onsubmit=function(e) {
let firstnameValid =false;
let lastnameValid =false;
let emailValid =false;
let passwordValid =false;
let repeatpasswordValid =false;
if (firstname.value !== "") {
    document.getElementById("exampleFirstName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='lastname']").focus();
    document.getElementById("demo").innerHTML = "  "
    if (firstname.value.length <= 10) {
        document.getElementById("exampleFirstName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='lastname']").focus();
    document.getElementById("demo").innerHTML = "  "
    if (firstname.value.length >= 3) {
        document.getElementById("exampleFirstName").style.borderColor = "#D9D9D6";
    document.querySelector("[name='lastname']").focus();
    document.getElementById("demo").innerHTML = "  "
    }else{
        document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demo").innerHTML = "min length 3 Letters"
    }
    }else{
        document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demo").innerHTML = "Max length 10 Letters"
    }
   
    if (/^[a-zA-Z\s]+$/.test(firstname.value)) {
        firstnameValid =true;
    }else{
    document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demo").innerHTML = "Type letters only"
    }
}else{
    document.getElementById("exampleFirstName").style.borderColor = "red";
    document.getElementById("demo").innerHTML = "can not be empty"
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
    document.querySelector("[name='password']").focus();
    document.getElementById("email").innerHTML = " ";
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
     emailValid =true;
    }else{
        document.getElementById("exampleInputEmail").style.borderColor = "red";
        document.getElementById("email").innerHTML = " Please Write Real Email"
    };
}else{
    document.getElementById("exampleInputEmail").style.borderColor = "red";
    document.getElementById("email").innerHTML = " can not be empty"
};
if (password.value  !== "" ) {
    document.getElementById("exampleInputPassword").style.borderColor = "#D9D9D6";
    document.querySelector("[name='passwordrepeat']").focus();
    document.getElementById("pass").innerHTML = "  ";
    if (password.value.length <= 20) {
        document.getElementById("exampleInputPassword").style.borderColor = "#D9D9D6";
    document.querySelector("[name='passwordrepeat']").focus();
    document.getElementById("pass").innerHTML = "  ";
    if (password.value.length >= 5) {
        document.getElementById("exampleInputPassword").style.borderColor = "#D9D9D6";
    document.querySelector("[name='passwordrepeat']").focus();
    document.getElementById("pass").innerHTML = "  ";
    passwordValid=true;
    }else{
        document.getElementById("exampleInputPassword").style.borderColor = "red";
    document.getElementById("pass").innerHTML = " Min Length 5 Character"
    }
    }else{
        document.getElementById("exampleInputPassword").style.borderColor = "red";
    document.getElementById("pass").innerHTML = " Max Length 20 Character"
    }
}else{
    document.getElementById("exampleInputEmail").style.borderColor = "red";
        document.getElementById("pass").innerHTML = " can not be empty"
};
 
if(repeatpassword.value !== "") {
    document.getElementById("exampleRepeatPassword").style.borderColor = "#D9D9D6";
    document.getElementById("repeat").innerHTML = "  ";
    if (repeatpassword.value==password.value) {
        repeatpasswordValid=true;
    }else{
        document.getElementById("exampleRepeatPassword").style.borderColor = "red";
    document.getElementById("repeat").innerHTML = "please Repeat Password"
    } 
}else{
    document.getElementById("exampleRepeatPassword").style.borderColor = "red";
    document.getElementById("repeat").innerHTML = "  can not be empty"
};
if (firstnameValid === false || lastnameValid ===false || emailValid ===false || passwordValid === false || repeatpasswordValid === false) {
    e.preventDefault();
}
}

</script>
<script>startApp();</script>
<!-- <script>startApp();</script> -->
</html>










<!-- 
<script>
        
        var googleUser = {};
        var startApp = function() {
          gapi.load('auth2', function(){
            // Retrieve the singleton for the GoogleAuth library and set up the client.
            auth2 = gapi.auth2.init({
              client_id: '819006018310-0pbpvcr7ut3lue6aa0bpth82ur715bnj.apps.googleusercontent.com',
              cookiepolicy: 'single_host_origin',
              // Request scopes in addition to 'profile' and 'email'
              //scope: 'additional_scope'
            });
            attachSignin(document.getElementById('google-login'));
          });
        };
  
      function attachSignin(element) {
          console.log(element.id);
          auth2.attachClickHandler(element, {},
              function(googleUser) {
  
                var id = googleUser.getBasicProfile().getId();
  
  
                 
  
              }, function(error) {
  
                alert(JSON.stringify(error, undefined, 2));
  
              });
      }
  
        </script> -->