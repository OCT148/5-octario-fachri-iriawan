<nav id='menu'>
    <ul>
        <li>
        <a href='{{ route('services') }}'>
            <img src="{{asset('logo.png')}}" alt="logo" width="160" height="30">
        </a>
        
        </li>
        <li><a class='dropdown-arrow' href='{{ route('services') }}'>Services</a>
            <ul class='sub-menus'>
                <li><a href='{{ route('services.build') }}'>Build</a></li>
                <li><a href='{{ route('services.repair') }}'alt>Repair</a></li>
                <li><a href='{{ route('services.upgrade') }}'>Upgrade</a></li>
            </ul>
        </li>
    </ul>
  </nav>