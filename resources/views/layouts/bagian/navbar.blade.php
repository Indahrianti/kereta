<div class="navbar-header">
    <a class="navbar-brand" href="#">Startmin</a>
</div>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

<ul class="nav navbar-nav navbar-left navbar-top-links">
    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
</ul>

<ul class="nav navbar-right navbar-top-links">
    <li class="dropdown navbar-inverse">
       
        
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-user">
            
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out fa-fw"></i> Logout</a>
         </li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
        </ul>
    </li>
</ul>
