
										<div class="posty">
											<div class="post-bar no-margin">
												<div class="post_topbar">
													<div class="usy-dt">
													<img src="<?php echo base_url('assets/images/upload/profile/'.$postbyid->user_ava)?>" alt="" height="50px" >
													<div class="usy-name">
														<h3><?php echo $postbyid->nama_lengkap; ?><?php echo $postbyid->user_id; ?></h3>
														<span><img src="<?php echo base_url('assets/images/clock.png') ?>" alt="">3 min ago</span>
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
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior Wordpress Developer</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul>
													<p><?php echo $postbyid->post_sentence; ?> <a href="#" title="">view more</a></p>
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
														<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
													</ul>
													<a href="#"><i class="fas fa-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="comment-section">
												<a href="#" class="plus-ic">
													<i class="la la-plus"></i>
												</a>
										<?php foreach ( $commentars as $commentar ) : ?>		
												<div class="comment-sec">
											
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img1.png" alt="">
																</div>		
												
												
 			
																<div class="comment">						
																<div class="usy-dt">
																<img src="<?= base_url('assets/images/upload/profile/') . $commentar['user_ava_post']; ?>"
																 alt="" height="50px" >
																<div class="usy-name">
																<h3><?= $commentar['nama_lengkap_post']; ?></h3>
																<span><img src="<?php echo base_url('assets/images/clock.png') ?>" alt="">3 min ago</span>
																</div>
																</div>
																<span><img src="images/clock.png" alt=""> 3 min ago</span>
																<p><?= $commentar['komentar_post_sentence']; ?></p>
																<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															
															</div><!--comment-list end-->
														
														</li>
														
													</ul>
										
												</div><!--comment-sec end-->
											<?php endforeach ?>
												<div class="post-comment">
													<div class="cm_img">
														<img src="images/resources/bg-img4.png" alt="">
													</div>
													<div class="comment_box">
														<!-- <form class="cmnt_reply_form" action="" method="post">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="komentar_post" placeholder="Post a comment">
                                            <?= form_error('komentar_post', '<span class="text-danger">', '</span>') ?>
                                            <?php if ( $this->session->userdata('email') ) : ?>
                                        <button type="submit" class="btn btn--round btn--default" name="btn">Komentar</button>
                                        <?php else: ?>
                                        <a href="<?= base_url('authentication'); ?>" class="btn btn--round btn--default">Harap Login</a>
                                        <?php endif; ?>
                                        </div>

                                        
                                    </div>
                                </form> -->
													<form action="" method="POST">
															<input type="text" name="komentar_post" placeholder="Post a comment">
                                            <?= form_error('komentar_post', '<span class="text-danger">', '</span>') ?>
                                            <?php if ( $this->session->userdata('email') ) : ?>
														
															<button type="submit">Send</button>
															<?php else: ?>
                                        <a href="<?= base_url('authentication'); ?>" class="btn btn--round btn--default">Harap Login</a>
                                        <?php endif; ?>
														</form> 
													</div>
												</div><!--post-comment end-->
											</div><!--comment-section end-->

										</div><!--posty end-->
									
								