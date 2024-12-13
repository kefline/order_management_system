<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TanAir|Signin </title>
    <link rel="stylesheet" href="/assets/css/ebazar.style.min.css">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">

        <div class="main p-2 py-3 p-xl-5 ">
            
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                                </div>
                                <div class="mb-5">
                                    <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                                </div>
                                <div class="">
                                    <img src="/assets/images/login-img.svg" alt="login-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Corrected form method to POST -->
                                <form class="row g-1 p-3 p-md-4" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="col-12 text-center mb-5">
                                        <h1>Sign in</h1>
                                        <span>Free access to our dashboard.</span>
                                    </div>
                        
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control form-control-lg" placeholder="name@example.com" name="email" required>
                                        </div>
                                    </div>
                        
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <input type="password" class="form-control form-control-lg" placeholder="***************" name="password" required>
                                        </div>
                                    </div>
                        
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                        
                                    <div class="col-12 text-center mt-4">
                                        <!-- Changed <a> to <button> to submit the form -->
                                        <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase">SIGN IN</button>
                                    </div>
                        
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

        </div>

    </div>

    <script src="../assets/bundles/libscripts.bundle.js"></script>
</body>

</html>