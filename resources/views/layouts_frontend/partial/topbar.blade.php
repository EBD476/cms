<p>toppar</p>

<nav class="navbar navbar-expand-lg bg-white fixed-top ">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit-pro/index.html" rel="tooltip"
               title="{{__('HANTA Smart Home')}}" data-placement="bottom" target="_blank">
                {{__('HANTA IBMS')}}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" data-nav-image="./assets/img//blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">
                @foreach(\App\Menu::all() as $menu)
                    @if($menu->label =='parent')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1"
                               data-toggle="dropdown">
                                <i class="now-ui-icons design_app"></i>
                                <p>{{$menu->name}}</p>
                            </a>

                            @endif
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    @foreach(\App\Menu::all() as $menu_item)
                                        @if($menu->name == $menu_item->parent_name )
                                            <div class="dropdown-menu dropdown-menu"
                                                 aria-labelledby="navbarDropdownMenuLink1">
                                                <a class="dropdown-item"
                                                   href="{{route('frontend.pages.test',$menu->items)}}">
                                                    <i class="now-ui-icons business_chart-pie-36"></i>
                                                    {{$menu_item->name}}
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </li>
                            </ul>

                        </li>
                        @endforeach
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"--}}
                               {{--data-toggle="dropdown">--}}
                                {{--<i class="now-ui-icons files_paper" aria-hidden="true"></i>--}}
                                {{--<p>Sections</p>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
                                {{--<a class="dropdown-item" href="./sections.html#headers">--}}
                                    {{--<i class="now-ui-icons shopping_box"></i>--}}
                                    {{--Headers--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#features">--}}
                                    {{--<i class="now-ui-icons ui-2_settings-90"></i>--}}
                                    {{--Features--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#blogs">--}}
                                    {{--<i class="now-ui-icons text_align-left"></i>--}}
                                    {{--Blogs--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#teams">--}}
                                    {{--<i class="now-ui-icons sport_user-run"></i>--}}
                                    {{--Teams--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#projects">--}}
                                    {{--<i class="now-ui-icons education_paper"></i>--}}
                                    {{--Projects--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#pricing">--}}
                                    {{--<i class="now-ui-icons business_money-coins"></i>--}}
                                    {{--Pricing--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#testimonials">--}}
                                    {{--<i class="now-ui-icons ui-2_chat-round"></i>--}}
                                    {{--Testimonials--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="./sections.html#contactus">--}}
                                    {{--<i class="now-ui-icons tech_mobile"></i>--}}
                                    {{--Contact Us--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                               data-toggle="dropdown">
                                <i class="now-ui-icons design_image" aria-hidden="true"></i>
                                <p>{{__('Gallery')}}</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                    <a class="dropdown-item" href="{{(route('frontend.gallery.index'))}}">
                                        <i class="now-ui-icons design_image"></i>
                                        {{__('Gallery')}}
                                    </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                               data-toggle="dropdown">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <p>{{__('Video')}}</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{(route('frontend.video.show'))}}">
                                    <i class="fab fa-youtube"></i>
                                    {{__('Video')}}
                                </a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-primary"
                               href="{{route('login')}}" target="_blank">
                                <p>{{__('Sing Up')}}</p>
                            </a>
                        </li>


            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->


