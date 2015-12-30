@section('nav')
    <div class="col-md-3">
        
            <li>
                <a href="/welcome" class="{{ Request::is('welcome') ? 'active':'' }}">
                    <i class="fa fa-user"></i> 
                    Home
                </a>
            </li>
    ​
            <li>
                <a href="/explore" class="{{ Request::is('explore') ? 'active':'' }}">
                    <i class="fa fa-calendar"></i> 
                    Explore
                </a>
            </li>
    ​
            <li>
                <a href="/tabHub" class="{{ Request::is('tabHub') ? 'active':'' }}">
                    <i class="fa fa-gift"></i> 
                    TabHub
                </a>
            </li>
    ​
            
    </div>
@endsection
