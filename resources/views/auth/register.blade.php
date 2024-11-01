<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework | DEMO</title>
    <meta name="description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework | DEMO">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{ asset('assets') }}/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets') }}/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/media/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets') }}/css/oneui.min-5.9.css">
</head>

<body>
    <div id="page-container">
        <main id="main-container">
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="block block-rounded mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Create Account</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option fs-sm" href="javascript:void(0)"
                                            data-bs-toggle="modal" data-bs-target="#one-signup-terms">View Terms</a>
                                        <a class="btn-block-option" href="op_auth_signin.html" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Sign In">
                                            <i class="fa fa-sign-in-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                                        <h1 class="h2 mb-1">OneUI</h1>
                                        <p class="fw-medium text-muted">
                                            Please fill the following details to create a new account.
                                        </p>
                                        <form class="js-validation-signup" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="py-3">
                                                <div class="mb-4">
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-alt"
                                                        id="name" name="name"
                                                        placeholder="Name" required>
                                                </div>
                                                <div class="mb-4">
                                                    <input type="email"
                                                        class="form-control form-control-lg form-control-alt"
                                                        id="email" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="mb-4">
                                                    <input type="password"
                                                        class="form-control form-control-lg form-control-alt"
                                                        id="password" name="password"
                                                        placeholder="Password" required>
                                                </div>
                                                <div class="mb-4">
                                                    <input type="password"
                                                        class="form-control form-control-lg form-control-alt"
                                                        id="password_confirmation" name="password_confirmation"
                                                        placeholder="Confirm Password" required>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="signup-terms" name="signup-terms" required>
                                                        <label class="form-check-label" for="signup-terms">I agree to
                                                            Terms &amp; Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-6 col-xl-5">
                                                    <button type="submit" class="btn w-100 btn-alt-success">
                                                        <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fs-sm text-muted text-center">
                        <strong>OneUI 5.9</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
                <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog"
                    aria-labelledby="one-signup-terms" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                        <div class="modal-content">
                            <div class="block block-rounded block-transparent mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Terms &amp; Conditions</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                        est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin
                                        odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus
                                        mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                        est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin
                                        odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus
                                        mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                        est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin
                                        odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus
                                        mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                        est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin
                                        odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus
                                        mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                        est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin
                                        odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus
                                        mi.</p>
                                </div>
                                <div class="block-content block-content-full text-end bg-body">
                                    <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">I
                                        Agree</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('assets') }}/js/oneui.app.min-5.9.js"></script>
    <script src="{{ asset('assets') }}/js/lib/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/op_auth_signup.min.js"></script>
</body>

</html>
