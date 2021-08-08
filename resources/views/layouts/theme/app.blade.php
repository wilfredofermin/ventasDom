<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Default | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @include('layouts.theme.styles') 
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->   

</head>
<body class="default-sidebar">

    <!-- Tab Mobile View Header -->
    @include('layouts.theme.header-mobile')
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.theme.header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        @include('layouts.theme.sidebar')

        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>

                <div class="row layout-spacing ">
                   <!-- Aqui van los widget -->
                </div>
                <!-- AQUI EL CONTENIDO -->
                @yield('content')
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    @include('layouts.theme.footer')
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
    @include('layouts.theme.sidebar-profile')
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layouts.theme.scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>