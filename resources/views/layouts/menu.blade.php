<li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tableau de bprd</span>
    </a>
</li>
<li class="nav-item {{ Request::is('lots*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('lots.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Lots</span>
    </a>
</li>
<li class="nav-item {{ Request::is('poulayers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('poulayers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Poulayers</span>
    </a>
</li>
