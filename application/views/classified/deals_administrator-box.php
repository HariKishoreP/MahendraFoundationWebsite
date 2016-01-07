	<title>365 Deals :: Deals Administrator</title>
	<style>
		.section-title-01{
			height: 273px;
			background-color: #262626;
			text-align: center;
			position: relative;
			width: 100%;
			overflow: hidden;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".remove1").click(function(){
				$("#div1").remove();
			});
		});
	</script>
	
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
	<!-- use jssor.slider.debug.js instead for debug -->
	<script>
		jssor_1_slider_init = function() {
			
			var jssor_1_SlideshowTransitions = [
			  {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
			  {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
			  {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
			  {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
			  {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
			  {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
			  {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
			  {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
			  {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
			  {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
			  {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
			  {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
			  {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
			  {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
			];
			
			var jssor_1_options = {
			  $AutoPlay: true,
			  $SlideshowOptions: {
				$Class: $JssorSlideshowRunner$,
				$Transitions: jssor_1_SlideshowTransitions,
				$TransitionsOrder: 1
			  },
			  $ArrowNavigatorOptions: {
				$Class: $JssorArrowNavigator$
			  },
			  $ThumbnailNavigatorOptions: {
				$Class: $JssorThumbnailNavigator$,
				$Rows: 2,
				$Cols: 6,
				$SpacingX: 14,
				$SpacingY: 12,
				$Orientation: 2,
				$Align: 156
			  }
			};
			
			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
			
			//responsive code begin
			//you can remove responsive code if you don't want the slider scales while window resizing
			function ScaleSlider() {
				var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
				if (refSize) {
					refSize = Math.min(refSize, 242);
					refSize = Math.max(refSize, 238);
					jssor_1_slider.$ScaleWidth(refSize);
				}
				else {
					window.setTimeout(ScaleSlider, 30);
				}
			}
			ScaleSlider();
			$Jssor$.$AddEvent(window, "load", ScaleSlider);
			$Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
			$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
			//responsive code end
		};
	</script>

	<style>
		
		/* jssor slider arrow navigator skin 05 css */
		/*
		.jssora05l                  (normal)
		.jssora05r                  (normal)
		.jssora05l:hover            (normal mouseover)
		.jssora05r:hover            (normal mouseover)
		.jssora05l.jssora05ldn      (mousedown)
		.jssora05r.jssora05rdn      (mousedown)
		*/
		.jssora05l, .jssora05r {
			display: block;
			position: absolute;
			/* size of arrow element */
			width: 40px;
			height: 40px;
			cursor: pointer;
			background: url('img/a17.png') no-repeat;
			overflow: hidden;
		}
		.jssora05l { background-position: -10px -40px; }
		.jssora05r { background-position: -70px -40px; }
		.jssora05l:hover { background-position: -130px -40px; }
		.jssora05r:hover { background-position: -190px -40px; }
		.jssora05l.jssora05ldn { background-position: -250px -40px; }
		.jssora05r.jssora05rdn { background-position: -310px -40px; }

		/* jssor slider thumbnail navigator skin 01 css */
		/*
		.jssort01-99-66 .p            (normal)
		.jssort01-99-66 .p:hover      (normal mouseover)
		.jssort01-99-66 .p.pav        (active)
		.jssort01-99-66 .p.pdn        (mousedown)
		*/
		.jssort01-99-66 .p {
			position: absolute;
			top: 0;
			left: 0;
			width: 99px;
			height: 66px;
		}
		
		.jssort01-99-66 .t {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}
		
		.jssort01-99-66 .w {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
		}
		
		.jssort01-99-66 .c {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 95px;
			height: 62px;
			border: #000 2px solid;
			box-sizing: content-box;
			background: url('img/t01.png') -800px -800px no-repeat;
			_background: none;
		}
		
		.jssort01-99-66 .pav .c {
			top: 2px;
			_top: 0px;
			left: 2px;
			_left: 0px;
			width: 95px;
			height: 62px;
			border: #000 0px solid;
			_border: #fff 2px solid;
			background-position: 50% 50%;
		}
		
		.jssort01-99-66 .p:hover .c {
			top: 0px;
			left: 0px;
			width: 97px;
			height: 64px;
			border: #fff 1px solid;
			background-position: 50% 50%;
		}
		
		.jssort01-99-66 .p.pdn .c {
			background-position: 50% 50%;
			width: 95px;
			height: 62px;
			border: #000 2px solid;
		}
		
		* html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {
			/* ie quirks mode adjust */
			width /**/: 99px;
			height /**/: 66px;
		}
		
	</style>
	
	<link rel="stylesheet" href="j-folder/css/demo.css">
	<link rel="stylesheet" href="j-folder/css/font-awesome.min.css">
	<link rel="stylesheet" href="j-folder/css/j-forms.css">
	
	<!-- Section Title-->    
	<div class="section-title-01">
		<!-- Parallax Background -->
		<div class="bg_parallax image_01_parallax"></div>
	</div>   
	<!-- End Section Title-->
	
	<!--Content Central -->
	<section class="content-central">
		<!-- Shadow Semiboxed -->
		<div class="semiboxshadow text-center">
			<img src="img/img-theme/shp.png" class="img-responsive" alt="">
		</div>
		
		<div class="content_info">
			<div class="paddings">
				<div class="container">
					<div class="row">
						<!-- Item Table-->
						<div class="col-sm-4">
							<div class="item-table">
								<div class="header-table color-red">
									 <img src="img/icons/people.png">
									<h2>User Name</h2>
									<!--<span>$ 99 / per month</span> -->
								</div>
								<ul class="dashboard_tag">
									<li><img src="img/icons/admin.png"><a href='deals_administrator'>Deals Administrator</a></li>
									<li><img src="img/icons/conversation.png"><a href='converse'>Converse</a></li>
									<li><img src="img/icons/pickup.png"><a href='pickup_deals'>Pickup deals</a></li>
									<li><img src="img/icons/seaked.png"><a href='seeked_searches'>Seeked Searches</a></li>
									<li><img src="img/icons/updateprofile.png"> <a href='update_profile'>Update Profile</a></li>
								</ul>
								<a class="btn color-red" href="<?php echo base_url(); ?>login/logout">Logout</a>
							</div>
						</div>
						<!-- End Item Table-->

						<form id="j-forms" action="#" class="j-forms" method="post">
							<!-- Item Table-->
							<div class="col-md-8">
                                <div class="row">
									<div class="col-sm-12">
										<h2>Deals Administrator</h2>
										<label>Hi User Name, you have 0 Pickup deals</label><hr>
									</div>
								</div>
                                
                                <!-- sort-by-container-->
                                <div class="sort-by-container tooltip-hover">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <strong>Sort by:</strong>
                                            <ul>                            
                                                <li>
                                                    <div class="selector">
                                                        <select>
                                                            <option value="5">5 Starts</option>
                                                            <option value="4">4 Starts</option>
                                                            <option value="3">3 Starts</option>
                                                            <option value="2">2 Starts</option>
                                                            <option value="1">1 Starts</option>
                                                        </select>
                                                        <span class="custom-select">Users Rating</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="selector">
                                                        <select>
                                                            <option value="1">A To Z</option>
                                                            <option value="2">Z To A</option>
                                                        </select>
                                                        <span class="custom-select">Name</span>
                                                    </div>
                                                </li>  

                                                <li>
                                                    <div class="selector">
                                                        <select>
                                                            <option value="1">Sort Ascending</option>
                                                            <option value="2">Sort Descending</option>
                                                        </select>
                                                        <span class="custom-select">Price</span>
                                                    </div>
                                                </li>                            
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="style-view">
                                                <li data-toggle="tooltip" title="" data-original-title="BOX VIEW">
                                                    <a href="hotel-grid-view.html">
                                                        <i class="fa fa-th-large"></i>
                                                    </a>
                                                </li>
                                                <li data-toggle="tooltip" title="" data-original-title="LIST VIEW" class="active">
                                                    <a href="deals_administrator">
                                                        <i class="fa fa-list"></i>
                                                    </a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- sort-by-container-->

                                <div class="row list_view_searches">
                                    
									<!-- Item Gallery List View-->
                                    <div class="col-md-12">
										<div class="first_list">
											<div class="row">
												<div class="col-sm-4">
													<div class="featured-badge">
														<span>special</span>
													</div>
													<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 820px; height: 700px; overflow: hidden; visibility: hidden; background-color: #24262e;">
														<!-- Loading Screen -->
														<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
															<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
															<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
														</div>
														<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 820px; height: 700px; overflow: hidden;">
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/01.jpg" />
																<img data-u="thumb" src="img/thumb-01.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/02.jpg" />
																<img data-u="thumb" src="img/thumb-02.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/03.jpg" />
																<img data-u="thumb" src="img/thumb-03.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/04.jpg" />
																<img data-u="thumb" src="img/thumb-04.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/05.jpg" />
																<img data-u="thumb" src="img/thumb-05.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/06.jpg" />
																<img data-u="thumb" src="img/thumb-06.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/07.jpg" />
																<img data-u="thumb" src="img/thumb-07.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/08.jpg" />
																<img data-u="thumb" src="img/thumb-08.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/09.jpg" />
																<img data-u="thumb" src="img/thumb-09.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/10.jpg" />
																<img data-u="thumb" src="img/thumb-10.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/11.jpg" />
																<img data-u="thumb" src="img/thumb-11.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/12.jpg" />
																<img data-u="thumb" src="img/thumb-12.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/13.jpg" />
																<img data-u="thumb" src="img/thumb-13.jpg" />
															</div>
															<div data-p="150.00" style="display: none;">
																<img data-u="image" src="img/14.jpg" />
																<img data-u="thumb" src="img/thumb-14.jpg" />
															</div>
														</div>
														<!-- Thumbnail Navigator -->
														<div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
															<!-- Thumbnail Item Skin Begin -->
															<div data-u="slides" style="cursor: default;">
																<div data-u="prototype" class="p">
																	<div class="w">
																		<div data-u="thumbnailtemplate" class="t"></div>
																	</div>
																	<div class="c"></div>
																</div>
															</div>
															<!-- Thumbnail Item Skin End -->
														</div>
														<!-- Arrow Navigator -->
														<span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:50px;height:50px;" data-autocenter="2"></span>
														<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:50px;height:50px;" data-autocenter="2"></span>
													</div>
													
												</div>
												<div class="col-sm-5 middle_text">
													<div class="row">
														<div class="col-xs-10">
															<h3 class="list_title">Sample text Here</h3>
														</div>
														<div class="col-xs-2">
															<div class="add-to-compare-list">
																<span class="compared-category"></span>
															</div>
															<!--h4 class="list_title"><i class="fa fa-star"></i></h4 -->
														</div>
													</div>
													<div class="ratings pull-left">
														<input id="5q" type="radio" name="quality-rating" value="5">
														<label for="5q">
															<i class="fa fa-star"></i>
														</label>
														<input id="4q" type="radio" name="quality-rating" value="4">
														<label for="4q">
															<i class="fa fa-star"></i>
														</label>
														<input id="3q" type="radio" name="quality-rating" value="3">
														<label for="3q">
															<i class="fa fa-star"></i>
														</label>
														<input id="2q" type="radio" name="quality-rating" value="2">
														<label for="2q">
															<i class="fa fa-star"></i>
														</label>
														<input id="1q" type="radio" name="quality-rating" value="1" checked="">
														<label for="1q">
															<i class="fa fa-star"></i>
														</label>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<h4 class="location top_5"><i class="fa fa-map-marker"></i> Location</h4>
														</div>
														<div class="col-xs-12">
															<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
														</div>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="row">
														<div class="col-xs-12 serch_bus_logo">
															<img src="img/brand/intel.png" alt="" class="img-responsive">
														</div>
														<div class="col-xs-8 col-xs-offset-2 amt_bg ">
															<h4 class="search_price text_center">£218</h4>
														</div>
														<div class="col-xs-10 col-xs-offset-1">
															<a href="#"><img src="img/icons/viewdetail.png" alt="" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <!-- End Item Gallery List View-->
									
								</div>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- End Shadow Semiboxed -->
	<script src="js/jquery.js"></script> 
	
	<script>
		jssor_1_slider_init();
	</script>
	<script src="j-folder/js/jquery.maskedinput.min.js"></script>
	<script src="j-folder/js/jquery.validate.min.js"></script>
	<script src="j-folder/js/additional-methods.min.js"></script>
	<script src="j-folder/js/jquery.form.min.js"></script>
	<script src="j-folder/js/j-forms.min.js"></script>
	<script src="j-folder/js/jquery-cloneya.min.js"></script>

        