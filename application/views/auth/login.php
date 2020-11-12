<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ERP 1.0</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#" />
        <meta name="keywords" content="ERP 1.0" />
        <meta name="author" content="#" />

        <link rel="icon" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/images/favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/bootstrap/css/bootstrap.min.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/icon/themify-icons/themify-icons.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/icon/icofont/css/icofont.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/css/style.css" />
    </head>
    <body class="fix-menu">
        <div class="theme-loader">
            <div class="ball-scale">
                <div class="contain">
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                    <div class="ring"><div class="frame"></div></div>
                </div>
            </div>
        </div>

        <section class="login-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="md-float-material form-material" action="./login" method="POST">
                            <div class="text-center">
                                <img src="<?php echo base_url();?>assets/images/template/shipplo-ERP-logo.svg" style="width: 30%;" alt="logo.png" />
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="identity" class="form-control" required="" placeholder="Your Email Address" />
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="" placeholder="Password" />
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="" name="remember" />
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/jquery/js/jquery.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/popper.js/js/popper.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/modernizr/js/modernizr.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/modernizr/js/css-scrollbars.js"></script>

        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/i18next/js/i18next.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript" src="<?php echo base_url();?>assets/Admin/adminity/files/assets/js/common-pages.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="b8f3e3e3d7117cf29c90f68a-text/javascript"></script>
        <script type="b8f3e3e3d7117cf29c90f68a-text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="b8f3e3e3d7117cf29c90f68a-|49" defer=""></script>
    </body>
</html>
