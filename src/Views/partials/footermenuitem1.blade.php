<?php
        $menu_items1 = ExtensionsValley\Menumanager\Models\Menuitems::getAllMenusWithType($position,$menu_type);

?>


                        <ul class="fh5co-footer-links">
                          @if(sizeof($menu_items1))
                            @foreach($menu_items1 as $menuitem)
                                @if($menuitem->parent_menu == 0)
                            <li @if(Request::path() === $menuitem->source) class="active" @endif>
                            <a @if($menuitem->is_new_tab == 1) target='_blank' @endif
                               href="{{url("$menuitem->source")}}">                               {{$menuitem->menu_name}}
                             </a>
                                </li>
                                @endif
                            @endforeach
                        @else
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Career</a></li>
                        @endif
                        </ul>



