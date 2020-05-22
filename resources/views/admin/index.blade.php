<!DOCTYPE html>
<html lang="en">
	<head>        
	    <title> ERP</title>            
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	 	<link rel="stylesheet" href="{{ asset('admin/version3/plugins/fontawesome-free/css/fontawesome.css') }}">
	 	<link rel="stylesheet" href="{{ asset('admin/version3/plugins/fontawesome-free/css/all.min.css') }}">
	 	<link rel="stylesheet" href="{{ asset('admin/version3/dist/css/adminlte.min.css') }}">
         <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	 	<link rel="stylesheet" href="{{ asset('admin/version3/plugins/jqvmap/jqvmap.min.css') }}">
	 	<link rel="stylesheet" href="{{ asset('summernote/summernote-lite.css') }}">
	 	<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
	</head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="app">
            <admin-header></admin-header>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                </div>
            </div>
            <router-view></router-view>
        </div>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 
            <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/morris.js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
        <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

        -->
        
        <script src="{{ asset('admin/version3/mapdata.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/sparklines/sparkline.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/jqvmap/maps/jquery.vmap.bhutan.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('admin/version3/dist/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('admin/version3/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('admin/version3/dist/js/demo.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ asset('admin/version3/dist/js/pages/dashboard2.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/version3/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <script src="/js/app.js"></script>
        <script src="{{ asset('summernote/summernote-lite.js') }}"></script>
        <script type="text/javascript">
        $('.summernote').summernote({
            height:300
        });
        
        function remove_err(err_Id){
            $('#'+err_Id).html('');
        }
        function loadpage(url,id){
            $('#MainMenu').prop('class', 'menu-off');
            $('#dashboardId').prop('class', 'active-off');
            $('#contact').prop('class', 'active-off');
            $('#menusub').prop('class', 'active-off');
            $('#tourpackages').prop('class', 'active-off');
            $('#slider').prop('class', 'active-off');
            $('#events').prop('class', 'active-off');
            $('#gallery').prop('class', 'active-off');
            $('#otherlink').prop('class', 'active-off');
            $('#youtubelink').prop('class', 'active-off');
            $('#aboutus').prop('class', 'active-off');
            $('#new').prop('class', 'active-off');
            $('#'+id).prop('class', 'active');
        }

        </script>
	</body>
</html> 