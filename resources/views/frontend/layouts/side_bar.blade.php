<div class="sidebar">
    <div class="site-width">

        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
            <li class="dropdown">
                <ul>
                    <li class="{{ getActiveClass(request()->segment(2),['dashboard']) }}">
                        <a href="/user/dashboard">
                            <i class="icon-rocket fa-fw"></i> Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a href="javascript:void(0);"> Submitted Proposals</a>
                <ul>
                    @can('student-project-proposal-list')
                        <li class="{{ getActiveClass(request()->segment(2),['research']) }}"><a class="text-nowrap" href="/user/research-projects"><i
                                        class="fas fa-scroll fa-fw"></i>
                                Research Project</a></li>
                    @endcan
                </ul>
            </li>
            @can('student-notification-list')
                <li class="dropdown"><a href="javascript:void(0);"> Notifications</a>
                    <ul>
                        <li class="{{ getActiveClass(request()->segment(2),['notifications']) }}"><a href="/user/notifications"><i class="icon-bag fa-fw"></i> Notifications</a></li>
                    </ul>
                </li>
            @endcan
        </ul>
        <!-- END: Menu-->
    </div>
</div>
