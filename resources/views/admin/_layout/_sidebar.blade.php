<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey">
            <a href="{{ route('admin.dashboard') }}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Dashboard</span>
            </a>
        </li>

        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Members</span>
	            </span>
            <ul>
                <li><a href="{{ route('admin.users.index') }}"><span class="lbl">Users</span></a></li>
                <li><a href="{{ route('admin.providers.index') }}"><span class="lbl">Providers</span></a></li>
            </ul>
        </li>

        <li class="grey">
            <a href="{{ route('admin.dashboard') }}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Account Statement</span>
            </a>
        </li>

        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Details</span>
	            </span>
            <ul>
                <li><a href="#"><span class="lbl">Map</span></a></li>
                <li><a href="#"><span class="lbl">Rating & Reviews</span></a></li>
            </ul>
        </li>


        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Requests</span>
	            </span>
            <ul>
                <li><a href="#"><span class="lbl">Request History</span></a></li>
                <li><a href="#"><span class="lbl">Schedule Rides</span></a></li>
            </ul>
        </li>

        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">General</span>
	            </span>
            <ul>
                <li><a href="{{ route('admin.services.index') }}"><span class="lbl">Service Types</span></a></li>
                <li><a href="{{ route('admin.documents.index') }}"><span class="lbl">Documents</span></a></li>
                <li><a href="{{ route('admin.promocodes.index') }}"><span class="lbl">PromoCode</span></a></li>
            </ul>
        </li>

        <li class="grey with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Payment Details</span>
	            </span>
            <ul>
                <li><a href="#"><span class="lbl">Payment History</span></a></li>
                <li><a href="#"><span class="lbl">Payment Setting</span></a></li>
            </ul>
        </li>

        <li class="grey">
            <a href="{{ route('admin.settings.index') }}">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Setting</span>
            </a>
        </li>

    </ul>
</nav><!--.side-menu-->