<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(2) == 'dashboard') active-label @endif" href="{{ route('dashboard') }}">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
        </a>
    </li>
</ul>


<p class="text-muted nav-heading mt-1 mb-1">
    <span>Project Management</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
{{-- 
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'project-management') active-label @endif"
            href="{{ route('project-management.index') }}">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">Project Management</span>
        </a>
    </li> --}}
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'schedule-consultant') active-label @endif"
            href="{{ route('schedule-consultant.index') }}">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">Schedule</span>
        </a>
    </li>

    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'project-status-consultant') active-label @endif"
            href="{{ route('project-status-consultant.index') }}">
            <i class="fe fe-briefcase fe-16"></i>
            <span class="ml-3 item-text">Project Status</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'report-schedule-monthly') active-label @endif"
            href="{{ route('report-schedule-monthly.index') }}">
            <i class="fe fe-check-circle fe-16"></i>
            <span class="ml-3 item-text">Report Schedule Monthly</span>
        </a>
    </li>
</ul>

{{-- <p class="text-muted nav-heading mt-1 mb-1">
    <span>Setting</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'phase') active-label @endif"
            href="{{ route('phase.index') }}">
            <i class="fe fe-layers fe-16"></i>
            <span class="ml-3 item-text">Data Phase</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'activity') active-label @endif"
            href="{{ route('activity.index') }}">
            <i class="fe fe-clipboard fe-16"></i>
            <span class="ml-3 item-text">Data Activity</span>
        </a>
    </li>
</ul> --}}

{{-- <ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#consultant-activity" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">Consultant Activity</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 @if (Request::segment(3) == 'consultant-activity') show @endif"
            id="consultant-activity">
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'schedule-consultant') active-label @endif"
                    href="{{ route('schedule-consultant.index') }}">
                    <span class="ml-1 item-text">Input Schedule</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'parking-consultant') active-label @endif"
                    href="{{ route('parking-consultant.index') }}">
                    <span class="ml-1 item-text">Add Parking</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'reporting-consultant') active-label @endif"
                    href="{{ route('reporting-consultant.index') }}">
                    <span class="ml-1 item-text">Submit Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1  @if (Request::segment(4) == 'availability-consultant') active-label @endif"
                    href="{{ route('availability-consultant.index') }}">
                    <span class="ml-1 item-text">Availability of Consultant</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#consultant-report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">Consultant Report</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 @if (Request::segment(3) == 'consultant-report') show @endif" id="consultant-report">
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'project-assign-consultant') active-label @endif" href="{{ route('project-assign-consultant.index') }}">
                    <span class="ml-1 item-text">List of Project Assign</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'chargeable-consultant') active-label @endif" href="{{ route('chargeable-consultant.index') }}">
                    <span class="ml-1 item-text">Chargeable Rate</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'project-status-consultant') active-label @endif" href="{{ route('project-status-consultant.index') }}">
                    <span class="ml-1 item-text">Project & Training Status</span>
                </a>
            </li>
        </ul>
    </li>
</ul> 

<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#consultant-general-report" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">General Report</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 " id="consultant-general-report">
            <li class="nav-item">
                <a class="nav-link pl-1 " href="{{ route('comission-consultant.index') }}">
                    <span class="ml-1 item-text">Commission</span>
                </a>
            </li>
        </ul>
    </li>
</ul> --}}
