
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container px-4">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="margin-right: 10px;">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link" href="create_page.php">Create Page</a>
                    </li>
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link" href="message.php">Message</a>
                    </li>
                    <?php
                    // Vérifier si l'utilisateur est connecté (exemple de vérification de session)
                    session_start();
                    if (!isset($_SESSION['user_id'])) {
                        // Afficher ces éléments uniquement si l'utilisateur n'est pas connecté
                        ?>
                        <li class="nav-item" style="margin-right: 10px;">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item" style="margin-right: 10px;">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item" style="margin-right: 10px;">
                            <a class="nav-link" href="forgot.php">Forgit Password</a>
                        </li>
                    <?php } else { ?>
                        <!-- Afficher ce lien si l'utilisateur est connecté -->
                        <li class="nav-item" style="margin-right: 10px;">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </nav>