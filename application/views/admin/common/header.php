<!DOCTYPE html>
<html lang="en">
<head>

<title>ERP 1.0</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="ERP 1.0">
<meta name="author" content="#">

<link rel="icon" href="<?php echo base_url();?>assets/images/template/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/icon/feather/css/feather.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/pages/notification/notification.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/animate.css/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/jquery.steps/css/jquery.steps.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/bower_components/sweetalert/css/sweetalert.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">



<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/css/component.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ImageSelect.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Admin/adminity/files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui.css">
<script>base_url = '<?= base_url(); ?>';</script>
<script>
    globalLang = <?php echo json_encode($this->lang->language); ?>;
</script>

</head>

<body>
<!-- overlay spinner start -->
<div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
<!-- overlay spinner end -->

<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>

<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="/">
						<svg xmlns="http://www.w3.org/2000/svg" id="Calque_1" x="0" y="0" version="1.1" viewBox="0 0 150 30" style="vertical-align:middle;height:30px" xml:space="preserve">
						<defs/>
						<style>
							.st0{fill:#fff}
						</style>
						<path d="M9.1 12.5c0-2.2 2.4-4.1 5.1-4.1 2.6 0 5.3 1.2 5.4 4.4h-3.4c-.1-1-1.1-1.4-1.9-1.4-.9 0-1.8.3-1.8 1.4 0 .6.7 1 1.5 1.2l2.3.6c3.2.8 3.6 3.1 3.6 4.2 0 2.8-2.8 4.3-5.7 4.3-2.7 0-5.5-1.7-5.6-4.7H12c.1 1 1.2 1.8 2.5 1.8 1 0 1.8-.6 1.8-1.4 0-.7-.5-1.1-1.5-1.3l-1.8-.7c-3.6-1-3.9-2.6-3.9-4.3zM24.4 22.6h-3.6V5.2H23c.8 0 1.4.6 1.4 1.4v4.3c.7-1.7 2.9-2.4 4.3-2.4 3.6 0 5.6 2.4 5.6 6.4v7.7h-3.6v-7.5c0-2-1.4-3.1-2.9-3.1s-3.3.8-3.3 3.2l-.1 7.4zM39.4 22.6h-3.6V8.7h3.6v13.9zM44.7 10.6c.7-1.4 2.5-2.2 4.3-2.2 3.6 0 6.8 2.9 6.8 7.2 0 4.4-3.2 7.2-6.8 7.2-1.8 0-3.6-.7-4.3-2.1V25c0 .8-.6 1.4-1.4 1.4h-2.2V8.7h3.6v1.9zm3.8 8.9c2 0 3.7-1.5 3.7-3.7 0-2.3-1.7-3.8-3.6-3.8-2 0-3.7 1.5-3.7 3.8-.1 2.3 1.7 3.7 3.6 3.7zM60.3 10.7c.7-1.4 2.5-2.2 4.3-2.2 3.6 0 6.8 2.9 6.8 7.2 0 4.4-3.2 7.2-6.8 7.2-1.8 0-3.6-.7-4.3-2.1v4.3c0 .8-.6 1.4-1.4 1.4h-2.2V8.8h3.6v1.9zm3.7 8.8c2 0 3.7-1.5 3.7-3.7 0-2.3-1.7-3.8-3.6-3.8-2 0-3.7 1.5-3.7 3.8 0 2.4 1.7 3.7 3.6 3.7zM72.3 5.2h3.6v17.4h-3.6V5.2z" class="st0"/>
						<circle cx="37.6" cy="3.8" r="2.5" class="st0"/>
						<g>
							<path d="M82.2 18.1c-.4-.6-.6-1.2-.6-1.9 0-.5.1-1 .4-1.5.2-.4.6-.8 1-1.1.8-.6 1.9-.8 2.9-.5 1 .3 1.7 1.1 2 2 .1.3.1.6.1.8l3.1-4c-.9-1.5-2.3-2.6-4-3.1-2.4-.7-4.8-.3-6.8 1.1-.9.7-1.7 1.6-2.2 2.6-.5 1.1-.8 2.2-.8 3.4 0 1.6.5 3.2 1.5 4.5l1.7 2.2c.6.7 1.7.7 2.3 0l1.5-1.9-2.1-2.6z" class="st0"/>
							<path fill="#fe7235" d="M93.2 12.9l-.3-.9-4 5.2c0 .1-1.5 1.8-1.5 1.9l-2.6 3.3-.3.4c-1.4 1.8-1.4 4.2 0 6l.3.3 7.3-9.3c1.4-2 1.8-4.5 1.1-6.9z"/>
						</g>
						<g>
							<path d="M102.2 9.2h8.4l-.5 2.2H104l-.8 3.6h5.5l-.5 2.1h-5.5l-.8 3.6h6.1l-.4 2.2h-8.4l3-13.7zM117.4 17.4l-1.2 5.5h-2.3l2.9-13.7h4.6c2.5 0 3.9 1.5 3.9 3.5 0 2.3-1.5 4-3.6 4.5l2.2 5.7h-2.5l-2-5.5h-2zm5.6-4.5c0-1-.6-1.7-2-1.7h-2.3l-.9 4.2h2.3c1.8 0 2.9-1 2.9-2.5zM141 12.8c0 2.9-2.2 4.7-5.2 4.7h-2.7l-1.1 5.4h-2.3l2.9-13.7h4.4c2.4 0 4 1.5 4 3.6zm-7.4 2.6h2.2c1.6 0 2.8-.8 2.8-2.5 0-1.1-.7-1.8-2.1-1.8h-2l-.9 4.3z" class="st0"/>
						</g>
						</svg>
					</a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                         
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                    switch ($this->config->config['language']) {
                                        case 'english':
                                            echo '<img src="'.base_url().'assets/images/flags/United-Kingdom.png" class="img-radius" alt="User-Profile-Image" style="width: 28px;">';
                                            break;
                                        case 'french':
                                            echo '<img src="'.base_url().'assets/images/flags/France.png" class="img-radius" alt="User-Profile-Image" style="width: 28px;">';
                                            break;
                                        case 'arabic':
                                            echo '<img src="'.base_url().'assets/images/flags/Morocco.png" class="img-radius" alt="User-Profile-Image" style="width: 28px;">';
                                            break;
                                        default:
                                        	echo '<img src="'.base_url().'assets/images/flags/France.png" class="img-radius" alt="User-Profile-Image" style="width: 28px;">';
                                    }
                                ?>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu p-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
									<form action="<?= base_url() ?>langswitch/switchLanguage" method="post">
										<input type="hidden" name="lang" value="en" />
										<input type="hidden" name="user_id" value="<?= $currentUser->id; ?>" />
										<input type="submit" class="d-none" id="submit-en" />
										<li class="border-0">
											<label for="submit-en" style="margin: 0;">
												<div class="media align-items-center">
													<img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/flags/United-Kingdom.png" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="notification-user"><?= __('english'); ?></h5>
													</div>
												</div>
											</label>
										</li>
									</form>
									<form action="<?= base_url() ?>langswitch/switchLanguage" method="post">
										<input type="hidden" name="lang" value="fr" />
										<input type="hidden" name="user_id" value="<?= $currentUser->id; ?>" />
										<input type="submit" class="d-none" id="submit-fr" />
										<li>
											<label for="submit-fr" style="margin: 0;">
												<div class="media align-items-center">
													<img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/flags/France.png" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="notification-user"><?= __('french'); ?></h5>
													</div>
												</div>
											</label>
										</li>
									</form>
									<form action="<?= base_url() ?>langswitch/switchLanguage" method="post">
										<input type="hidden" name="lang" value="ar" />
										<input type="hidden" name="user_id" value="<?= $currentUser->id; ?>" />
										<input type="submit" class="d-none" id="submit-ar" />
										<li>
											<label for="submit-ar" style="margin: 0;">
												<div class="media align-items-center">
													<img class="d-flex align-self-center img-radius" src="<?php echo base_url();?>assets/images/flags/Morocco.png" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="notification-user"><?= __('arabic'); ?></h5>
													</div>
												</div>
											</label>
										</li>
									</form>
                                </ul>
                            </div>
                        </li>
						<li class="header-notification">
							<div class="dropdown-primary dropdown">
								<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-bell"></i>
									<span id="notifications-count" class="badge bg-c-red">0</span>
								</div>
							</div>
						</li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= $currentUser->profile_picture ? $currentUser->profile_picture : 'https://erp.goprot.com/assets/images/clients/no_image.jpg'; ?>" class="img-radius header-user-avatar" alt="User-Profile-Image">
                                    <span><?= $currentUser->first_name . ' ' . $currentUser->last_name ?></span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="/users/view/<?= $currentUser->id; ?>">
                                            <i class="feather icon-user"></i><?= __('profile'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Auth/logout">
                                            <i class="feather icon-log-out"></i><?= __('logout'); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		<div id="sidebar" class="users p-chat-user showChat" style="display: none;">
			<div class="had-container">
				<div class="card card_main p-fixed notifications-main">
					<div class="notifications-box">
						<input type="hidden" id="user_id" value="<?= $currentUser->id; ?>">
						<div class="notifications-inner-header p-0" style="border: none;"></div>
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 991px;">
							<div id="notifications-container" style="overflow: auto; width: auto; height: 991px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
