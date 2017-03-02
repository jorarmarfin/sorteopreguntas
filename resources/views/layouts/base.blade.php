<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title','UNIVERSIDAD NACIONAL INGENIERIA | Sorteo Preguntas')</title>
    <!-- BEGIN PAGE FIRST SCRIPTS -->
    @yield('js-plugins-first')
    <!-- END PAGE FIRST SCRIPTS -->
    <!-- BEGIN PAGE TOP STYLES -->
    @yield('styles-plugins-first')
    <!-- END PAGE TOP STYLES -->
	@include('layouts.partials.styles-mandatory')
	@include('layouts.partials.styles-plugins')
	@include('layouts.partials.styles-global')
	@include('layouts.partials.styles-theme')

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper">
        <!-- BEGIN HEADER -->
        @include('layouts.partials.template-header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('layouts.partials.template-sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    @include('layouts.partials.template-breadcumb')
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title"> @yield('page-title','Blank Page Layout')
                        <small>@yield('page-subtitle','blank page layout')</small>
                    </h1>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    @yield('content')
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        @include('layouts.partials.template-footer')
        <!-- END FOOTER -->
    </div>
	<!-- BEGIN CORE PLUGINS -->
	@include('layouts.partials.js-core')
    @yield('plugins-js')
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src={{asset("assets/global/scripts/app.min.js")}} type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src={{asset("assets/layouts/layout/scripts/layout.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/layouts/layout/scripts/demo.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/layouts/global/scripts/quick-sidebar.min.js")}} type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    @yield('js-scripts')
</body>
