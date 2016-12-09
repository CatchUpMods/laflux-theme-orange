<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    @includeIf('Orange::partials.metadata')
    @includeIf('Orange::partials.stylesheet')
    @yield('extra-styles')
    </head>

    <body>
    <div class="fh5co-loader"></div>
    <div id="page">

        @includeIf('Orange::position.loadview',['position'=> 'header-menu'])

        @yield('status-messages')

        @yield('content-main')

        @includeIf('Orange::position.loadview',['position'=> 'home-content'])

        @includeIf('Orange::position.loadview',['position'=> 'home-feature'])

        @includeIf('Orange::position.loadview',['position'=> 'our-projects'])

        @includeIf('Orange::position.loadview',['position'=> 'testimonials'])

        @includeIf('Orange::position.loadview',['position'=> 'recent-blog'])



        @includeIf('Orange::position.loadview',['position'=> 'getting-started'])

        @includeIf('Orange::partials.footer')
        @includeIf('Orange::partials.footerscript')
        @yield('extra-scripts')
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    </body>
</html>
