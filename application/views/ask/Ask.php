

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>munaqasha</title>
	<link rel="icon" href="<?php echo base_url('assets/images/munaqasha-logo.png') ?>" type="image/gif" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.cs') ?>s">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/line-awesome.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/line-awesome-font-awesome.min.css') ?>">
	<link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/slick/slick.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/slick/slick-theme.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css') ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
</head>


<body oncontextmenu="return false;">
<div class="modal" id="mymodal">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-light text-center">Apply a Job</h3>
                </div>
                <div class="modal-body">
                    <div class="innerbody apply-jobbox">
                        <h3>Attach File With CV</h3>
                        <form>
                            <input type="text" placeholder="Full Name"><br>
                            <input type="email" placeholder="Email Address">
                        </form>
                        <div class="select-files">
                            <input type="file" class="custom-file-input">
                            <p>Upload your cv / resume file. Max file size : 3MB</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="place-bid-btn">Apply a Job</button>
                    <button>Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							
							<li>
								<a href="<?php echo site_url('beranda/Beranda') ?>" title="">
									<span><img src="<?php echo base_url('assets/images/icon1.png') ?>" alt=""></span>
									Beranda
								</a>
							</li>
						
							
							<li>
								<a href="<?php echo site_url('profile/profile') ?>" title="">
									<span><img src="<?php echo base_url('assets/images/icon4.png') ?>" alt=""></span>
									Profiles
								</a>
								
							</li>
							<li>
								<a href="jobs.html" title="">
									<span><img src="<?php echo base_url('assets/images/icon5.png') ?>" alt=""></span>
									Jobs
								</a>
							</li>
							<li>
								<a href="#" title="" class="not-box-openm">
									<span><img src="<?php echo base_url('assets/images/icon6.png') ?>" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg" id="message">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url('assets/images/resources/ny-img1.png') ?>" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url('assets/images/resources/ny-img2.png') ?>" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url('assets/images/resources/ny-img3.png') ?>" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="messages.html" title="">View All Messsages</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="<?php echo base_url('assets/images/icon7.png') ?>" alt=""></span>
									Notification
								</a>
								<div class="notification-box noti" id="notification">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url('assets/images/resources/ny-img1.png') ?>" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="<?php echo base_url('assets/images/resources/ny-img2.png') ?>" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="#" title="">View All Notification</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
							
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<?php if($datauser->user_ava != "") { ?>
										<img src="<?php echo base_url('assets/images/upload/profile/'.$datauser->user_ava)?>" alt="Gambar Profile" height="40px">
									<?php } else { ?>
										<img src="<?php echo base_url('assets/images/resources/userdefault.png')?>" alt="Gambar Profile" height="40px">
							<?php } ?>
						</div>
						<div class="user-account-settingss" id="users">
							<h3>Online Status</h3>
							<ul class="on-off-status">
								<?php if($datauser->olof != "0") { ?>
								<li>
									<div class="fgt-sec">
										<img src="<?php echo base_url('assets/images/resources/online.jpg') ?>" height="12px">
										<label for="c5">
											<span></span>
										</label>
										<small>Online</small>
									</div>
								</li>
									<?php } else { ?>
								<li>
									<div class="fgt-sec">
										<img src="<?php echo base_url('assets/images/resources/offline.png') ?>" height="12px">
										<label for="c6">
											<span></span>
										</label>
										<small>Offline</small>
									</div>
								</li>
								<?php } ?>
							</ul>
							<h3>Custom Status</h3>
							<div class="search_form">
								<form>
									<input type="text" name="search">
									<button type="submit">Ok</button>
								</form>
							</div><!--search_form end-->
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="<?php echo site_url('profile/Account_Seting') ?>" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="<?php echo site_url('Auth/logout') ?>" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->
        <!--header end-->
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-12">
                                <div class="bids-detail">
                                    <div class="row">
                                        <div class="col-12 appliedjob">
                                            <ul>
                                                <li>
                                                    <h3>Applicants</h3>
                                                    <br>
                                                    <p>10</p>
                                                </li>
                                                <li>
                                                    <h3>Job Type</h3>
                                                    <br>
                                                    <p>Full Time</p>
                                                </li>
                                                <li>
                                                    <h3>Salary</h3>
                                                    <br>
                                                    <p>$600 - Mannual</p>
                                                </li>
                                                <li>
                                                    <h3>Views</h3>
                                                    <br>
                                                    <p>195</p>
                                                </li>
                                            </ul>
                                            <div class="bids-time">
                                               <h3>Posted : 5 Days Ago</h3>
                                                    <br>
                                                    <p>Open</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-ws-sec">
                                    <div class="posts-section">
                                    	<?php echo $contents; ?>
                                    </div>
                                    <!--posts-section end-->
                                </div>
                                <!--main-ws-sec end-->
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <div class="right-sidebar">
                                    <div class="widget widget-about bid-place">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal" data-whatever="@mdo">Apply a Job Now</button>
                                    </div>
                                    <!--widget-about end-->
                                    <div class="widget widget-projectid">
                                        <h3>Project ID : 123456789</h3>
                                        <p>Report Job</p>
                                    </div>
                                    <!--widget-about end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>About the Client</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="sd-title paymethd">
                                            <h4>Payment Method</h4>                                          
                                            <p>Verified</p>
                                            <ul class="star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                                <li>
                                                    <a>5.00 of 5 Reviews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sd-title">
                                            <h4>India</h4>                                            
                                            <p>SKS Nagar, Ludhiana 1 AM</p>
                                        </div>
                                        <div class="sd-title">
                                            <h4>20 Projects Posted | 15 Jobs Posted</h4>                                            
                                            <p>85% Hire Rate, 15% Open Jobs</p>
                                        </div>
                                        <div class="sd-title">
                                            <h4>Member Since</h4>                                            
                                            <p>August 24, 2017</p>
                                        </div>
                                    </div>
                                    <!--widget-jobs end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Project Link</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="sd-title copylink">
                                            <P>Http://www.workwise.com/pro...</P>
                                            <span><a href="#">Copy Link</a></span>
                                        </div>
                                    </div>
                                    <!--widget-jobs end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Share</h3>
                                        </div>
                                        <div class="sd-title copylink">
                                            <ul>
                                                <li>
                                                    <img src="images/social3.png" alt="image"> </li>
                                                <li>
                                                    <img src="images/social4.png" alt="image"></li>
                                                <li>
                                                    <img src="images/social1.png" alt="image"></li>
                                                <li>
                                                    <img src="images/social5.png" alt="image"></li>
                                                <li>
                                                    <img src="images/social2.png" alt="image"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--widget-jobs end-->
                                </div>
                                <!--right-sidebar end-->
                            </div>
                        </div>
                        <!-- freelancerbiding -->
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footy-sec mn no-margin">
                <div class="container">
                    <ul>
                        <li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
                    </ul>
                    <p><img src="images/copy-icon2.png" alt="">Copyright 2019</p>
                    <img class="fl-rgt" src="images/logo2.png" alt="">
                </div>
            </div>
        </footer>
        <!--footer end-->
        <div class="post-popup pst-pj">
            <div class="post-project">
                <h3>Post a project</h3>
                <div class="post-project-fields">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="title" placeholder="Title">
                            </div>
                            <div class="col-lg-12">
                                <div class="inp-field">
                                    <select>
                                        <option>Category</option>
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                        <option>Category 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="skills" placeholder="Skills">
                            </div>
                            <div class="col-lg-12">
                                <div class="price-sec">
                                    <div class="price-br">
                                        <input type="text" name="price1" placeholder="Price">
                                        <i class="la la-dollar"></i>
                                    </div>
                                    <span>To</span>
                                    <div class="price-br">
                                        <input type="text" name="price1" placeholder="Price">
                                        <i class="la la-dollar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <ul>
                                    <li><button class="active" type="submit" value="post">Post</button></li>
                                    <li><a href="#" title="">Cancel</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <!--post-project-fields end-->
                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div>
            <!--post-project end-->
        </div>
        <!--post-project-popup end-->
        <div class="post-popup job_post">
            <div class="post-project">
                <h3>Post a job</h3>
                <div class="post-project-fields">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="title" placeholder="Title">
                            </div>
                            <div class="col-lg-12">
                                <div class="inp-field">
                                    <select>
                                        <option>Category</option>
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                        <option>Category 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="skills" placeholder="Skills">
                            </div>
                            <div class="col-lg-6">
                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inp-field">
                                    <select>
                                        <option>Full Time</option>
                                        <option>Half time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <ul>
                                    <li><button class="active" type="submit" value="post">Post</button></li>
                                    <li><a href="#" title="">Cancel</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <!--post-project-fields end-->
                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div>
            <!--post-project end-->
        </div>
        <!--post-project-popup end-->
    </div>
    <!--theme-layout end-->



<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/popper.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/lib/slick/slick.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="https://kit.fontawesome.com/949a216ecb.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <!--  <script type="text/javascript">
      setInterval(function(){auto_refresh_function();}, 1000);
      
        function auto_refresh_function() {
          $('#load_content').load('http://localhost/munaqasha/beranda/Beranda/LoadPost');
           // $('#LoadUserLive').load('http://localhost/simpontren/welcome/LoadUserActive');
        }
        
        
</script> -->
</body>
</html>