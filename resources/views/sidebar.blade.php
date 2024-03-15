<div id="left-nav" class="nano">
    <div class="nano-content">
        <nav>
            <ul class="nav nav-left-lines" id="main-nav">
                <!--HOME-->
                <li class="active-item"><a href="{{ route('dash') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                <!--UI ELEMENTENTS-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Companies</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('admin.companie.index') }}">Company Entry</a></li>
                    </ul>
                </li>
                <!--CHARTS-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Company Categories</span> </a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('admin.category.index') }}">Category Entry</a></li>
                    </ul>
                </li>
                <!--FORMS-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-columns" aria-hidden="true"></i><span>Jobs</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('admin.job.create') }}">Entry</a></li>
                        <li><a href="{{ route('admin.job.index') }}">All Joblist</a></li>
                        
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-columns" aria-hidden="true"></i><span>Blogs</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('admin.blog.create') }}">Entry/List</a></li>
                        {{-- <li><a href="{{ route('admin.job.index') }}">All Joblist</a></li> --}}
                        
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-columns" aria-hidden="true"></i><span>About</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('admin.about.create') }}">About Info</a></li>
                        {{-- <li><a href="{{ route('admin.job.index') }}">All Joblist</a></li> --}}
                        
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-columns" aria-hidden="true"></i><span>Profile</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('admin.profile.show') }}">Profile Setting</a></li>
                        {{-- <li><a href="{{ route('admin.job.index') }}">All Joblist</a></li> --}}
                        
                    </ul>
                </li>
                {{-- <!--TABLES-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-table" aria-hidden="true"></i><span>Tables</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="tables_basic.html">Basic</a></li>
                        <li><a href="tables_data-tables.html">DataTable</a></li>
                        <li><a href="tables_responsive.html">Responsive</a></li>
                    </ul>
                </li>
                <!--PAGES-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-files-o" aria-hidden="true"></i><span>Pages</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="pages_sign-in.html">Sign in</a></li>
                        <li><a href="pages_register.html">Register</a></li>
                        <li><a href="pages_lock-screen.html">Lock screen</a></li>
                        <li><a href="pages_forgot-password.html">Forgot password</a></li>
                        <li class="has-child-item close-item">
                            <a>Error pages</a>
                            <ul class="nav child-nav level-2 ">
                                <li><a href="pages_error-404-content.html">Error 404 content</a></li>
                                <li><a href="pages_error-404.html">Error 404 page</a></li>
                                <li><a href="pages_error-500.html">Error 500</a></li>
                            </ul>
                        </li>
                        <li><a href="pages_faq.html">FAQ</a></li>
                        <li><a href="pages_user-profile.html">User profile</a></li>
                        <li class="has-child-item close-item">
                            <a>Search results<span></a>
                            <ul class="nav child-nav level-2 ">
                                <li><a href="pages_search-results-list.html">List style</a></li>
                                <li><a href="pages_search-results-grid.html">Grid Style</a></li>
                            </ul>
                        </li>
                        <li class="has-child-item close-item">
                            <a>Projects<span></a>
                            <ul class="nav child-nav level-2 ">
                                <li><a href="pages_project-list.html">List</a></li>
                                <li><a href="pages_project-detail.html">Detail</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <!--WIDGETS-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Widgets</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="widgets_boxes.html">Boxes</a></li>
                        <li><a href="widgets_lists.html">Lists</a></li>
                        <li><a href="widgets_posts.html">Posts</a></li>
                        <li><a href="widgets_timelines.html">Timelines</a></li>
                    </ul>
                </li>
                <!--HELPERS-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-magic" aria-hidden="true"></i><span>Helpers</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="helpers_background-border.html">Background & Border</a></li>
                        <li><a href="helpers_margin-padding.html">Margin & Padding</a></li>
                    </ul>
                </li>
                <!--MENU LEVELS-->
                <li class=" has-child-item close-item">
                    <a>
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <span>Menu levels</span>
                    </a>
                    <ul class="nav child-nav level-1">
                        <li><a>First Item</a></li>
                        <li class="has-child-item close-item">
                            <a>Second Item</a>
                            <ul class="nav child-nav level-2 ">
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">Option 2</a></li>
                                <li class="has-child-item close-item">
                                    <a>Option 3</a>
                                    <ul class="nav child-nav level-3 ">
                                        <li><a href="#">Item 1</a></li>
                                        <li><a href="#">Item 2</a></li>
                                        <li><a href="#">Item 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a>Third Item</a></li>
                        <li class="has-child-item close-item">
                            <a>Fourth Item</a>
                            <ul class="nav child-nav level-2 ">
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">Option 2</a></li>
                                <li class="has-child-item close-item">
                                    <a>Option 3</a>
                                    <ul class="nav child-nav level-3 ">
                                        <li><a href="#">Item 1</a></li>
                                        <li><a href="#">Item 2</a></li>
                                        <li><a href="#">Item 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

                <!--DOCUMENTATION-->
                <li><a target="_blank" href="http://myiideveloper.com/helsinki/last-version/documentation/index.html"><i class="fa fa-book" aria-hidden="true"></i><span>Online Documentation</span></a></li>

            </ul>
        </nav>
    </div>
</div>