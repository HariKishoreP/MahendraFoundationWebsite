<footer id="footer" class="footer-v1">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row">                             
<div class="col-sm-6">
<h3>QUICK LINKS</h3>
<div class="row"> 
<div class="col-sm-4">
<ul class="social">
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>">Home</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>about-us">About US</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>terms-conditions">Terms & Conditions</a></li>
</ul>
</div>
<div class="col-sm-4">
<ul class="social">
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>cookies-policy">Cookies Policy</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>blog">Blog</a></li>
</ul>
</div>
<div class="col-sm-4">
<ul class="social">
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>safety-tips">Assistance</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>">Faq</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>contact-us">Contact us</a></li>
</ul>
</div>
</div>
</div>

<div class="col-sm-6">
<h3>EXPLORE BY CATEGORY</h3>
<div class="row"> 
<div class="col-sm-4">
<ul class="social">
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>hot-deals-post-classifieds-ads">Hot Deals</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>e-zone-phones-tablets-sale">E-Zone</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>motor-point-used-cars-sale">Motor Point</a></li>
</ul>
</div>
<div class="col-sm-4">
<ul class="social">
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>clothes-for-sale-uk">Clothing & LifeStyles</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>household-services-london-uk">Services</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>residential-commercial-property-for-sale">Find a Property</a></li>
</ul>
</div>
<div class="col-sm-4">
<ul class="social">
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>home-kitchen-services-uk">Home & Kitchen</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>pet-for-sale-online">Pets</a></li>
<li><i class="fa fa-check"></i> <a href="<?php echo base_url(); ?>part-full-time-jobs-london">Jobs</a></li>
</ul>
</div>
</div>
</div>
</div>  

<div class="divisor"></div>

<div class="row">
<div class="col-md-6">
<h3>NEWSLETTER SIGN UP</h3>  
<div class="row">
<div class="col-md-4">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control" placeholder="Your Name" name="name" id="name" type="text" onkeypress="isChar(evt);">
</div>
<div class="error letter_name" style="display:none;">Enter Your Name</div>
</div>
<div class="col-md-4">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
<input class="form-control" placeholder="Your  Email" name="email" id="email" type="text">
<input name="result" class='result' type="hidden">
</div>
<div class="error letter_email" style="display:none;">Enter A valid Email ID</div>
</div>
<div class="col-md-2">
<span class="input-group-btn">
<button class="btn btn-primary newsletter" type="button" name="subscribe">SIGN UP</button>
</span>
</div>
</div>
<div class="row">
<div class="col-md-12 letter_success" style="display:none;" >
You have subscribed Successfully
</div>
<div class="col-md-12 error letter_emailerr" style="display:none;" >
Email Id Already Exist
</div>
</div>
<div id="result-newsletter"></div>
</div>
<div class="col-md-6">
<h3 class="">SOCIAL MEDIA LINKS</h3>  
<div class="set-2">
<ul>
<li><a href="https://www.facebook.com/99rightdeals" target="_blank" class="facebook-big"> Like</a></li>
<li><a href="https://twitter.com/99rightdealsuk" target="_blank" class="twitter-big"> Tweet</a></li>
<li><a href="https://plus.google.com/105335235432554926026" target="_blank" class="gplus-big"> GPlus</a></li>
<li><a href="" target="_blank" class="linkedin-big"> Link In</a></li>
<li><a href="https://in.pinterest.com/99rightdealslim/" target="_blank" class="pinterest-big"> Pin It</a></li>
</ul>
</div>
</div>
</div>                      
</div>
</div>
</div>

<div class="footer-down">
<div class="container">
<div class="row">
<div class="col-md-12 text_center">
<p>Copyright @ 2016.All Right Reserved to <strong> <a href="http://99rightdeals.com/" target="_blanks">99 Right Deals</a> </strong></p>
</div>
</div>
</div>
</div>
</footer>      

<script type="text/javascript">
$(function(){
$(".newsletter").click(function(){
var name = $("#name").val();
var email = $("#email").val();
if (name == '') {
$(".letter_name").show();
$(".letter_success").hide();
$(".letter_emailerr").hide();
$(".result").val(1);
return false;
}

if (name != '') {
$(".letter_name").hide();
$(".letter_success").hide();
$(".letter_emailerr").hide();
$(".result").val(0);
}

if (email == '') {
$(".letter_email").show();
$(".letter_success").hide();
$(".letter_emailerr").hide();
$(".result").val(1);
return false;
}
if (email != '') {
var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
if (pattern.test(email)) {
$(".letter_email").hide();
$(".letter_success").hide();
$(".letter_emailerr").hide();
$(".result").val(0);
}
else{
$(".letter_email").show();
$(".letter_success").hide();
$(".letter_emailerr").hide();
$(".result").val(1);
}					
}

if ($(".result").val() == 0) {
$.ajax({
type: "POST",
url: "<?php echo base_url();?>searchview/subscribe_news",
data: {
name : name,
email : email
},
success: function (data) {
if (data == 0) {
/*success*/
$(".letter_success").show();
$(".letter_emailerr").hide();
}
else if(data == 1){
/*email exists*/
$(".letter_emailerr").show();
$(".letter_success").hide();
}
}
});
}

});
$('#name').keydown(function (e) {
if (e.shiftKey || e.ctrlKey || e.altKey) {
e.preventDefault();
} else {
var key = e.keyCode;
if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
e.preventDefault();
}
}
});
});
</script>

<script type="text/javascript">
$(function(){
$("#feedbackads").validate({
// Specify the validation rules
rules: {
fbkcontname: {
required: true
},
feedbackmsg: {
required: true,
minlength: 60
},
busemail: {
required: true,
email: true
},
feedbackno: {
required: true
}
},

// Specify the validation error messages
messages: {
fbkcontname: {
required: "Please Enter contact name"
},
feedbackmsg: {
required: "Please Enter feedback message",
minlength: "message contains atleast 60 characters"
},
busemail: {
required: "Please Enter valid mail id"
},
feedbackno: {
required: "Please Enter Mobile Number"
}
},

submitHandler: function(form) {
return true;
}
});
});
</script>

<!-- Modal -->
<div class="modal dialog1 fade" id="sendnow" role="dialog" style="padding-top: 100px;">
<div class="modal-dialog1">
<form action="<?php echo base_url(); ?>description_view/feedbackforads" method="post" class="j-forms tooltip-hover" id="feedbackads" >
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h2>Send <span>NOW </span></h2>
</div>
<div class="modal-body">
<div class="j-row">
<div class="unit">
<label class="label">Contact Name
<sup data-toggle="tooltip" title="" data-original-title="Contact Name">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<label class="icon-right" for="name"><i class="fa fa-user"></i></label>
<input type="text" id="fbkcontname" name="fbkcontname" placeholder="Enter Contact Person Name ">
<input type='hidden' class='curr_url' name='curr_url' value='<?php echo current_url();?>'>
<input type="hidden" name="ad_id" id='fdbkads' value="">
</div>
</div>
<div class="unit">
<label class="label">Mobile Number
<sup data-toggle="tooltip" title="" data-original-title="Mobile Number">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<label class="icon-right" for="phone"><i class="fa fa-phone"></i></label>
<input type="text" id="feedbackno" name="feedbackno" maxlength='11' onkeypress="return isNumber(event)" placeholder="Enter Your Mobile Number ">
</div>
</div>
<div class="unit">
<label class="label">Email
<sup data-toggle="tooltip" title="" data-original-title="Email">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<label class="icon-right" for="email"><i class="fa fa-envelope-o"></i></label>
<input type="email" id="busemail" name="busemail" placeholder="Enter Your Email">
</div>
</div>
<div class="unit">
<label class="label">Message
<sup data-toggle="tooltip" title="" data-original-title="Message">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<textarea type="text" id="feedbackmsg" name="feedbackmsg" placeholder="Enter Your Feedback "></textarea>
</div>
</div>
<div class="unit"><button class="btn btn-primary " id='change_pwd'>Send Now</button></div>
</div>
</div>
</div>
</form>
</div>
</div>

<div class="modal dialog3" id="feedback_1" role="dialog">
<div class="modal-dialog3">
<script type="text/javascript">
$(function(){
$("#site_feedback").validate({

// Specify the validation rules
rules: {
category: {
required: true
},
return_site: {
required: true
},
frnd_ref:{
required: true
},
fdbk_mail: {
required: true,
email: true
},
Feedback:{
required: true
},
fdbk_mobile:{
required: true
},
},

// Specify the validation error messages
messages: {
category: {
required: 'Please select category'
},
return_site: {
required: 'Please select option'
},
frnd_ref:{
required: 'Please select option'
},
fdbk_mail: {
required: 'Enter email id',
email: 'Please enter a valid email id'
},
Feedback:{
required: 'Enter feedback message'
},
fdbk_mobile:{
required: 'Enter Mobile number'
},
},

submitHandler: function(form) {
return true;
//form.submit();
}
});
});
function isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
return false;
}
return true;
}
</script>
<!-- Modal content-->
<form action="<?php echo base_url(); ?>classified/feedback_site" method="post" id='site_feedback' class="j-forms tooltip-hover" >
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h2>Your feedback of 99 Right Deal</h2>
</div>
<div class="modal-body" style="padding: 10px 20px 20px 20px;">
<div class="fead_back_modal">
<div class="row">
<div class="col-sm-6 unit">
<div class="row">
<div class="col-sm-12 unit">
<label class="label">Which category are you most interested in ?</label>
<label class="input select">
<select name="category">
<option value="none" selected disabled="">Please select an option</option>
<option value="1">Jobs</option>
<option value="2">Services</option>
<option value="3">Motor Point</option>
<option value="4">Find A Property</option>
<option value="5">Pets</option>
<option value="6">Clothing & Lifestyles</option>
<option value="7">Home & Kitchen</option>
<option value="8">E-zone</option>
</select>
<i></i>
</label>
</div>
<div class="col-sm-12 unit">
<label class="label">How likely are you to return to 99 right Deals ?</label>
<label class="input select">
<select name="return_site">
<option value="none" selected disabled="">Please select an option</option>
<option value="Highly Yes">Highly Yes</option>
<option value="Likely">Likely</option>
<option value="Not sure">Not sure</option>
<option value="Unlikely">Unlikely</option>
<option value="Never">Never</option>
</select>
<i></i>
</label>
</div>
<div class="col-sm-12 unit">
<label class="label">Would you recommend the site to a friend ?</label>
<label class="input select">
<select name="frnd_ref">
<option value="none" selected disabled="">Please select an option</option>
<option value="Definitely Yes">Definitely Yes</option>
<option value="Likely">Likely</option>
<option value="Not Sure">Not Sure</option>
<option value="UnLikely">UnLikely</option>
<option value="Never">Never</option>
</select>
<i></i>
</label>
</div>
</div>
</div>

