<nav class="mb-1 navbar navbar-expand-lg navbar-dark indigoDK lighten-0">

    <a class="navbar-brand" href="home">MisouA</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="home">Acceuil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Decouvrir</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        
        </ul>

       <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle m-0 p-0 animated flash " id="myNav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user fa-2x text-white"></i> <?= ucfirst($_SESSION['user']['nom']) ?> </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="myNav">
                <a class="dropdown-item" href="publish" >Publier</a>
                <a class="dropdown-item" onclick="document.location.href='dashboard' ">Mon androit</a>
                <a class="dropdown-item" onclick="document.location.href='logout' " > Logout</a>
            </div>
        </li>
    </ul>
                                   
    </div>

    
</nav>


