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
                            <li><a href="#">Lorem ipsum dolor.</a></li>
                            <li><a href="#">Ipsum mollitia dolore.</a></li>
                            <li><a href="#">Eius similique in.</a></li>
                            <li><a href="#">Aspernatur similique nesciunt.</a></li>
                            <li><a href="#">Laboriosam ad commodi.</a></li>
                        @endif
                        </ul>



