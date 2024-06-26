<div class="top-bar">
    <div class="top-bar-image">
        <img src="{{ asset('images/talland-college-logo.png') }}" alt="Logo" class="logo">
    </div>
</div>
<div class="hamburger">
    <div></div>
    <div></div>
    <div></div>
</div>
<nav class="sidebar">
    <div class="logo-container">
        <img src="{{ asset('images/talland-college-logo.png') }}" alt="Logo" class="logo">
    </div>
    <ul>
        <li><a href="/dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a></li>
        <li><a href="/dashboard/projecten"><i class="fa-solid fa-diagram-project"></i>Projecten</a></li>
        <li><a href="/dashboard/beoordelen"><i class="fa-solid fa-list-check"></i>Beoordelen</a></li>
        <li><a href="/dashboard/profiel"><i class="fa-solid fa-user"></i>Profiel</a></li>
        <li>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
            <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>Uitloggen
            </a>
        </li>
    </ul>
</nav>
