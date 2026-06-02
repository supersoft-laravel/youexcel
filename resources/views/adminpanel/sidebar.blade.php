<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="kt" class="brand-link">
        <img src="{{ asset('admin-panel/dist/img/Youexcel-logowhite.png') }}" alt="AdminLTE Logo" class="w-50" style="opacity: .8">
        <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                @can('view kpi dashboard')
                    <li class="nav-item">
                        <a href="{{ route('kpi-dashboard') }}" class="nav-link {{ request()->routeIs('kpi-dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>KPI Dashboard</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view course'])
                    <li class="nav-item">
                        <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-book-open"></i>
                            <p>Courses</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view trainer'])
                    <li class="nav-item">
                        <a href="{{ route('trainers.index') }}" class="nav-link {{ request()->routeIs('trainers.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>Trainers</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view event'])
                    <li class="nav-item">
                        <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Events</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view trusted company'])
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ request()->routeIs('trusted-company-categories.*') || request()->routeIs('trusted-companies.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Trusted Companies
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('trusted-company-categories.index') }}" class="nav-link">
                                    <i class="fas fa-folder nav-icon"></i>
                                    <p>Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('trusted-companies.index') }}" class="nav-link">
                                    <i class="fas fa-image nav-icon"></i>
                                    <p>Companies</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                
                @can(['view recognized logo'])
                    <li class="nav-item">
                        <a href="{{ route('recognized-logos.index') }}" class="nav-link {{ request()->routeIs('recognized-logos.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>Recognized Logos</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view webinar'])
                    <li class="nav-item">
                        <a href="{{ route('webinars.index') }}" class="nav-link {{ request()->routeIs('webinars.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-video"></i>
                            <p>Webinars</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view gallery'])
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ request()->routeIs('gallery_cat.*') || request()->routeIs('gallery_img.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Gallery
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('gallery_cat') }}" class="nav-link">
                                    <i class="fas fa-folder nav-icon"></i>
                                    <p>Gallery Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('gallery_img') }}" class="nav-link">
                                    <i class="fas fa-image nav-icon"></i>
                                    <p>Gallery Image</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                
                @can(['view calendar'])
                    <li class="nav-item">
                        <a href="{{ route('add.calendar') }}" class="nav-link {{ request()->routeIs('add.calendar') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar-plus"></i>
                            <p>Add Calendar</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view blog'])
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ request()->routeIs('blog-categories.*') || request()->routeIs('blogs.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-blog"></i>
                            <p>
                                Blogs
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    
                        <ul class="nav nav-treeview">
                    
                            <li class="nav-item">
                                <a href="{{ route('blog-categories.index') }}" class="nav-link">
                                    <i class="fas fa-tags nav-icon"></i>
                                    <p>Categories</p>
                                </a>
                            </li>
                    
                            <li class="nav-item">
                                <a href="{{ route('blogs.index') }}" class="nav-link">
                                    <i class="fas fa-newspaper nav-icon"></i>
                                    <p>Blogs</p>
                                </a>
                            </li>
                    
                        </ul>
                    </li>
                @endcan
                
                @can(['view career position'])
                    <li class="nav-item">
                        <a href="{{ route('career-positions.index') }}" class="nav-link {{ request()->routeIs('career-positions.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>Career Positions</p>
                        </a>
                    </li>
                @endcan
                
                @can(['view career connect'])
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link {{ request()->routeIs('admin.career-connect') || request()->routeIs('admin.career-connect-jobs') || request()->routeIs('admin.career-connect-candidates') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-network-wired"></i>
                            <p>
                                Career Connect
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.career-connect', 'student_alumni') }}" class="nav-link">
                                    <i class="fas fa-user-graduate nav-icon"></i>
                                    <p>Student & Alumni</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.career-connect', 'career_guidance') }}" class="nav-link">
                                    <i class="fas fa-lightbulb nav-icon"></i>
                                    <p>Career Guidance</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.career-connect', 'employer_partnership') }}" class="nav-link">
                                    <i class="fas fa-handshake nav-icon"></i>
                                    <p>Employer / Partnership</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.career-connect-jobs') }}" class="nav-link">
                                    <i class="fas fa-briefcase nav-icon"></i>
                                    <p>Career Connect Jobs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.career-connect-candidates') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Career Candidates</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                
                @can(['view corporate course'])
                    <li class="nav-item">
                        <a href="{{ route('program.name') }}" class="nav-link {{ request()->routeIs('program.name') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                                Add Corporate Course
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view lead form'])
                    <li class="nav-item">
                        <a href="{{ route('view.Leadform') }}" class="nav-link {{ request()->routeIs('view.Leadform') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Lead Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view demo confirmation form'])
                    <li class="nav-item">
                        <a href="{{ route('view.demo.form') }}" class="nav-link {{ request()->routeIs('view.demo.form') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>
                               Demo Confirmation Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view corporate lead'])
                    <li class="nav-item">
                        <a href="{{ route('corporate.leadform') }}" class="nav-link {{ request()->routeIs('corporate.leadform') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Corporate Lead Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view certificate request form'])
                    <li class="nav-item">
                        <a href="{{ route('admin.certificate-requests') }}" class="nav-link {{ request()->routeIs('admin.certificate-requests') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-certificate"></i>
                            <p>
                                Certificate Request Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view scholarship request form'])
                    <li class="nav-item">
                        <a href="{{ route('admin.scholarship-requests') }}" class="nav-link {{ request()->routeIs('admin.scholarship-requests') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-graduation-cap"></i>
                            <p>
                                Scholarship Request Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view registration form'])
                    <li class="nav-item">
                        <a href="{{ route('view.registered') }}" class="nav-link {{ request()->routeIs('view.registered') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                                Registration Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view popup'])
                    <li class="nav-item">
                        <a href="{{ route('resources.index') }}" class="nav-link {{ request()->routeIs('resources.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>
                                Popup Option 
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view feedback form'])
                    <li class="nav-item">
                        <a href="{{ route('view.feedback-form') }}" class="nav-link {{ request()->routeIs('view.feedback-form') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-comment-dots"></i>
                            <p>
                                Feedback Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view one minute feedback form'])
                    <li class="nav-item">
                        <a href="{{ route('admin.one-minute-feedbacks') }}" class="nav-link {{ request()->routeIs('admin.one-minute-feedbacks') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-stopwatch"></i>
                            <p>
                                One Minute Feedback Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view support form'])
                    <li class="nav-item">
                        <a href="{{ route('view.support-form') }}" class="nav-link {{ request()->routeIs('view.support-form') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                Support Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view careers form'])
                    <li class="nav-item">
                        <a href="{{ route('view.careers') }}" class="nav-link {{ request()->routeIs('view.careers') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Careers Form Data
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view get in touch form'])
                    <li class="nav-item">
                        <a href="{{ route('view.contactus') }}" class="nav-link {{ request()->routeIs('view.contactus') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-phone"></i>
                            <p>
                                Get in Touch
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view navttc registration form'])
                    <li class="nav-item">
                        <a href="{{ route('view.navttc-form-data') }}" class="nav-link {{ request()->routeIs('view.navttc-form-data') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                               NAVTTC Registartion Form
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view navttc enquiry form'])
                    <li class="nav-item">
                        <a href="{{ route('view.project.form') }}" class="nav-link {{ request()->routeIs('view.project.form') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-question-circle"></i>
                            <p>
                                NAVTTC Enquiry Form
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view bbshrrdb enquiry form'])
                    <li class="nav-item">
                        <a href="{{ route('view.bbshrrdb.form') }}" class="nav-link {{ request()->routeIs('view.bbshrrdb.form') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>
                                BBSHRRDB Enquiry Form
                            </p>
                        </a>
                    </li>
                @endcan
                
                @can(['view bbshrrdb registration form'])
                    <li class="nav-item">
                        <a href="{{ route('view.projectreg.form') }}" class="nav-link {{ request()->routeIs('view.projectreg.form') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                                BBSHRRDB Registartion Form
                            </p>
                        </a>
                    </li>
                @endcan
                @canany(['view user', 'view role', 'view permission'])
                    <li class="nav-item has-treeview mb-5">
                        <a href="#" class="nav-link {{ request()->routeIs('users.*') || request()->routeIs('roles.*') || request()->routeIs('permissions.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-network-wired"></i>
                            <p>
                                Roles & Permissions
                                <i class="fas fa-shield-lock right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @canany(['view user'])
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="fas fa-user-graduate nav-icon"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            @endcan
                            @canany(['view role'])
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class="fas fa-lightbulb nav-icon"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            @endcan
                            @canany(['view permission'])
                            <li class="nav-item">
                                <a href="{{ route('permissions.index') }}" class="nav-link">
                                    <i class="fas fa-handshake nav-icon"></i>
                                    <p>Permissions</p>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endcanany
                
                
                


                <!--<li class="nav-item">-->
                <!--    <a href="{{ route('demo.course.name') }}" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            Add Demo Course Name-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->

                <!--<li class="nav-item">-->
                <!--    <a href="{{ route('project.name') }}" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            Add Project Course Name-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->
                
                <!--<li class="nav-item">-->
                <!--    <a href="view-navttcform" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--         Summer of Code Lead Form Data-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->
                
                <!--<li class="nav-item">-->
                <!--    <a href="view-cfma-recorded" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            CFMA Recorded Form-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->
                
                <!--<li class="nav-item">-->
                <!--    <a href="view-free-reg-form-data" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            Free Education Form-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->

                <!--<li class="nav-item">-->
                <!--    <a href="View-assests-table" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-layer-group"></i>-->
                        <!--<i class="fa-solid fa-layer-group"></i>-->
                <!--        <p>-->
                <!--            Assesment TNA 2025&nbsp;&nbsp;-->
                <!--            <span class="right badge badge-danger">New</span>-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->
                
                <!--<li class="nav-item">-->
                <!--    <a href="View-kamyabjawan-form" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            Kamyab jawan Form-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->

                <!--<li class="nav-item">-->
                <!--    <a href="view-funnel" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            Funnel Form Data-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->

                <!--<li class="nav-item">-->
                <!--    <a href="view-freedemo" class="nav-link">-->
                <!--        <i class="nav-icon fas fa-book"></i>-->
                <!--        <p>-->
                <!--            Book Appointment Form-->
                <!--        </p>-->
                <!--    </a>-->
                <!--</li>-->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
