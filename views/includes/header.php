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

        <ul class="navbar-nav m-auto"> 
            <div class="block-search">
                <form method="POST" action="#">
                    <input type="search" name="chercher" id="chercher" class="form-control" placeholder="chercher..."> 
                    <button id="btn-chercher" type="submit" class="btn btn-light btn-sm" name="block-search">chercher</button>
                </form>   
            </div>

            <div class="block-fa-search">
                <i class="fa fa-search"></i>
            </div>
        </ul>
    
        <div class="navbar-nav ml-auto">
            <button onclick="document.location.href='login'" class="btn btn-indigo btn-sm">Se connecter </button> <span style="color: white; line-height: 40px;">ou</span> <button onclick="document.location.href='register'" class="btn btn-outline-indigo btn-sm" style="color: white !important;">S'inscrire </button>
        </div>

    </div>
</nav>









