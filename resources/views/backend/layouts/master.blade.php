<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 18:30:50 GMT -->
@include('backend.partials.head')

<body>
    @include('backend.partials.header')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('backend.partials.sidenav')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            @include('backend.partials.footer')
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    @include('backend.partials.scripts')
</body>
<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 18:33:15 GMT -->

</html>