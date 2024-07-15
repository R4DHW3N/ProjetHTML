<?php
// Démarrer la session pour accéder aux informations de l'utilisateur
session_start();

// Vérifiez si l'utilisateur est connecté en vérifiant la présence de ses informations dans la session
if (isset($_SESSION['user_id'])) {
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
} else {
    // Redirigez l'utilisateur vers la page de login s'il n'est pas connecté
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiktagram</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container" style="margin-top: 80px !important;">
        <div class="row">
            <!-- Amis (col-md-3) -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title">Liste d'amis</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar avatar-story">
                                  <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/10.jpg" alt="">
                                </div>
                                <div class="flex-grow-1 d-block mx-2">
                                  <h6 class="mb-0 mt-1">Frances Guerrero</h6>
                                  <div class="small text-secondary">Frances sent a photo.</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar">
                                  <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt="">
                                </div>
                                <div class="flex-grow-1 d-block mx-2">
                                  <h6 class="mb-0 mt-1">Carolyn Ortiz</h6>
                                  <div class="small text-secondary">You missed a call form🤙</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar avatar-story">
                                  <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/12.jpg" alt="">
                                </div>
                                <div class="flex-grow-1 d-block mx-2">
                                  <h6 class="mb-0 mt-1">Billy Vasquez</h6>
                                  <div class="small text-secondary">Day sweetness 😊</div>
                                </div>
                            </div>
                        </li>
                        <!-- Ajoutez plus d'amis au besoin -->
                    </ul>
                </div>
            </div>
    
            <!-- Messages (col-md-8) -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title">Messages</h5>
                    </div>
                    <div class="card-body">
                        <!-- Zone pour afficher les messages -->
                        <div class="message-box">
                            <!-- Les messages pour l'ami sélectionné seront affichés ici -->
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type your message...">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>