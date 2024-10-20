@guest
<ul class="nav nav-pills nav-fill bg-dark shadow-sm p-3 mb-5 rounded" id="navId" role="tablist">
    {{-- guest estas como invitado --}}
    {{-- si no esta autentificado --}}
    <li class="nav-item" role="presentation">
        <a href="{{route('login')}}" class="nav-link">
            <i class="fas fa-sign-in-alt"></i> Acerca de
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('login')}}" class="nav-link">
            <i class="fas fa-sign-in-alt"></i> contáctanos
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('login')}}" class="nav-link">
            <i class="fas fa-sign-in-alt"></i> Ayuda
        </a>
    </li>
    
    <li class="nav-item" role="presentation">
        <a href="{{route('login')}}" class="nav-link">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
    </li>
    
</ul>

@section("footer")
<p>
    <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">Composer</a> /
    <a href="https://laravel.com/docs/11.x/eloquent" target="_blank">Eloquent</a> /
    <a href="https://laravel.com" target="_blank">Laravel</a> /
    <a href="https://nodejs.org/en/" target="_blank">Node.js</a> /
    <a href="https://www.php.net" target="_blank">PHP</a>
</p>

@endsection

@endguest

@auth
<!-- Nav tabs -->


<ul class="nav nav-pills nav-fill bg-dark shadow-sm p-3 mb-5 rounded" id="navId" role="tablist">
 
    <li class="nav-item" role="presentation">
        <a href="{{route('catalogos')}}" class="nav-link">
            <i class="fas fa-home"></i> Catalogos
        </a>
        
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('horarios')}}" class="nav-link">
            <i class="fas fa-tshirt"></i> Horarios
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('proyectos')}}" class="nav-link">
            <i class="fas fa-female"></i> Proyectos individuales
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="" class="nav-link">
            <i class="fas fa-male"></i> Instrumentación
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="" class="nav-link">
            <i class="fas fa-shoe-prints"></i> Tutorias
        </a>
    </li>
    <div class="btn-group">
        <button
            class="btn btn-dark dropdown-toggle"
            type="button"
            id="triggerId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
        >
            Periodo
        </button>
        <div
            class="dropdown-menu dropdown-menu-start"
            aria-labelledby="triggerId"
        >
            <a class="dropdown-item" href="#">Ene-Jun 24</a>
            <a class="dropdown-item" href="#">Ago-Dic 24</a>
            <a class="dropdown-item" href="#">Ene-Jun 25</a>
            
        </div>
    </div>
    <li class="nav-item" role="presentation">
        <form action="{{route('logout')}}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </li>
</ul>

@section("footer")
<p>
    <p>Nombre de usuario: {{ Auth::user()->name }}</p>
            <p>Email: {{ Auth::user()->email }}</p> 
</p>

@endsection


@endauth

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<script>
    var triggerEl = document.querySelector("#navId a");
    bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>



