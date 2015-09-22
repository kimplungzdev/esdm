<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Panel Web Portal ESDM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login Panel Web Portal ESDM ">
    <meta name="author" content="Abdurrahman Hakim">

    <!-- The styles -->
    <link id="bs-css" href="assets/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="assets/admin/css/charisma-app.css" rel="stylesheet">
    <link href='assets/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='assets/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='assets/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='assets/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='assets/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='assets/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='assets/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='assets/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='assets/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='assets/admin/css/uploadify.css' rel='stylesheet'>
    <link href='assets/admin/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="assets/admin/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="assets/admin/img/logo.gif">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Admin Panel Web Portal ESDM</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal" action="<?=base_url();?>index.php/login/" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input name="user" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="assets/admin/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='assets/admin/bower_components/moment/min/moment.min.js'></script>
<script src='assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='assets/admin/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="assets/admin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="assets/admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="assets/admin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="assets/admin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="assets/admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="assets/admin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="assets/admin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="assets/admin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="assets/admin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="assets/admin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="assets/admin/js/charisma.js"></script>


</body>
</html>
