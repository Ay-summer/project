<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/res/shopdz/css/themer.css" media="screen">

<title>收货地址添加</title>
<style type="text/css">
    body{background:url('/static/res/images/1.jpg');}
</style>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">

        <div id="mws-themer-css-dialog">
        	<form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->
	
    
    <!-- Start Main Wrapper -->

    
    	<!-- Necessary markup, do not remove -->
		
		
        
        <!-- Sidebar Wrapper -->
       
        
        <!-- Main Container Start -->
  
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_8">
                	<!-- <div class="mws-panel-header" style="background:transparent;border-bottom-style: none">
                    	<span style="color:skyblue">添加收货地址</span>
                    </div> -->
                    <div class="mws-panel-body no-padding">
                    	<div class="mws-panel-header" style="background:transparent;border-bottom-style: none">
                    	<span style="color:skyblue;font-size:20px">添加收货地址</span>
                    </div>
                    	<form class="mws-form" method="post" action="/shopjs">
                    			{{csrf_field()}}
                    			
                    		<input type="hidden" name="user_id" value="2">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">收货人</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="name" class="small" value="">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">所在省市</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="huo" class="small" value="">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">详细地址</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="adds" class="small" value="">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">联系电话</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="phone" class="small" value="">
                    				</div>
                    			</div>
                    		</div>
                    			
                    		<div class="mws-button-row" style="background:transparent;border-top-style: none;border-bottom-style: none;">
                    			<input type="submit" value="确认添加地址" class="btn btn-success">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
                
   
                <!-- Panels End -->
          
            <!-- Inner Container End -->
                       
            <!-- Footer -->
           
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    
    <!-- Demo Scripts (remove if not needed) -->

</body>
</html>
