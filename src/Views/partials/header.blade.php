 <!-- Start .header -->
 <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="left-menu text-right menu-1">
                    <ul>
                    <?php
        $menu_items = ExtensionsValley\Menumanager\Models\Menuitems::getAllMenusWithType($position,$menu_type);
        $left_menu_count = 0;

        ?>              @if(sizeof($menu_items))
                            @foreach($menu_items as $menuitem)
                                @if($menuitem->parent_menu == 0 && $left_menu_count <  (sizeof($menu_items)/2))
                            <li @if(Request::path() === $menuitem->source) class="active has-dropdown" @endif>
                            <a @if($menuitem->is_new_tab == 1) target='_blank' @endif
                               href="{{url("$menuitem->source")}}">
                               {{$menuitem->menu_name}}

                             </a>
                             <?php
                                $child_items = ExtensionsValley\Menumanager\Models\Menuitems::getChildItems($menuitem->id,$menu_type);
                                if(sizeof($child_items)){
                                    ?>
                                        <ul class="dropdown">
                                          @foreach($child_items as $childitem)
                                            <li>
                                <a @if($childitem->is_new_tab == 1) target='_blank' @endif
                                   href="{{url("$childitem->source")}}"
                                   @if(Request::path() === $childitem->source) id="current" @endif
                                   >
                                   {{$childitem->menu_name}}

                                 </a></li>
                                        @endforeach
                                        </ul>
                                    <?php
                                }?>
                                </li>
                                <?php $left_menu_count++;?>
                                @endif
                            @endforeach
                        @endif

                    </ul>
                </div>
                <div class="logo text-center">
                    <div id="fh5co-logo"><a href="{{url('/')}}">{{ \WebConf::get('site_name')}}</a></div>
                </div>
                <div class="right-menu text-left menu-1">
                    <ul>
                    <?php
                        $right_menu_count = 0;
                    ?>
                        @if(sizeof($menu_items))
                            @foreach($menu_items as $menuitem)

                                @if($menuitem->parent_menu == 0 && $right_menu_count > (sizeof($menu_items)/2) -1)

                            <li @if(Request::path() === $menuitem->source) class="active has-dropdown" @endif>
                            <a @if($menuitem->is_new_tab == 1) target='_blank' @endif
                               href="{{url("$menuitem->source")}}">
                               {{$menuitem->menu_name}}

                             </a>
                             <?php
                                $child_items = ExtensionsValley\Menumanager\Models\Menuitems::getChildItems($menuitem->id,$menu_type);
                                if(sizeof($child_items)){
                                    ?>
                                        <ul class="dropdown">
                                          @foreach($child_items as $childitem)
                                            <li>
                                <a @if($childitem->is_new_tab == 1) target='_blank' @endif
                                   href="{{url("$childitem->source")}}"
                                   @if(Request::path() === $childitem->source) id="current" @endif
                                   >
                                   {{$childitem->menu_name}}

                                 </a></li>
                                        @endforeach
                                        </ul>
                                    <?php
                                }?>
                                </li>
                                @endif
                                <?php $right_menu_count++;?>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- END .header -->
