<?php foreach ($post as $pos) : ?>
									<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="<?php echo base_url('assets/images/upload/profile/'.$pos->user_ava)?>" alt="" height="50px" >
													<div class="usy-name">
														<h3><?php echo $pos->nama_lengkap; ?></h3>
														<span><img src="<?php echo base_url('assets/images/clock.png') ?>" alt=""><?php echo $pos->post_datetime; ?></span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><a href="#" title="">Edit Post</a></li>
														<li><a href="#" title="">Unsaved</a></li>
														<li><a href="#" title="">Unbid</a></li>
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
											
											<div class="job_descp">
												
											
												<br>
												<p><?php echo $pos->post_sentence; ?> <a href="<?php echo site_url('post/post/read/'.$pos->post_id) ?>" title="">view more</a></p>
												<ul class="skill-tags">
													<li><a href="#" title="">HTML</a></li>
													<li><a href="#" title="">PHP</a></li>
													<li><a href="#" title="">CSS</a></li>
													<li><a href="#" title="">Javascript</a></li>
													<li><a href="#" title="">Wordpress</a></li> 	
												</ul>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="#"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li> 
													<li><a href="" class="com"><i class="fas fa-comment-alt"></i>jumlah</a></li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->
										<?php endforeach ?>