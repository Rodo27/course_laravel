<header>
    <h1>Coders free</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            
            <li>
                <a href="{{route('courses.index')}}" class="{{request()->routeIs('courses.*') ? 'active' : ''}}">Courses</a>
            </li>
                
            <li>
                <a href="{{route('aboutus')}}" class="{{request()->routeIs('aboutus') ? 'active' : ''}}">AboutUs</a>
            </li>

            <li>
                <a href="{{route('contactus.index')}}" class="{{request()->routeIs('contactus') ? 'active' : ''}}">Contact Us</a>
            </li>
        </ul>
    </nav>
</header>