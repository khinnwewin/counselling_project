@if(Auth::user()->usertype == 'ADMIN')
<li class="{{ Request::is('user*') ? 'active' : '' }}">
    <a href="{{ route('user.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
@endif

@if(Auth::user()->usertype == 'Counseller' )

<li class="{{ Request::is('category*') ? 'active' : '' }}">
    <a href="{{ route('category.index') }}"><i class="fa fa-edit"></i><span>Category</span></a>
</li>
@endif

@if(Auth()->user()->usertype == 'Counseller' || Auth::user()->usertype == 'ADMIN' )

<li class="{{ Request::is('appointment*') ? 'active' : '' }}">
    <a href="{{ route('appointment.index') }}"><i class="fa fa-edit"></i><span>Appointments</span></a>
</li>
@endif