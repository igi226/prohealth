<!doctype html>
<html lang="en-GB">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="{{ asset('User/images/favicon.png') }}">
      <title>Admin-Login-Healthhoodlum</title>
      <link rel='stylesheet' id='bootstrap-css' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?ver=5.1.3' type='text/css' media='all' />
       
    <style>
        #login__container {
            background-color: #000000 !important;
            box-shadow: 0 5px 20px 0 rgb(31 48 84 / 50%);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: auto;
            max-width: 35rem;
            min-width: 0;
            min-height: 30rem;
            padding: 40px 80px 50px;
            position: relative;
            width: 100%;
            z-index: 2;
        }

#login__container--form label {
    color: #ffffff !important;
    font-size: 1em;
}

#login__container--links a {
    color: #9d9d9d !important;
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    width: 100%;
}

#login__container--form .button {
    background-color: #ffffff !important;
    border: 0;
    color: #000 !important;
    margin-top: 20px;
    padding: 10px 30px !important;
    transition: all ease .3s;
}

#login__container--form .button:hover {
    background-color: #f26805 !important;
    color: #fff;
}
    </style>

    </head>
   <body class="page-template page-template-page-templates page-template-page-login page-template-page-templatespage-login-php page page-id-91 theme-focusinfo everest-forms-no-js woocommerce-no-js tribe-no-js tribe-theme-focusinfo">
      
    <div id="page" class="site">
       
         <div id="content" class="site-content">

            <div id="login" class="row g-0 align-items-center">
               <div class="col-12">
                  <div id="login__container">
                    <div id="login__container--logo">
                        <img src="{{ asset('User/images/logo.png') }}">
                    </div>
                    @if(Session::has('msg'))
                       <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                     <form  id="login__container--form" action="{{ route('admin.getPaswordMail') }}" method="post">
                        @csrf
                        <p class="login-username">
                           <label for="user_login">Enter Email Address</label>
                           <input name="email" type="text" name="log" id="user_login" autocomplete="username"
                              class="input" value="" size="20" required />
                              @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </p>
                        
                        <p class="login-submit">
                           <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary"
                              value="Send Mail" />
                        </p>
                     </form>
                     <div id="login__container--links">
                        <a href="{{ route('admin.login') }}">← Back to Admin Login</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- #content -->
      </div>
      <!-- #page -->
      <link rel='stylesheet' id='focus-custom-login-css'
         href='https://www.focus-info.org/wp-content/themes/focusinfo/assets/login/login.css?ver=6.1.1' type='text/css'
         media='all' />

         <script>
            function password_show_hide() {
              var x = document.getElementById("user_pass");
              var show_eye = document.getElementById("show_eye");
              var hide_eye = document.getElementById("hide_eye");
              hide_eye.classList.remove("d-none");
              if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
              } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
              }
            }
            </script>
   </body>
</html>