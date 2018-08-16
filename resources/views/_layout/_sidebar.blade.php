<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
    <ul class="side-menu-list">

        @can('edit branches')
            <li class="red">
                <a href="{{ route('admin.branches.index') }}">
                    <i class="font-icon glyphicon glyphicon-th"></i>
                    <span class="lbl">Classes</span>
                </a>
            </li>
        @endcan


        @can('edit teachers')
            <li class="red">
                <a href="{{ route('admin.teachers.index') }}">
                    <i class="font-icon font-icon-user"></i>
                    <span class="lbl">Teachers</span>
                </a>
            </li>
        @endcan

        @can('edit students')
            <li class="red">
                <a href="{{ route('admin.students.index') }}">
                    <i class="font-icon font-icon-user"></i>
                    <span class="lbl">Students</span>
                </a>
            </li>
        @endcan

        @can('edit events')
            <li class="magenta">
                <a href="{{ route('admin.events.index') }}">
                    <i class="font-icon font-icon-calend"></i>
                    <span class="lbl">Events</span>
                </a>
            </li>
        @endcan

        @can('edit news')
            <li class="red">
                <a href="{{ route('admin.news.index') }}">
                    <i class="font-icon fa fa-newspaper-o"></i>
                    <span class="lbl">News</span>
                </a>
            </li>
        @endcan

        @can('edit holidays')
            <li class="red">
                <a href="{{ route('admin.holidays.index') }}">
                    <i class="font-icon fa fa-calendar-o"></i>
                    <span class="lbl">Holidays</span>
                </a>
            </li>
        @endcan

        @can('edit meals')
            <li class="red">
                <a href="{{ route('admin.meals.index') }}">
                    <i class="font-icon font-icon-alarm"></i>
                    <span class="lbl">Meals</span>
                </a>
            </li>
        @endcan

        @can('edit rhymes')
            <li class="red">
                <a href="{{ route('admin.rhymes.index') }}">
                    <i class="font-icon glyphicon glyphicon-send"></i>
                    <span class="lbl">Rhymes</span>
                </a>
            </li>
        @endcan

        @can('edit notifications')
            <li class="red">
                <a href="{{ route('admin.notifications.index') }}">
                    <i class="font-icon glyphicon glyphicon-send"></i>
                    <span class="lbl">Notifications</span>
                </a>
            </li>
        @endcan

        @can('edit gallery')
            <li class="gold">
                <a href="{{ route('admin.gallery.index') }}">
                    <i class="font-icon font-icon-picture-2"></i>
                    <span class="lbl">Gallery</span>
                </a>
            </li>
        @endcan

    </ul>

</nav><!--.side-menu-->