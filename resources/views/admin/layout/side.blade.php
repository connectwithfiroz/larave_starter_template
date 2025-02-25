            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar toggle-sidebar">
                <div class="app-sidebar__user">
                    @php
                        $admin = Auth::guard('admin')->user();
                    @endphp 
                    <div class="user-body">
                        <img src="{{ (empty($admin->image)) ? asset('no-image.jpg') : asset('uploads/admins/'.$admin->image) }}"
                            alt="profile-user" class="rounded-circle w-25 h-25">
                    </div>
                    <div class="user-info">
                        <a href="#" class=""><span class="app-sidebar__user-name font-weight-semibold">
                                {{ $admin->firstname }}</span><br>
                            <span class="text-muted app-sidebar__user-designation text-sm">Admin</span>
                        </a>
                    </div>
                </div>
                <ul class="side-menu toggle-menu">
                    <li>
                        <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hidden="true"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="side-menu__item {{ Request::routeIs('donations.index') ? 'active' : '' }}" href="{{ route('donations.index') }}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hidden="true"></i>
                            <span class="side-menu__label">Donation</span>
                        </a>
                    </li>
                    <li>
                        <a class="side-menu__item {{ Request::routeIs('admin.volunteer.index') ? 'active' : '' }}" href="{{ route('admin.volunteer.index') }}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hiddfen="true"></i>
                            <span class="side-menu__label">Volunteer</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <i class="side-menu__icon fa fa-youtube-play" aria-hidden="true"></i>
                            <span class="side-menu__label">News & Article</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li>
                                <a class="slide-item " href="{{ route('news.create') }}">
                                    <span>Add News</span>
                                </a>
                            </li>
                            <li>
                                <a class="slide-item" href="{{ route('news.index') }}">
                                    <span>View News</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">
                            <i class="side-menu__icon fa fa-youtube-play" aria-hidden="true"></i>
                            <span class="side-menu__label">Products</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li>
                                <a class="slide-item " href="{{ route('products.create') }}">
                                    <span>Add Product</span>
                                </a>
                            </li>
                            <li>
                                <a class="slide-item" href="{{ route('products.index') }}">
                                    <span>View Products</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="slide d-none">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-picture-o" aria-hidden="true"></i>
                            <span class="side-menu__label">Banners</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{ route('add-banner') }}"><span>Add Banner</span></a></li>
                            <li><a class="slide-item" href="{{ route('view-banner') }}"><span>View Banner</span></a>
                            </li>

                        </ul>
                    </li>


                    <li class="slide d-none">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-user" aria-hidden="true"></i>
                            <span class="side-menu__label">Testimonial</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item {{ Request::routeIs('add-testimonial') ? 'active' : '' }}" href="{{ route('add-testimonial') }}"><span>Add
                                        Testimonial</span></a></li>
                            <li><a class="slide-item  {{ Request::routeIs('view-testimonial') ? 'active' : '' }}" href="{{ route('view-testimonial') }}"><span>View
                                        Testimonial</span></a></li>

                        </ul>
                    </li>



                    <li class="slide d-none">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-users" aria-hidden="true"></i>
                            <span class="side-menu__label">Blog</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{ route('add-blog') }}"><span>Add Blog</span></a></li>
                            <li><a class="slide-item" href="{{ route('view-blog') }}"><span>View Blog</span></a></li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-list" aria-hidden="true"></i>
                            <span class="side-menu__label">FAQ</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{ route('add-faq') }}"><span>Add FAQ</span></a></li>
                            <li><a class="slide-item" href="{{ route('view-faq') }}"><span>View FAQ</span></a></li>

                        </ul>
                    </li>







                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-user" aria-hidden="true"></i>
                            <span class="side-menu__label">Admin Profile</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li>
                                <a class="slide-item" href="{{ route('admin-profile') }}">
                                    <span>View Admin Profile</span>
                                </a>
                                <a class="slide-item" href="{{ route('admin.logout') }}">
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                </ul>
            </aside>

            <!-- Header End -->
