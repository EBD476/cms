<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url({{asset('img/user-info.jpg')}}">
            <!-- User profile image -->
            <div class="profile-img"><img src="../assets/images/users/profile.png" alt="user"/></div>
            <!-- User profile text-->
            <div class="profile-text"><a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                                         role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY"><a href="#" class="dropdown-item"><i class="ti-user"></i>
                        My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i>
                        Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i>
                        Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{--<li class="nav-small-cap">{{__('PERSONAL')}}</li>--}}
                <!-- dashboard access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Dashboard')}} </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a></li>
                    </ul>
                </li>
                <!-- User access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('User')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('user.index')}}">{{__('User List')}}</a></li>
                        <li><a href="{{route('user.create')}}">{{__('Create User')}}</a></li>
                    </ul>
                </li>
                <!-- news access -->
                {{--<li class="nav-devider"></li>--}}
                {{--<li class="nav-small-cap">{{__('News')}}</li>--}}
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('News')}} </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('news.index')}}">{{__('News List')}}</a></li>
                        <li><a href="{{route('news.create')}}">{{__('Create News')}}</a></li>
                    </ul>
                </li>
                 <!-- Article access -->
                {{--<li class="nav-devider"></li>--}}
                {{--<li class="nav-small-cap">{{__('Article')}}</li>--}}
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Article')}} </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('publish.index')}}">{{__('Article List')}}</a></li>
                        <li><a href="{{route('publish.create')}}">{{__('Create Article')}}</a></li>
                    </ul>
                </li>
                {{--<li class="nav-devider"></li>--}}
                {{--<li class="nav-small-cap">{{__('Device')}}</li>--}}
                <!-- product access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Product')}} </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('product.index')}}">{{__('Product List')}}</a></li>
                        <li><a href="{{route('product.create')}}">{{__('Create Product')}}</a></li>
                    </ul>
                </li>
                <!-- Project access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Project')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('project.index')}}">{{__('Project List')}}</a></li>
                        <li><a href="{{route('project.create')}}">{{__('Create Project')}}</a></li>
                    </ul>
                </li>
                <!-- dealership access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Dealership')}} </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('dealership.index')}}">{{__('Dealership List')}}</a></li>
                        <li><a href="{{route('dealership.create')}}">{{__('Create Dealership')}}</a></li>
                    </ul>
                </li>
                <!-- Device access -->
                {{--<li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i--}}
                                {{--class="mdi mdi-gauge"></i><span--}}
                                {{--class="hide-menu">{{__('Device')}} </span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="{{route('devices.index')}}">{{__('Device')}}</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <!-- Config access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Config')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('config.index')}}">{{__('Config List')}}</a></li>
                        <li><a href="{{route('config.create')}}">{{__('Create Config')}}</a></li>
                    </ul>
                </li>
                <!-- Menu access -->
                <!-- Setting access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Setting')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('setting.create')}}">{{__('Setting')}}</a></li>
                    </ul>
                </li>
                <!-- page access -->
                    <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Pages')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('pages.index')}}">{{__('View List Pages')}}</a></li>
                        @foreach(App\Menu::ALL() as $menu)
                                    <li><a href="{{route('frontend.pages.test',$menu->items)}}">{{$menu->name}}</a></li>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- FAQ access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('FAQ')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('faq.index')}}">{{__('FAQ List')}}</a></li>
                        <li><a href="{{route('faq.create')}}">{{__('Create FAQ')}}</a></li>
                    </ul>
                </li>
                 <!-- Menu access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span
                                    class="hide-menu">{{__('Menu')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('menu.index')}}">{{__('Menu List')}}</a></li>
                            <li><a href="{{route('menu.create')}}">{{__('Create Menu')}}</a></li>
                        </ul>
                </li>
                 <!-- Gallery access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span
                                    class="hide-menu">{{__('Gallery')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('menu.index')}}">{{__('Gallery')}}</a></li>
                        </ul>
                </li>
                {{--<li class="nav-devider"></li>--}}
                {{--<li class="nav-small-cap">{{__('Slider')}}</li>--}}
                <!-- Slider access -->
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Component')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('slider.index')}}">{{__('Slider List')}}</a></li>
                        <li><a href="{{route('slider.create')}}">{{__('Create Slider')}}</a></li>

                    </ul>
                </li>
                 <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Contact Us')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('contact_us.index')}}">{{__('show list')}}</a></li>
                        <li><a href="{{route('contact_us.create')}}">{{__('Contact Us')}}</a></li>
                    </ul>
                </li>
                 <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                class="mdi mdi-gauge"></i><span
                                class="hide-menu">{{__('Maintenance')}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.up')}}">{{__('Up Web')}}</a></li>
                        <li><a href="{{route('admin.down')}}">{{__('Down Web')}}</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>