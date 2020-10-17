
@extends('client.layout.layout')

@section('title','Blog')


@section('style')
@endsection


@section('content')

	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{asset('public/client/images/background/image-7.jpg')}});"></div>
		<div class="shape-1"></div>
		<div class="shape-2"></div>
		<div class="banner-inner">
			 <div class="auto-container">
				  <div class="inner-container clearfix">
						<h1>Blog Posts</h1>
						<div class="page-nav">
							 <ul class="bread-crumb clearfix">
							 		<li><a href="{{route('app.home')}}">Home</a></li>
								  	<li class="active">Blog Posts</li>
							 </ul>
						</div>
				  </div>
			 </div>
		</div>
  	</section>
	<!--End Banner Section -->

	<div class="sidebar-page-container">
		<div class="auto-container">
			 <div class="row clearfix">

				   <!--Content Side-->
				   <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-details">

                        <!--News Block-->
                        <div class="post-details">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="blog-single.html"><img src="{{asset('public/client/images/resource/news-7.jpg')}}" alt=""></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-meta">
                                        <ul class="clearfix">
                                            <li><span class="far fa-clock"></span> 20 Mar</li>
                                            <li><span class="far fa-user-circle"></span> Admin</li>
                                            <li><span class="far fa-comments"></span> 2 Comments</li>
                                        </ul>
                                    </div>
                                    <h4>basic rules of running web agency business</h4>
                                    <div class="text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                            generators on the Internet tend to repeat predefined chunks as
                                            necessary, making this the first true generator on the Internet. It uses
                                            a dictionary of over 200 Latin words, combined with a handful of model
                                            sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                            generated Lorem Ipsum is therefore always free from repetition, injected
                                            humour, or non-characteristic words etc.</p>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters, as opposed to using 'Content here, content here', making it
                                            look like readable English. Many desktop publishing packages and web
                                            page editors now use Lorem Ipsum as their default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their
                                            infancy. Various versions have evolved over the years, sometimes by
                                            accident, sometimes on purpose injected humour and the like.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-row clearfix">
                                <div class="tags-info"><strong>Tags:</strong> <a href="#">Business</a>, <a
                                        href="#">Agency</a>, <a href="#">Technology</a></div>
                                <div class="cat-info"><strong>Category:</strong> <a href="#">Business</a>, <a
                                        href="#">Agency</a></div>
                            </div>
                        </div>

                        <div class="post-control-two">
                            <div class="row clearfix">
                                <div class="control-col col-md-6 col-sm-12">
                                    <div class="control-inner">
                                        <h4><a href="#">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h4>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                                <div class="control-col col-md-6 col-sm-12">
                                    <div class="control-inner">
                                        <h4><a href="#">EXPERIENCES THAT CONNECT WITH PEOPLE</a></h4>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="comments-title">
                                <h3>2 Comments</h3>
                            </div>
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <figure class="thumb"><img src="{{asset('public/client/images/resource/author-7.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="info">
                                        <div class="name">Jessica Brown</div>
                                        <div class="date">20 May, 2020 . 4:00 pm</div>
                                    </div>
                                    <div class="text">Lorem Ipsum is simply dummy free text of the available
                                        printing and typesetting been the industry standard dummy text ever sincer
                                        condimentum purus.</div>
                                    <div class="reply-btn">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <figure class="thumb"><img src="{{asset('public/client/images/resource/author-8.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="info">
                                        <div class="name">David Martin</div>
                                        <div class="date">20 May, 2020 . 4:00 pm</div>
                                    </div>
                                    <div class="text">Lorem Ipsum is simply dummy free text of the available
                                        printing and typesetting been the industry standard dummy text ever sincer
                                        condimentum purus.</div>
                                    <div class="reply-btn">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!--Leave Comment Form-->
                            <div class="leave-comments">
                                <div class="comments-title">
                                    <h3>Leave a comment</h3>
                                </div>
                                <div class="default-form comment-form">
                                    <form method="post" action="contact.html">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Phone Number"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Subject" required="">
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Your Comments"></textarea>
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <button type="submit" class="theme-btn btn-style-one">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">Submit Comment</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
				   </div>

				  <!--Sidebar Side-->
				  <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar blog-sidebar">

							 <div class="sidebar-widget recent-posts">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Latest Posts</h4>
										</div>

										<div class="post">
											 <figure class="post-thumb"><img src="{{asset('public/client/images/resource/news-thumb-1.jpg')}}" alt="">
											 </figure>
											 <h5 class="text"><a href="#">EXPERIENCES THAT CONNECT WITH PEOPLE</a></h5>
										</div>

										<div class="post">
											 <figure class="post-thumb"><img src="{{asset('public/client/images/resource/news-thumb-2.jpg')}}" alt="">
											 </figure>
											 <h5 class="text"><a href="#">WE BUILD AND ACTIVATE BRANDS INSIGHT</a></h5>
										</div>

										<div class="post">
											 <figure class="post-thumb"><img src="{{asset('public/client/images/resource/news-thumb-3.jpg')}}" alt="">
											 </figure>
											 <h5 class="text"><a href="#">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h5>
										</div>

								  </div>
							 </div>

							 <div class="sidebar-widget archives">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Categories</h4>
										</div>
										<ul>
											 <li><a href="blog.html">Business (16)</a></li>
											 <li class="active"><a href="blog.html">Introductions (14)</a></li>
											 <li><a href="blog.html">One Page Template (33)</a></li>
											 <li><a href="blog.html">Parallax Effects (29)</a></li>
											 <li><a href="blog.html">New Technologies (8)</a></li>
											 <li><a href="blog.html">Video Backgrounds (6)</a></li>
										</ul>
								  </div>
							 </div>

							 <div class="sidebar-widget popular-tags">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Tags</h4>
										</div>
										<div class="tags-list clearfix">
											 <a href="#">Business</a>, <a href="#">Agency</a>, <a href="#">Technology</a>,<a
												  href="#">Parallax</a>, <a href="#">Innovative</a>, <a
												  href="#">Professional</a>,<a href="#">Experience</a>
										</div>
								  </div>
							 </div>

							 <div class="sidebar-widget recent-comments">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Comments</h4>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
											 </h5>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
											 </h5>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
										</div>

								  </div>
							 </div>


						</aside>
				  </div>

			 </div>
		</div>
  	</div>

	@include('client.partials.action')

@endsection


@section('modal')
@endsection


@section('javascript')


  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection
