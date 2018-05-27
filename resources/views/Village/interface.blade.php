<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Village CSS Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 315 village -->
<!-- 
Village Template 
http://www.templatemo.com/preview/templatemo_315_village 
-->
<link href="/templatemo_style.css" rel="stylesheet" type="text/css" />
@section('cssLink')
@show
</head>
<body>

@include('Village.header')
 <!-- end of header_wrapper -->
@section('citation')
    
@show

 <!-- end of middle_wrapper -->

<div id="templatemo_main">

    @section('contenu')
    
    <div class="last_content_box">
    	<div class="col_w460">
        	<h1>Welcome to Village</h1>
            <p><em>Village CSS Template is provided by <a href="#">templatemo.com</a> website. You may use this template in your websites. Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos and <a rel="nofollow" href="http://www.brusheezy.com/brushes/3246-Dream-light-ps-brushes">cjj675</a> for Photoshop Brushes.</em></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non diam nec nisl ultrices pulvinar non in eros. Aenean eu lectus vel nulla auctor congue. Nam dui enim, faucibus placerat pharetra at, venenatis eget arcu. Maecenas facilisis consequat diam non accumsan. Phasellus sed turpis magna. Validate  <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <a href="#" class="more">Read more</a>
        </div>
        <div class="col_w460 last_col">
        	<h2>Testimonials</h2>
            <blockquote>
                <p>Aenean eu aliquam erat. Ut commodo, nulla eu pellentesque mollis, odio ante condimentum augue, eget facilisis dui magna ut ligula. Quisque sit amet adipiscing libero. Donec et tellus vitae velit pharetra lobortis. Ut interdum mi sit amet magna feugiat auctor.</p>
                
                <cite>John - <span>Senior Webmaster</span></cite>
            </blockquote>
            
            <blockquote>
                <p>Maecenas vitae suscipit elit. Pellentesque augue urna, hendrerit eget ultricies sed, ultricies vel neque. Sed et tincidunt justo. Duis vitae urna libero. Nunc auctor magna egestas urna ullamcorper eu mollis.</p>
                
                <cite>Davis - <span>Web Designer</span></cite>
            </blockquote>
        </div>
        <div class="cleaner"></div>
	</div>
	@show
	<div class="cleaner"></div>
</div>


 @include('Village.footer')
	 <!-- end of footer -->

</body>
</html>