<div class="col-sm-6 unit">
<strong>How would you rate the following?</strong>
<div class="bot_10 clearfix"></div>
<label class="rating_wise">(1 - Very poor   &nbsp;&nbsp;&nbsp;&nbsp;   5 - Very good) :</label>
<div class="rating-group">
<label class="label">Easy to Use :</label>
<div class="ratings">
<input id="5acc" type="radio" name="easytouse" value='5'><label for="5acc"><i class="fa fa-smile-o"></i></label>
<input id="4acc" type="radio" name="easytouse" value='4'><label for="4acc"><i class="fa fa-smile-o"></i></label>
<input id="3acc" type="radio" name="easytouse" value='3'><label for="3acc"><i class="fa fa-smile-o"></i></label>
<input id="2acc" type="radio" name="easytouse" value='2'><label for="2acc"><i class="fa fa-smile-o"></i></label>
<input id="1acc" type="radio" name="easytouse" value='1' checked><label for="1acc"><i class="fa fa-smile-o"></i></label>
</div>
</div>
<div class="rating-group">
<label class="label">Stability and Speed :</label>
<div class="ratings">
<input id="5Stab" type="radio" name="Stability-rating" value='5' ><label for="5Stab"><i class="fa fa-smile-o"></i></label>
<input id="4Stab" type="radio" name="Stability-rating" value='4'><label for="4Stab"><i class="fa fa-smile-o"></i></label>
<input id="3Stab" type="radio" name="Stability-rating" value='3'><label for="3Stab"><i class="fa fa-smile-o"></i></label>
<input id="2Stab" type="radio" name="Stability-rating" value='2'><label for="2Stab"><i class="fa fa-smile-o"></i></label>
<input id="1Stab" type="radio" name="Stability-rating" value='1' checked><label for="1Stab"><i class="fa fa-smile-o"></i></label>
</div>
</div>
<div class="rating-group">
<label class="label">Design :</label>
<div class="ratings">
<input id="5price" type="radio" name="Design-rating" value='5' ><label for="5price"><i class="fa fa-smile-o"></i></label>
<input id="4price" type="radio" name="Design-rating" value='4'><label for="4price"><i class="fa fa-smile-o"></i></label>
<input id="3price" type="radio" name="Design-rating" value='3'><label for="3price"><i class="fa fa-smile-o"></i></label>
<input id="2price" type="radio" name="Design-rating" value='2'><label for="2price"><i class="fa fa-smile-o"></i></label>
<input id="1price" type="radio" name="Design-rating" value='1' checked><label for="1price"><i class="fa fa-smile-o"></i></label>
</div>
</div>
<div class="rating-group">
<label class="label">Overall :</label>
<div class="ratings">
<input id="5overl" type="radio" value='5' name="Overall-rating"><label for="5overl"><i class="fa fa-smile-o"></i></label>
<input id="4overl" type="radio" value='4' name="Overall-rating"><label for="4overl"><i class="fa fa-smile-o"></i>
</label>
<input id="3overl" type="radio" value='3' name="Overall-rating"><label for="3overl"><i class="fa fa-smile-o"></i>
</label>
<input id="2overl" type="radio" value='2' name="Overall-rating"><label for="2overl"><i class="fa fa-smile-o"></i>
</label>
<input id="1overl" type="radio" value='1' name="Overall-rating" checked><label for="1overl"><i class="fa fa-smile-o"></i>
</label>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 unit">
<label class="label">Feedback 
<sup data-toggle="tooltip" title="" data-original-title="Feedback">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<textarea type="text" id="Feedback" name="Feedback" placeholder="Enter Your Feedback "></textarea>
</div>
</div>
<div class="col-sm-6 unit">
<label class="label">Email 
<sup data-toggle="tooltip" title="" data-original-title="Email">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<label class="icon-right" for="email">
<i class="fa fa-envelope-o"></i>
</label>
<input type="email" id="fdbk_mail" name="fdbk_mail" placeholder="Enter Your Email">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 unit">
<label class="label">Mobile Number 
<sup data-toggle="tooltip" title="" data-original-title="Mobile Number ">
<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
</sup>
</label>
<div class="input">
<label class="icon-right" for="phone"><i class="fa fa-phone"></i></label>
<input type="text" id="fdbk_mobile" name="fdbk_mobile" maxlength='11' onkeypress="return isNumber(event)" placeholder="Enter Your Mobile Number ">
</div>
</div>
<div class="col-sm-12 unit">													
<button class="btn_v btn-4 btn-4a fa fa-arrow-right pull-right"><span>Submit</span></button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>