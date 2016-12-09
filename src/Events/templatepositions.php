<?php
namespace ExtensionsValley\Orange\Events;


\Event::listen('website.template.positions', function ($collection) {

    $collection->put('extensionsvalley.orange', [
            '0' => [
                'title' => "Header Menu"
                ,'position' => 'header-menu'
                , 'layout' => 'Orange::partials.header'
            ],
            '1' => [
                 'title' => "Home Content"
                ,'position' => 'home-content'
                , 'layout' =>  'Orange::partials.homecontent'
            ],
            '2' => [
                'title' => "Features"
                ,'position' => 'home-feature'
                , 'layout' =>  'Orange::partials.homefeature'
            ],
            '3' => [
                 'title' => "Our Projects"
                ,'position' => 'our-projects'
                , 'layout' =>  'Orange::partials.ourprojects'
            ],
            '4' => [
                 'title' => "Testimonials"
                ,'position' => 'testimonials'
                , 'layout' =>  'Orange::partials.testimonials'
            ],
            '5' => [
                 'title' => "Footer Menu 1"
                ,'position' => 'footer-menu1'
                , 'layout' =>  'Orange::partials.footermenuitem1'
            ],
            '6' => [
                 'title' => "Footer Menu 2"
                ,'position' => 'footer-menu2'
                , 'layout' =>  'Orange::partials.footermenuitem2'
            ],
            '7' => [
                 'title' => "Footer Menu 3"
                ,'position' => 'footer-menu3'
                , 'layout' =>  'Orange::partials.footermenuitem3'
            ],
            '8' => [
                 'title' => "Footer Widget"
                ,'position' => 'footer-widget'
                , 'layout' =>  'Orange::partials.footerwidget'
            ],
            '9' => [
                 'title' => "Recent Blogs"
                ,'position' => 'recent-blog'
                , 'layout' =>  'Orange::partials.recentblog'
            ],
            '10' => [
                 'title' => "Getting Started"
                ,'position' => 'getting-started'
                , 'layout' =>  'Orange::partials.gettingstarted'
            ],
            '11' => [
                 'title' => "Social Media"
                ,'position' => 'social-media'
                , 'layout' =>  'Orange::partials.socialmedia'
            ],

    ]);


});

\Event::listen('website.template.layout', function ($collection) {

    $collection->put('extensionsvalley.orange', [
                'full-width' => 'Full Width'
    ]);


});
