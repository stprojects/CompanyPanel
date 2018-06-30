<div class="container">
    <ul id="authdropdown" class="dropdown-content darken-4 learn-nav">
        <li><a href="{{ url('/logout') }}">Wyloguj się</a></li>
    </ul>
    <a href="{{ url('/dashboard') }}" class="flow-text">Kreacja panel</a>
    <ul class="right hide-on-med-and-down">
        <li>
            <a class="dropdown-button" data-activates="authdropdown" href="#">
                {{ Auth::user()->name }}
                <i class="material-icons right">arrow_drop_down</i>
            </a>
        </li>
    </ul>
</div>