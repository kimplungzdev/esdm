<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
<meta name="author" content="Muhammad Usman">
<meta name="develop" content="kimplungz">

<!-- The styles -->
<link href='<?=base_url();?>assets/admin/css/bootstrap-cerulean.min.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/charisma-app.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
<link href='<?=base_url();?>assets/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/jquery.noty.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/noty_theme_default.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/elfinder.min.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/elfinder.theme.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/uploadify.css' rel='stylesheet'>
<link href='<?=base_url();?>assets/admin/css/animate.min.css' rel='stylesheet'>

<!-- jQuery -->
<script src="<?=base_url();?>assets/admin/bower_components/jquery/jquery.min.js"></script>

<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- The fav icon -->
<link rel="shortcut icon" href="<?=base_url();?>assets/admin/img/logo.gif">
</head>
    
<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> 
                <img alt="Charisma Logo" src="<?=base_url();?>assets/admin/img/logo.gif" class="hidden-xs"/>
                <span>Lihat Website</span>
            </a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
    <?=$_sidebar;?>
    <?=$_content;?>

</div><!--/fluid-row-->
    <hr>
    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">PT. Nusantara Citra Konsultan</a></p>
    </footer>
</div><!--/.fluid-container-->

<!-- external javascript -->

    
    
    
<!-- external javascript -->
<script src="<?=base_url();?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?=base_url();?>assets/admin/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?=base_url();?>assets/admin/bower_components/moment/min/moment.min.js'></script>
<script src='<?=base_url();?>assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?=base_url();?>assets/admin/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?=base_url();?>assets/admin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?=base_url();?>assets/admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?=base_url();?>assets/admin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?=base_url();?>assets/admin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?=base_url();?>assets/admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?=base_url();?>assets/admin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?=base_url();?>assets/admin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?=base_url();?>assets/admin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?=base_url();?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?=base_url();?>assets/admin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?=base_url();?>assets/admin/js/charisma.js"></script>
</body>
</html>