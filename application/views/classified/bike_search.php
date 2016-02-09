	<title>99 Right Deals :: Bike search</title>
	
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
	
	<link rel="stylesheet" href="js/filter.css"> 
	<script type="text/javascript">
		$(document).ready(function() {
		  $('.cd-filter-content').niceScroll({
			autohidemode: 'false',     
			cursorborderradius: '0px', 
			background: '#f4f4f4',     
			cursorwidth: '8px',       
			cursorcolor: '#E95413'     
		  });
		});
	</script>
	
	<link rel="stylesheet" href="libs/slider.css">
	
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
			<img src="img/img-theme/shp.png" class="img-responsive" alt="Shadow" title="Shadow view">
		</div>
		<form id="j-forms" action="#" class="j-forms" style="background-color: rgb(255, 255, 255) !important;">
			<div class="content_info">
				<div class="paddings">
					<div class="container">
						<div class="row">
							<!-- Item Table-->
							<div class="col-sm-3">
								<div class="container-by-widget-filter bg-dark color-white">
									<!-- Widget Filter -->
									<h3 class="title-widget">Bikes & Motor Filter</h3>
									<div class="cd-filter-block">
										<h4 class="title-widget">Motors</h4>
										<div class="cd-filter-content">
											<div  id="limit_scrol">
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Honda 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Yamaha
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Suzuki
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Kawasaki 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Other Motorbikes
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Piaggio 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> KTM	
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Aprilia 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Dirtbike
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Triumph
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Peugeot 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> BMW 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Gilera
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Vespa
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> SYM
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Stomp
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Sinnis
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> AJS
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Harley-Davidson
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Quadzilla 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Kymco
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> WK
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Ducati
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Pulse
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Apache
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Hyosung
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Gas Gas
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Baotian
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Lambretta
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Husqvarna
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> TVS
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Discover
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> CPI
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Enfield
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Others
												</label>
											</div>
										</div> 
									</div> 

									<div class="cd-filter-block">
										<h4 class="title-widget"> Price Range</h4>
										<div class="cd-filter-content">
											<div id="limit_scrol">
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 500 & Below 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 501 - Rs. 2000
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 2001 - Rs. 5000
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 5001 - Rs. 8000
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 8001 - Rs. 10000
												</label><label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 10001 - Rs. 14999
												</label><label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Rs. 15000 & Above
												</label>
											</div>
										</div>
									</div>
									
									<div class="cd-filter-block">
										<h4 class="title-widget">Fuel type</h4>

										<div class="cd-filter-content">
											<div>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i>Petrol
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Diesel
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Other
												</label>
											</div>
										</div>
									</div>
									
									<div class="cd-filter-block">
										<h4 class="title-widget">Registration year</h4>
										<div class="cd-filter-content">
											<div id="limit_scrol">
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2015 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2014 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2013 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2012 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2011 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2010 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2009 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2008 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2007 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 2006 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Below 2005 
												</label>
											</div>
										</div>
									</div>
									
									<div class="cd-filter-block">
										<h4 class="title-widget">Mileage</h4>

										<div class="cd-filter-content">
											<div id="limit_scrol">
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> All 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Up to 10,000 miles 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Up to 15,000 miles 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Up to 30,000 miles
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Up to 60,000 miles
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Up to 80,000 miles
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Over 80,000 miles
												</label>
											</div>
										</div>
									</div>
									
									<div class="cd-filter-block">
										<h4 class="title-widget">Engine Size</h4>

										<div class="cd-filter-content">
											<div id="limit_scrol">
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Any 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 50cc and under
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 51-125cc 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 126-250cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 251-400cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 401-500cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 501-600cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 601-800cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 801-1000cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> 1001-1200cc
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Over 1200cc
												</label>
											</div>
										</div>
									</div> 
									
									<div class="cd-filter-block">
										<h4 class="title-widget">Seller Type</h4>

										<div class="cd-filter-content">
											<div>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> All 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Trade
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Private
												</label>
											</div>
										</div>
									</div>
									
									<div class="cd-filter-block">
										<h4 class="title-widget">Search Only</h4>

										<div class="cd-filter-content">
											<div>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Urgent Deals 
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Feature Deals
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Deals With Pictures
												</label>
												<label class="checkbox">
													<input type="checkbox" name="" value="" >
													<i></i> Others
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Item Table-->

							<!-- Item Table-->
							<div class="col-md-9">
                                <div class="sort-by-container tooltip-hover">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <strong>Sort by:</strong>
                                            <ul>                            
                                                <li>
													<div class="top_bar_top">
														<label class="input select">
															<select name="star">
																<option value="none" selected disabled="">Select Star</option>
																<option value="5">5 Starts</option>
																<option value="4">4 Starts</option>
																<option value="3">3 Starts</option>
																<option value="2">2 Starts</option>
																<option value="1">1 Starts</option>
															</select>
															<i></i>
														</label>
													</div>
                                                </li>
												<li>
													<div class="top_bar_top">
														<label class="input select">
															<select name="star">
																<option value="none" selected disabled="">Select Name</option>
																<option value="5">A to Z</option>
																<option value="4">Z to A</option>
															</select>
															<i></i>
														</label>
													</div>
                                                </li>
												<li>
													<div class="top_bar_top">
														<label class="input select">
															<select name="star">
																<option value="none" selected disabled="">Select Price</option>
																<option value="5">Sort Ascending</option>
																<option value="4">Sort Descending</option>
															</select>
															<i></i>
														</label>
													</div>
                                                </li>
											</ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="style-view">
                                                <li data-toggle="tooltip" title="" data-original-title="BOX VIEW">
                                                    <a href="deals_administrator_box">
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
								
								<div class="row">
                                    <div class="col-md-12">
										<div class="unit check logic-block-radio">
											<div class="inline-group">
												<label class="radio" style="font-size: 13px;">
													<input type="radio" name="motor_radio" id="next-step-radio" class=	'bus_consumer' value="Yes">
													<i></i>Cars 
												</label>
												<label class="radio" style="font-size: 13px;">
													<input type="radio" name="motor_radio"   value="No">
													<i></i>Bikes & Motor-homes 
												</label>
												<label class="radio" style="font-size: 13px;">
													<input type="radio" name="motor_radio"  value="No">
													<i></i>Vans & Busses
												</label>
												<label class="radio" style="font-size: 13px;">
													<input type="radio" name="motor_radio"  value="No">
													<i></i>Plant-Machinery 
												</label>
												<label class="radio" style="font-size: 13px;">
													<input type="radio" name="motor_radio"  value="No">
													<i></i>Farming Vehicles 
												</label>
												<label class="radio" style="font-size: 13px;">
													<input type="radio" name="motor_radio"  value="No">
													<i></i>Boats 
												</label>
											</div>
										</div>
									</div>
								</div>

                                <div class="row list_view_searches">
                                    <!-- platinum+urgent package start -->
									<div class="col-md-12">
										<div class="first_list">
											<div class="row">
												<div class="col-sm-4">
													<div class="featured-badge">
														<span>Urgent</span>
													</div>
													<div class="xuSlider">
														<ul class="sliders">
															<li><img src="img/blog/002.jpg" class="img-responsive" alt="Slider1" title="Sliders"></li>
															<li><img src="img/blog/003.jpg" class="img-responsive" alt="Slider2" title="Sliders"></li>
															<li><img src="img/blog/004.jpg" class="img-responsive" alt="Slider3" title="Sliders"></li>
															<li><img src="img/blog/005.jpg" class="img-responsive" alt="Slider4" title="Sliders"></li>
															<li><img src="img/blog/006.jpg" class="img-responsive" alt="Slider5" title="Sliders"></li>
														</ul>
														<div class="direction-nav">
															<a href="javascript:;" class="prev icon-circle-arrow-left icon-4x"><i>Previous</i></a>
															<a href="javascript:;" class="next icon-circle-arrow-right icon-4x"><i>Next</i></a>
														</div>
														<div class="control-nav">
															<li data-id="1"><a href="javascript:;">1</a></li>
															<li data-id="2"><a href="javascript:;">2</a></li>
															<li data-id="3"><a href="javascript:;">3</a></li>
															<li data-id="4"><a href="javascript:;">4</a></li>
															<li data-id="5"><a href="javascript:;">5</a></li>
														</div>	
													</div>
													<div class="">
														<div class="price11">
															<span></span><b>
															<img src="img/icons/crown.png" class="pull-right" alt="Crown" title="Crown Icon"></b>
														</div>
													</div>
												</div>
												<div class="col-sm-8 middle_text">
													<div class="row">
														<div class="col-sm-8">
															<div class="row">
																<div class="col-xs-8">
																	<h3 class="list_title">Sample text Here</h3>
																</div>
																<div class="col-xs-4">
																	<div class="add-to-compare-list pull-right">
																		<span class="compared-hotel" title="Add this hotel to shortlist"></span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-xs-4">
																	<ul class="starts">
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
																	</ul>
																</div>
																<div class="col-xs-8">
																	<div class="location pull-right ">
																		<i class="fa fa-map-marker "></i> 
																		<a href="" class="location"> Location</a> ,<a href="" class="location">Place</a>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-xs-4 serch_bus_logo">
															<img src="img/brand/intel.png" alt="intel" title="intel logo" class="img-responsive">
														</div>
													</div>
													<hr class="separator">
													<div class="row">
														<div class="col-xs-8">
															<div class="row">
																<div class="col-xs-12">
																	<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
																</div>
																<div class="col-xs-12">
																	<a href="description_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
																</div>
															</div>
														</div>
														<div class="col-xs-4">
															<div class="row">
																<div class="col-xs-10 col-xs-offset-1 amt_bg">
																	<h3 class="view_price">£1106</h3>
																</div>
																<div class="col-xs-12">
																	<a href="#" data-toggle="modal" data-target="#sendnow" class="send_now_show btn_v btn-4 btn-4a fa fa-arrow-right top_4"><span>Send Now</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Row-->
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-meta list_view_bottom" >
													<ul>
														<li><i class="fa fa-camera"></i><a href="#">2</a></li>
														<li><i class="fa fa-video-camera"></i><a href="#">3</a></li>
														<li><i class="fa fa-user"></i><a href="#">Person Name</a></li>
														<li><i class="fa fa-clock-o"></i><span>April 23, 2015</span></li>
														<li><i class="fa fa-eye"></i><span>234 Views</span></li>
														<li><span>Deal ID : 112457856</span></li>
														<li><i class="fa fa-star"></i><span><a href="#">Saved</a></span></li>
														<li><i class="fa fa-edit"></i></li>
														<li><img src="img/icons/delete.png" alt="delete" title="delete" class="img-responsive"></li>
													</ul>                      
												</div>
											</div>
										</div><hr class="separator">	
										<!-- End Item Gallery List View-->
									</div>
									<!-- platinum+urgent package end -->
									
									<!-- platinum package start-->
                                    <div class="col-md-12">
										<div class="first_list">
											<div class="row">
												<div class="col-sm-4">
													<div class="xuSlider">
														<ul class="sliders">
															<li><img src="img/blog/002.jpg" class="img-responsive" alt="Slider1" title="Sliders"></li>
															<li><img src="img/blog/003.jpg" class="img-responsive" alt="Slider2" title="Sliders"></li>
															<li><img src="img/blog/004.jpg" class="img-responsive" alt="Slider3" title="Sliders"></li>
															<li><img src="img/blog/005.jpg" class="img-responsive" alt="Slider4" title="Sliders"></li>
															<li><img src="img/blog/006.jpg" class="img-responsive" alt="Slider5" title="Sliders"></li>
														</ul>
														<div class="direction-nav">
															<a href="javascript:;" class="prev icon-circle-arrow-left icon-4x"><i>Previous</i></a>
															<a href="javascript:;" class="next icon-circle-arrow-right icon-4x"><i>Next</i></a>
														</div>
														<div class="control-nav">
															<li data-id="1"><a href="javascript:;">1</a></li>
															<li data-id="2"><a href="javascript:;">2</a></li>
															<li data-id="3"><a href="javascript:;">3</a></li>
															<li data-id="4"><a href="javascript:;">4</a></li>
															<li data-id="5"><a href="javascript:;">5</a></li>
														</div>	
													</div>
													<div class="">
														<div class="price11">
															<span></span><b>
															<img src="img/icons/crown.png" class="pull-right" alt="Crown" title="Crown Icon"></b>
														</div>
													</div>
												</div>
												<div class="col-sm-8 middle_text">
													<div class="row">
														<div class="col-sm-8">
															<div class="row">
																<div class="col-xs-12">
																	<h3 class="list_title">Sample text Here</h3>
																</div>
															</div>
															<div class="row">
																<div class="col-xs-4">
																	<ul class="starts">
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
																	</ul>
																</div>
																<div class="col-xs-8">
																	<div class="location pull-right ">
																		<i class="fa fa-map-marker "></i> 
																		<a href="" class="location"> Location</a> ,<a href="" class="location">Place</a>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-xs-4 serch_bus_logo">
															<img src="img/brand/intel.png" alt="intel" title="intel logo" class="img-responsive">
														</div>
													</div>
													<hr class="separator">
													<div class="row">
														<div class="col-xs-8">
															<div class="row">
																<div class="col-xs-12">
																	<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
																</div>
																<div class="col-xs-12">
																	<a href="description_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
																</div>
															</div>
														</div>
														<div class="col-xs-4">
															<div class="row">
																<div class="col-xs-10 col-xs-offset-1 amt_bg">
																	<h3 class="view_price">£1106</h3>
																</div>
																<div class="col-xs-12">
																	<a href="#" data-toggle="modal" data-target="#sendnow" class="send_now_show btn_v btn-4 btn-4a fa fa-arrow-right top_4"><span>Send Now</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-meta list_view_bottom" >
													<ul>
														<li><i class="fa fa-camera"></i><a href="#">2</a></li>
														<li><i class="fa fa-video-camera"></i><a href="#">3</a></li>
														<li><i class="fa fa-user"></i><a href="#">Person Name</a></li>
														<li><i class="fa fa-clock-o"></i><span>April 23, 2015</span></li>
														<li><i class="fa fa-eye"></i><span>234 Views</span></li>
														<li><span>Deal ID : 112457856</span></li>
														<li><i class="fa fa-star"></i><span><a href="#">Saved</a></span></li>
														<li><i class="fa fa-edit"></i></li>
														<li><img src="img/icons/delete.png" alt="delete" title="delete" class="img-responsive"></li>
													</ul>                      
												</div>
											</div>
										</div><hr class="separator">	
									</div>
									<!-- platinum package end -->

									<!-- gold+urgent package starts -->
									<div class="col-md-12">
										<div class="first_list gold_bgcolor">
											<div class="row">
												<div class="col-sm-4">
													<div class="featured-badge">
														<span>Urgent</span>
													</div>
													<div class="img-hover view_img">
														<img src="img/blog/005.jpg" alt="img_1" title="img_1" class="img-responsive">
														<div class="overlay"><a href="description_view"><i class="top_20 fa fa-link"></i></a></div>
													</div>
													<div class="">
														<div class="price11">
															<span></span><b>
															<img src="img/icons/thumb.png" class="pull-right" alt="thumb" title="thumb Icon"></b>
														</div>
													</div>
												</div>
												<div class="col-sm-8 middle_text">
													<div class="row">
														<div class="col-sm-8">
															<div class="row">
																<div class="col-xs-12">
																	<h3 class="list_title">Sample text Here</h3>
																</div>
																<!--div class="col-xs-4 ">
																	<div class="add-to-compare-list pull-right">
																		<span class="gold_icon"></span>
																	</div>
																</div-->
															</div>
															<div class="row">
																<div class="col-xs-4">
																	<ul class="starts">
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
																	</ul>
																</div>
																<div class="col-xs-8">
																	<div class="location pull-right ">
																		<i class="fa fa-map-marker "></i> 
																		<a href="" class="location"> Location</a> ,<a href="" class="location">Place</a>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-xs-4 serch_bus_logo">
															<img src="img/brand/intel.png" alt="intel" title="intel logo" class="img-responsive">
														</div>
													</div>
													<hr class="separator">
													<div class="row">
														<div class="col-xs-8">
															<div class="row">
																<div class="col-xs-12">
																	<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
																</div>
																<div class="col-xs-12">
																	<a href="description_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
																</div>
															</div>
														</div>
														<div class="col-xs-4">
															<div class="row">
																<div class="col-xs-10 col-xs-offset-1 amt_bg">
																	<h3 class="view_price">£1106</h3>
																</div>
																<div class="col-xs-12">
																	<a href="#" data-toggle="modal" data-target="#sendnow" class="send_now_show btn_v btn-4 btn-4a fa fa-arrow-right top_4"><span>Send Now</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Row-->
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-meta list_view_bottom gold_bgcolor">
													<ul>
														<li><i class="fa fa-camera"></i><a href="#">2</a></li>
														<li><i class="fa fa-video-camera"></i><a href="#">3</a></li>
														<li><i class="fa fa-user"></i><a href="#">Person Name</a></li>
														<li><i class="fa fa-clock-o"></i><span>April 23, 2015</span></li>
														<li><i class="fa fa-eye"></i><span>234 Views</span></li>
														<li><span>Deal ID : 112457856</span></li>
														<li><i class="fa fa-star"></i><span><a href="#">Saved</a></span></li>
														<li><i class="fa fa-edit"></i></li>
														<li><img src="img/icons/delete.png" alt="delete" title="delete" class="img-responsive"></li>
													</ul>                      
												</div>
											</div>
										</div><hr class="separator">	
									</div>
									<!-- gold+urgent package end -->
									
									<!-- gold package starts -->
									<div class="col-md-12">
										<div class="first_list gold_bgcolor">
											<div class="row">
												<div class="col-sm-4 ">
													<div class="img-hover view_img">
														<img src="ad_images/no_image.png" alt="no_image.png" title="significant" class="img-responsive">
														<div class="overlay"><a href="description_view"><i class="top_20 fa fa-link"></i></a></div>
													</div>
													<div class="">
														<div class="price11">
															<span></span><b>
															<img src="img/icons/thumb.png" class="pull-right" alt="thumb" title="thumb Icon"></b>
														</div>
													</div>
												</div>
												<div class="col-sm-8 middle_text">
													<div class="row">
														<div class="col-sm-8">
															<div class="row">
																<div class="col-xs-12">
																	<h3 class="list_title">Sample text Here</h3>
																</div>
															</div>
															<div class="row">
																<div class="col-xs-4">
																	<ul class="starts">
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
																	</ul>
																</div>
																<div class="col-xs-8">
																	<div class="location pull-right ">
																		<i class="fa fa-map-marker "></i> 
																		<a href="" class="location"> Location</a> ,<a href="" class="location">Place</a>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-xs-4 serch_bus_logo">
															<img src="img/brand/intel.png" alt="intel" title="intel logo" class="img-responsive">
														</div>
													</div>
													<hr class="separator">
													<div class="row">
														<div class="col-xs-8">
															<div class="row">
																<div class="col-xs-12">
																	<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
																</div>
																<div class="col-xs-12">
																	<a href="description_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
																</div>
															</div>
														</div>
														<div class="col-xs-4">
															<div class="row">
																<div class="col-xs-10 col-xs-offset-1 amt_bg">
																	<h3 class="view_price">£1106</h3>
																</div>
																<div class="col-xs-12">
																	<a href="#" data-toggle="modal" data-target="#sendnow" class="send_now_show btn_v btn-4 btn-4a fa fa-arrow-right top_4"><span>Send Now</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Row-->
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-meta list_view_bottom gold_bgcolor">
													<ul>
														<li><i class="fa fa-camera"></i><a href="#">2</a></li>
														<li><i class="fa fa-video-camera"></i><a href="#">3</a></li>
														<li><i class="fa fa-user"></i><a href="#">Person Name</a></li>
														<li><i class="fa fa-clock-o"></i><span>April 23, 2015</span></li>
														<li><i class="fa fa-eye"></i><span>234 Views</span></li>
														<li><span>Deal ID : 112457856</span></li>
														<li><i class="fa fa-star"></i><span><a href="#">Saved</a></span></li>
														<li><i class="fa fa-edit"></i></li>
														<li><img src="img/icons/delete.png" alt="delete" title="delete" class="img-responsive"></li>
													</ul>                      
												</div>
											</div>
										</div><hr class="separator">	
									</div>
									<!-- gold package end -->
									
									<!-- free+urgent package starts -->
									<div class="col-md-12">
										<div class="first_list">
											<div class="row">
												<div class="col-sm-4 view_img">
													<div class="featured-badge">
														<span>Urgent</span>
													</div>
													<div class="img-hover">
														<img src="img/blog/004.jpg" alt="img_1" title="img_1" class="img-responsive">
														<div class="overlay"><a href="description_view"><i class="top_20 fa fa-link"></i></a></div>
													</div>
												</div>
												<div class="col-sm-8 middle_text">
													<div class="row">
														<div class="col-sm-8">
															<div class="row">
																<div class="col-xs-12">
																	<h3 class="list_title">Sample text Here</h3>
																</div>
															</div>
															<div class="row">
																<div class="col-xs-4">
																	<ul class="starts">
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
																	</ul>
																</div>
																<div class="col-xs-8">
																	<div class="location pull-right ">
																		<i class="fa fa-map-marker "></i> 
																		<a href="" class="location"> Location</a> ,<a href="" class="location">Place</a>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-xs-4 serch_bus_logo">
															<img src="img/brand/intel.png" alt="intel" title="intel logo" class="img-responsive">
														</div>
													</div>
													<hr class="separator">
													<div class="row">
														<div class="col-xs-8">
															<div class="row">
																<div class="col-xs-12">
																	<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
																</div>
																<div class="col-xs-12">
																	<a href="description_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
																</div>
															</div>
														</div>
														<div class="col-xs-4">
															<div class="row">
																<div class="col-xs-10 col-xs-offset-1 amt_bg">
																	<h3 class="view_price">£1106</h3>
																</div>
																<div class="col-xs-12">
																	<a href="#" data-toggle="modal" data-target="#sendnow" class="send_now_show btn_v btn-4 btn-4a fa fa-arrow-right top_4"><span>Send Now</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Row-->
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-meta list_view_bottom" >
													<ul>
														<li><i class="fa fa-camera"></i><a href="#">2</a></li>
														<li><i class="fa fa-video-camera"></i><a href="#">3</a></li>
														<li><i class="fa fa-user"></i><a href="#">Person Name</a></li>
														<li><i class="fa fa-clock-o"></i><span>April 23, 2015</span></li>
														<li><i class="fa fa-eye"></i><span>234 Views</span></li>
														<li><span>Deal ID : 112457856</span></li>
														<li><i class="fa fa-star"></i><span><a href="#">Saved</a></span></li>
														<li><i class="fa fa-edit"></i></li>
														<li><img src="img/icons/delete.png" alt="delete" title="delete" class="img-responsive"></li>
													</ul>                      
												</div>
											</div>
										</div><hr class="separator">	
									</div>
									<!-- free+urgent package ends -->
									
									<!-- free package starts -->
									<div class="col-md-12">
										<div class="first_list">
											<div class="row">
												<div class="col-sm-4 view_img">
													<div class="img-hover">
														<img src="img/blog/002.jpg" alt="img_1" title="img_1" class="img-responsive">
														<div class="overlay"><a href="description_view"><i class="top_20 fa fa-link"></i></a></div>
													</div>
												</div>
												<div class="col-sm-8 middle_text">
													<div class="row">
														<div class="col-sm-8">
															<div class="row">
																<div class="col-xs-12">
																	<h3 class="list_title">Sample text Here</h3>
																</div>
															</div>
															<div class="row">
																<div class="col-xs-4">
																	<ul class="starts">
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																		<li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
																	</ul>
																</div>
																<div class="col-xs-8">
																	<div class="location pull-right ">
																		<i class="fa fa-map-marker "></i> 
																		<a href="" class="location"> Location</a> ,<a href="" class="location">Place</a>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-xs-4 serch_bus_logo">
															<img src="img/brand/intel.png" alt="intel" title="intel logo" class="img-responsive">
														</div>
													</div>
													<hr class="separator">
													<div class="row">
														<div class="col-xs-8">
															<div class="row">
																<div class="col-xs-12">
																	<p class="">The Holiday Inn Bilbao is in a prime location next to the Basilica of  and the </p>
																</div>
																<div class="col-xs-12">
																	<a href="description_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
																</div>
															</div>
														</div>
														<div class="col-xs-4">
															<div class="row">
																<div class="col-xs-10 col-xs-offset-1 amt_bg">
																	<h3 class="view_price">£1106</h3>
																</div>
																<div class="col-xs-12">
																	<a href="#" data-toggle="modal" data-target="#sendnow" class="send_now_show btn_v btn-4 btn-4a fa fa-arrow-right top_4"><span>Send Now</span></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Row-->
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="post-meta list_view_bottom" >
													<ul>
														<li><i class="fa fa-camera"></i><a href="#">2</a></li>
														<li><i class="fa fa-video-camera"></i><a href="#">3</a></li>
														<li><i class="fa fa-user"></i><a href="#">Person Name</a></li>
														<li><i class="fa fa-clock-o"></i><span>April 23, 2015</span></li>
														<li><i class="fa fa-eye"></i><span>234 Views</span></li>
														<li><span>Deal ID : 112457856</span></li>
														<li><i class="fa fa-star"></i><span><a href="#">Saved</a></span></li>
														<li><i class="fa fa-edit"></i></li>
														<li><img src="img/icons/delete.png" alt="delete" title="delete" class="img-responsive"></li>
													</ul>                      
												</div>
											</div>
										</div><hr class="separator">	
									</div>
									<!-- free package ends -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
	
	<!-- End Shadow Semiboxed -->
	<script src="js/jquery.js"></script> 
	
	<script src="j-folder/js/jquery.maskedinput.min.js"></script>
	<script src="j-folder/js/jquery.validate.min.js"></script>
	<script src="j-folder/js/additional-methods.min.js"></script>
	<script src="j-folder/js/jquery.form.min.js"></script>
	<script src="j-folder/js/j-forms.min.js"></script>
	
	<script type="text/javascript" src="libs/jquery.xuSlider.js"></script>
	<script>
		$('.xuSlider').xuSlider();
	</script>
	
	<script src="js/jquery.nicescroll.js"></script> 

	<script src="libs/jquery.mixitup.min.js"></script>
	<script src="libs/main.js"></script>	