<!doctype html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
<![endif]-->
<!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8" lang="">
<![endif]-->
<!--[if IE 8]>
    <html class="no-js lt-ie9" lang="">
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shayna Admin Dashboard</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Include Style --}}
    @include('includes.style')
</head>

<body>

    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        {{-- Include SideBar --}}
        @include('includes.sidebar')
    </aside>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        {{-- Include NavBar --}}
        @include('includes.navbar')
        <!-- /#header -->

        <!-- Content -->
        {{-- Include Content --}}
        @yield('content')
        <!-- /.content -->

        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    {{-- Include Script --}}
    @include('includes.script')
    @include('sweetalert::alert')

</body>
</html>
