<html lang="zxx">

<head>
    <title>Report Login Form Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

</head>
<section class="w3l-hotair-form">
    
        <div class="container">
            <!-- /form -->
            <div class="row">
<div class="col-lg-12 col-md-12">
           
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                    <form method="POST" action="{{ route('login.custom') }}" >
                        @csrf

                        <div class="row mb-12">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="right-w3l">
                        <button class="btn" type="submit">Log In</button>
					</div>

                   
                    </form>
                    <p class="account">Don't have an account? <a href="register">Register</a></p>
                    @if (Session::has('success'))
                                    <div class="" style="padding:2%;" >
                                        <script>
                                            alert("Success");
                                            </script>
                                        <p>{!! \Session::get('success') !!}</p>
                                    </div>
                                @endif
                   
                </div>
                <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
            </div>
            <!-- //form -->
        </div>
</div>
            </div>
          
        <div class="copyright text-center">
            <p class="copy-footer-29">Design by Keerthi </p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>
