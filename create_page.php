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
        <div class="container">
            <div class="row g-4">
    
                <!-- Sidenav START -->
                <div class="col-lg-3 mx-0 px-0">
                    
                    <!-- Navbar START-->
                    <nav class="navbar navbar-expand-lg mx-0"> 
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
    
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body d-block px-2 px-lg-0">
                                <!-- Card START -->
                                <div class="card overflow-hidden">
                                    <!-- Cover image -->
                                    <div class="h-50px" style="background-image:url('https://social.webestica.com/assets/images/bg/01.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                        <!-- Card body START -->
                                        <div class="card-body pt-0">
                                            <div class="text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg mt-n5 mb-3">
                                                <a href="#!"><img class="avatar-img rounded border border-white border-3" src="https://social.webestica.com/assets/images/avatar/07.jpg" alt=""></a>
                                            </div>
                                            <!-- Info -->
                                            <h5 class="mb-0"> <a href="#!">Sam Lanson </a> </h5>
                                            <small>Web Developer at Webestica</small>
                                            <p class="mt-3">I'd love to change the world, but they won’t give me the source code.</p>
    
                                            <!-- User stat START -->
                                            <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">256</h6>
                                                    <small>Post</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">2.5K</h6>
                                                    <small>Followers</small>
                                                </div>
                                                <!-- Divider -->
                                                <div class="vr"></div>
                                                <!-- User stat item -->
                                                <div>
                                                    <h6 class="mb-0">365</h6>
                                                    <small>Following</small>
                                                </div>
                                            </div>
                                            <!-- User stat END -->
                                        </div>
    
                                        <!-- Divider -->
                                        <hr>
    
                                        <!-- Side Nav START -->
                                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/home-outline-filled.svg" alt=""><span>Feed </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile-connections.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/person-outline-filled.svg" alt=""><span>Connections </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/earth-outline-filled.svg" alt=""><span>Latest News </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="events.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/calendar-outline-filled.svg" alt=""><span>Events </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="groups.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/chat-outline-filled.svg" alt=""><span>Groups </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="notifications.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notifications </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="settings.html"> <img class="mx-2 h-20px fa-fw" src="https://social.webestica.com/assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings </span></a>
                                            </li>
                                        </ul>
                                        <!-- Side Nav END -->
                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer bg-white text-center py-2">
                                        <a class="btn btn-link btn-sm" href="my-profile.html">View Profile </a>
                                    </div>
                                </div>
                                <!-- Card END -->
    
                                <!-- Helper link START -->
                                <ul class="nav small mt-4 justify-content-center lh-1">
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-profile-about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="settings.html">Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank" href="https://support.webestica.com/login">Support </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="help.html">Help</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="privacy-and-terms.html">Privacy &amp; terms</a>
                                    </li>
                                </ul>
                                <!-- Helper link END -->
                                <!-- Copyright -->
                                <p class="small text-center mt-1">©2023 <a class="text-reset" target="_blank" href="https://www.webestica.com/"> Webestica </a></p>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar END-->
                </div>
                <!-- Sidenav END -->
    
                <!-- Main content START -->
                <div class="col-md-8 col-lg-8 gap-4 mt-2">
                        <!-- Create a page START -->
                        <div class="card">
                          <!-- Title START -->
                          <div class="card-header bg-white border-0 pb-0">
                            <h1 class="h4 card-title mb-0">Create a page</h1>
                          </div>
                          <!-- Title END -->
                          <!-- Create a page form START -->
                          <div class="card-body">
                            <form class="row g-3">
                              <!-- Page information -->
                              <div class="col-12">
                                <label class="form-label">Page name</label>
                                <input type="text" class="form-control" placeholder="Page name (Required)">
                                <small>Name that describes what the page is about.</small>
                              </div>
                              <!-- Display name -->
                              <div class="col-sm-6 col-lg-4">
                                <label class="form-label">Display name</label>
                                <input type="text" class="form-control" placeholder="Display name (Required)">
                              </div>
                              <!-- Email -->
                              <div class="col-sm-6 col-lg-4">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Email (Required)">
                              </div>
                              <!-- Category -->
                              <div class="col-sm-6 col-lg-4">
                                <label for="category" class="form-label">Category (required)</label>
                                <select id="category" class="form-select form-control" data-search-enabled="true">
                                    <option value="comedy">Comedy</option>
                                    <option value="education">Education</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="hotel">Hotel</option>
                                    <option value="technology">Technology</option>
                                    <option value="travel">Travel</option>
                                </select>
                              </div>
                            
                              <!-- Website URL -->
                              <div class="col-sm-6">
                                <label class="form-label">Website URL</label>
                                <input type="text" class="form-control" placeholder="https://www.webestica.com">
                              </div>
                              <!-- Phone number -->
                              <div class="col-lg-6">
                                <label class="form-label">Phone number</label>
                                <input type="text" class="form-control" placeholder="Phone number (Required)">
                              </div>
                              <!-- Page information -->
                              <div class="col-12">
                                <label class="form-label">About page</label>
                                <textarea class="form-control" rows="3" placeholder="Description (Required)"></textarea>
                                <small>Character limit: 300</small>
                              </div>
                              
                              <!-- Divider -->
                              <hr>
                
                              <!-- Social Links START -->
                              <div class="col-12 mt-3">
                                <h5 class="card-title mb-0">Social Links</h5>
                              </div>
                              <!-- Facebook -->
                              <div class="col-sm-6">
                                <label class="form-label">Facebook</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                          </svg>
                                    </span>
                                  <input type="text" class="form-control" placeholder="https://www.facebook.com">
                                </div>
                              </div>
                              <!-- Twitter -->
                              <div class="col-sm-6">
                                <label class="form-label">Twitter</label>
                                <div class="input-group">
                                  <span class="input-group-text border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                                    </svg>
                                  </span>
                                  <input type="text" class="form-control" placeholder="https://www.twitter.com">
                                </div>
                              </div>
                              <!-- Instagram -->
                              <div class="col-sm-6">
                                <label class="form-label">Instagram</label>
                                <div class="input-group">
                                  <span class="input-group-text border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                  </span>
                                  <input type="text" class="form-control" placeholder="https://www.instagram.com">
                                </div>
                              </div>
                              <!-- Pinterest -->
                              <div class="col-sm-6">
                                <label class="form-label">Pinterest</label>
                                <div class="input-group">
                                  <span class="input-group-text border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0"/>
                                    </svg>
                                  </span>
                                  <input type="text" class="form-control" placeholder="https://www.pinterest.com">
                                </div>
                              </div>
                              <!-- Button  -->
                              <div class="col-12 text-end mt-3">
                                <button type="submit" class="btn btn-primary mb-0">Create a page</button>
                              </div>
                            </form>
                          </div>
                          <!-- Create a page form END -->
                        </div>
                </div>
</body>
</html>