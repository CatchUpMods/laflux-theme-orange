<footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    @includeIf('Orange::position.loadview',['position'=> 'footer-menu1'])
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6">
                    @includeIf('Orange::position.loadview',['position'=> 'footer-menu2'])
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6">
                    @includeIf('Orange::position.loadview',['position'=> 'footer-menu3'])
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
                    @includeIf('Orange::position.loadview',['position'=> 'footer-widget'])
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">{{ \WebConf::get('copy_right')}}.</small>
                        <small class="block">Designed by <a href="http://extensionsvalley.com/" target="_blank">ExtensionsValley</a></small>
                    </p>
                    <p>
                     @includeIf('Orange::position.loadview',['position'=> 'social-media'])

                    </p>
                </div>
            </div>

        </div>
    </footer>

