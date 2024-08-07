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
                                            <h5 class="mb-0"> <a href="#!"> <?php echo $nom . ' ' . $prenom; ?> </a> </h5>
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
                <div class="col-md-8 col-lg-6 vstack gap-4">
    
                    <!-- Story START -->
                    <div class="d-flex gap-2 mb-n3">
                        <div class="position-relative">
                            <div class="card border border-2 border-dashed h-150px px-4 px-sm-5 shadow-none d-flex align-items-center justify-content-center text-center" style="border: 2px dashed !important;border-color: darkgray !important;">
                                <div>
                                    <a class="stretched-link btn btn-light rounded-circle icon-md" href="#!"><i class="fa-solid fa-plus"></i></a>
                                    <h6 class="mt-2 mb-0 small">Post a Story</h6>
                                </div>
                            </div>
                        </div>
    
                        <!-- Stories -->
                        <div id="stories" class="storiesWrapper stories-square stories user-icon carousel scroll-enable stories user-icon carousel snapgram "><div class="story " data-id="user-1" data-photo="assets/images/post/1by1/02.jpg" data-last-updated="1707501021.472">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/post/1by1/02.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Judy Nguyen</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                  <ul class="items"><li class="" data-id="user1-story1"><a href="https://social.webestica.com/assets/images/albums/01.jpg" data-link="" data-linktext="" data-time="1707501021.472" data-type="photo" data-length="5">
                        <img loading="auto" src="">
                      </a></li><li class="" data-id="user1-story2"><a href="https://social.webestica.com/assets/images/videos/video-call.mp4" data-link="" data-linktext="" data-time="1707501021.472" data-type="video" data-length="">
                        <img loading="auto" src="">
                      </a></li><li class="" data-id="user1-story3"><a href="https://social.webestica.com/assets/images/albums/02.jpg" data-link="https://webestica.com/" data-linktext="Visit my Portfolio" data-time="1707501021.472" data-type="photo" data-length="5">
                        <img loading="auto" src="">
                      </a></li></ul>
                </div><div class="story " data-id="user-2" data-photo="https://social.webestica.com/assets/images/post/1by1/03.jpg" data-last-updated="1707501021.472">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/post/1by1/03.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Billy Vasquez</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                <ul class="items">
                    <li class="" data-id="user2-story1">
                        <a href="https://social.webestica.com/assets/images/albums/03.jpg" data-link="" data-linktext="" data-time="1707501021.472" data-type="photo" data-length="5">
                            <img loading="auto" src="">
                        </a>
                    </li>
                </ul>
                </div><div class="story " data-id="user-3" data-photo="assets/images/post/1by1/04.jpg" data-last-updated="1707501021.472">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/post/1by1/04.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Amanda Reed</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                  <ul class="items"><li class="" data-id="user3-story1"><a href="https://social.webestica.com/assets/images/albums/04.jpg" data-link="" data-linktext="" data-time="1707501021.472" data-type="photo" data-length="5">
                        <img loading="auto" src="">
                      </a></li></ul>
                </div><div class="story " data-id="user-4" data-photo="https://social.webestica.com/assets/images/post/1by1/05.jpg" data-last-updated="1707501021.472">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/post/1by1/05.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Lori Stevens</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                  <ul class="items"><li class="" data-id="user4-story1"><a href="https://social.webestica.com/assets/images/albums/05.jpg" data-link="" data-linktext="" data-time="1707501021.472" data-type="photo" data-length="5">
                        <img loading="auto" src="">
                      </a></li></ul>
                </div><div class="story " data-id="user-5" data-photo="https://social.webestica.com/assets/images/post/1by1/06.jpg" data-last-updated="1707501021.472">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/post/1by1/06.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Samuel Bishop</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                  <ul class="items"><li class="" data-id="user5-story1"><a href="https://social.webestica.com/assets/images/albums/06.jpg" data-link="" data-linktext="" data-time="1707501021.472" data-type="photo" data-length="5">
                        <img loading="auto" src="">
                      </a></li></ul>
                </div><div class="story " data-id="user-6" data-photo="assets/images/post/1by1/07.jpg" data-last-updated="1707501021.472">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/post/1by1/07.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Joan Wallace</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                  <ul class="items"><li class="" data-id="user6-story1"><a href="https://social.webestica.com/assets/images/albums/06.jpg" data-link="" data-linktext="" data-time="1707501021.472" data-type="photo" data-length="5">
                        <img loading="auto" src="">
                      </a></li></ul>
                </div><div class="story " data-id="user-7" data-photo="assets/images/albums/05.jpg" data-last-updated="">
                  <a class="item-link" href="">
                    <span class="item-preview">
                      <img lazy="eager" src="https://social.webestica.com/assets/images/albums/05.jpg">
                    </span>
                    <span class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                      <strong class="name" itemprop="name">Carolyn Ortiz</strong>
                      <span class="time"></span>
                    </span>
                  </a>
                  
                  <ul class="items"><li class="" data-id="user7-story1"><a href="https://social.webestica.com/assets/images/albums/05.jpg" data-link="" data-linktext="" data-time="" data-type="photo" data-length="3">
                        <img loading="auto" src="">
                      </a></li></ul>
                </div></div>
                    </div>
            <!-- Story END -->
    
                    <!-- Share feed START -->
                    <div class="card card-body">
                        <div class="d-flex mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs mx-2">
                                <a href="#"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/03.jpg" alt=""> </a>
                            </div>
                            <!-- Post input -->
                            <form class="w-100">
                                <textarea class="form-control pe-4 border-0" rows="2" data-autoresize="" placeholder="Share your thoughts..."></textarea>
                            </form>
                        </div>
                        <!-- Share feed toolbar START -->
                        <ul class="nav nav-pills nav-stack small fw-normal">
                            <li class="nav-item mx-1">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" style="color: black;padding: 8px !important;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #0cbc87;" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                    </svg>
                                    Photo
                                </a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" style="color: black;padding: 8px !important;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#4f9ef8;" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/>
                                    </svg>
                                    Video
                                </a>
                            </li>
                            <li class="nav-item mx-1">
                                <a href="#" class="nav-link bg-light py-1 px-2 mb-0" style="color: black;padding: 8px !important;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#d6293e;" width="16" height="16" fill="currentColor" class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                    Event 
                                </a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" style="color: black;padding: 8px !important;"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#f7c32e;" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8"/>
                                    </svg>
                                    Feeling /Activity
                                </a>
                            </li>
                        </ul>
                        <!-- Share feed toolbar END -->
                    </div>
                    <!-- Share feed END -->
    
                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header  bg-white border-0 pb-0 bg-white">
                            <div class="d-flex align-items-center justify-content-between bg-white">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-story mx-2">
                                        <a href="#!"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/04.jpg" alt=""> </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <div class="nav nav-divider">
                                            <h6 class="nav-item card-title mb-0"> <a href="#!"> Lori Ferguson </a></h6>
                                            <span class="nav-item small"> 2hr</span>
                                        </div>
                                        <p class="mb-0 small">Web Developer at Webestica</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card header END -->
                        <!-- Card body START -->
                        <div class="card-body">
                            <p>I'm thrilled to share that I've completed a graduate certificate course in project management with the president's honor roll.</p>
                            <!-- Card img -->
                            <img class="card-img" src="https://social.webestica.com/assets/images/post/3by2/01.jpg" alt="Post">
                            <!-- Feed react START -->
                            <ul class="nav nav-stack py-3 small">
                                <li class="nav-item">
                                    <a class="nav-link active"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                        </svg>Liked (56)
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"/>
                                        </svg>Comments (12)
                                    </a>
                                </li>
                                <!-- Card share action START -->
                                <li class="nav-item dropdown ms-sm-auto">
                                    <a class="nav-link mb-0" href="#" id="cardShareAction">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action END -->
                            </ul>
                            <!-- Feed react END -->
    
                            <!-- Add comment -->
                            <div class="d-flex mb-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xs mx-2">
                                    <a href="#!"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/12.jpg" alt=""> </a>
                                </div>
                                <!-- Comment box  -->
                                <form class="nav nav-item w-100 position-relative">
                                    <textarea data-autoresize="" class="form-control pe-5 bg-light" rows="1" placeholder="Add a comment..."></textarea>
                                    <button class="nav-link bg-transparent px-3 position-absolute top-50 end-0 translate-middle-y border-0" type="submit">
                                        <i class="bi bi-send-fill"> </i>
                                    </button>
                                </form>
                            </div>
                            <!-- Comment wrap START -->
                            <ul class="comment-wrap list-unstyled">
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex position-relative">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/05.jpg" alt=""></a>
                                        </div>
                                        <div class="ms-2">
                                            <!-- Comment by -->
                                            <div class="bg-light rounded-start-top-0 p-3 rounded">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
                                                    <small class="ms-2">5hr</small>
                                                </div>
                                                <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                            </div>
                                            <!-- Comment react -->
                                            <ul class="nav nav-divider py-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> Like (3)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> View 5 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Comment item nested START -->
                                    <ul class="comment-item-nested list-unstyled">
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/06.jpg" alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
                                                            <small class="ms-2">2hr</small>
                                                        </div>
                                                        <p class="small mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                                                    </div>
                                                    <!-- Comment react -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Like (5)</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-story avatar-xs">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/07.jpg" alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"> <a href="#!"> Billy Vasquez </a> </h6>
                                                            <small class="ms-2">15min</small>
                                                        </div>
                                                        <p class="small mb-0">Wishing calling is warrant settled was lucky.</p>
                                                    </div>
                                                    <!-- Comment react -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Like</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                    </ul>
                                    <!-- Load more replies -->
                                    <a href="#!" role="button" class="btn btn-link btn-sm text-secondary d-flex align-items-center mb-3 ms-5">
                                        <div class="spinner-dots mx-2">
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                        </div>
                                        Load more replies 
                                    </a>
                                    <!-- Comment item nested END -->
                                </li>
                                <!-- Comment item END -->
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                        <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/05.jpg" alt=""></a>
                                        </div>
                                        <!-- Comment by -->
                                        <div class="ms-2">
                                            <div class="bg-light p-3 rounded">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                                                    <small class="ms-2">4min</small>
                                                </div>
                                                <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                            </div>
                                            <!-- Comment react -->
                                            <ul class="nav nav-divider pt-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> Like (1)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> View 6 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!-- Comment item END -->
                            </ul>
                            <!-- Comment wrap END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card footer START -->
                        <div class="card-footer bg-white border-0 pt-0">
                            <!-- Load more comments -->
                            <a href="#!" role="button" class="btn btn-link btn-sm text-secondary d-flex align-items-center" >
                                <div class="spinner-dots mx-2">
                                    <span class="spinner-dot"></span>
                                    <span class="spinner-dot"></span>
                                    <span class="spinner-dot"></span>
                                </div>
                                Load more comments 
                            </a>
                        </div>
                        <!-- Card footer END -->
                    </div>
                    <!-- Card feed item END -->
    
                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header  bg-white">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar mx-2">
                                        <a href="#!"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/logo/12.svg" alt=""> </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <h6 class="card-title mb-0"><a href="#!"> Bootstrap: Front-end framework </a></h6>
                                        <a href="#!" class="mb-0 text-body">Sponsored <i class="bi bi-info-circle ps-1" data-bs-container="body"></i> </a>
                                    </div>
                                </div>
                                <!-- Card share action START -->
                                <div class="dropdown">
                                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction2">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction2">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card share action START -->
                            </div>
                        </div>
                        <!-- Card header START -->
                        
                        <!-- Card body START -->
                        <div class="card-body">
                            <p class="mb-0">Quickly design and customize responsive mobile-first sites with Bootstrap.</p>
                        </div>
                        <img src="https://social.webestica.com/assets/images/post/3by2/02.jpg" alt="">
                        <!-- Card body END -->
                        <!-- Card footer START -->
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                            <p class="mb-0">Currently v5.1.3 </p>
                            <a class="btn btn-primary-soft btn-sm" href="#"> Download now </a>
                        </div>
                        <!-- Card footer END -->
    
                    </div>
                    <!-- Card feed item END -->
    
                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header  bg-white border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar mx-2">
                                        <a href="#"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/logo/13.svg" alt=""> </a>
                                    </div>
                                    <!-- Title -->
                                    <div>
                                        <h6 class="card-title mb-0"> <a href="#!"> Apple Education </a></h6>
                                        <p class="mb-0 small">9 November at 23:29</p>
                                    </div>
                                </div>
                                <!-- Card share action menu -->
                                <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction5">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Card share action dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction5">
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                </ul>
                            </div>
                                <!-- Card share action END -->
                        </div>
                        <!-- Card header START -->
    
                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <p>Find out how you can save time in the classroom this year. Earn recognition while you learn new skills on iPad and Mac. Start  recognition your first Apple Teacher badge today!</p>
                            <!-- Feed react START -->
                            <ul class="nav nav-stack pb-2 small">
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary" href="#!"> <i class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i> Louis, Billy and 126 others </a>
                                </li>
                                <li class="nav-item ms-sm-auto">
                                    <a class="nav-link" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
  <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"/>
</svg>Comments (12)</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                        <div class="card-footer bg-white py-3">
                            <!-- Feed react START -->
                            <ul class="nav nav-fill nav-stack small">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <!-- Card share action dropdown START -->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link mb-0" id="cardShareAction6">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction6">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action dropdown END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card Footer END -->
                    </div>
                    <!-- Card feed item END -->
    
                    <!-- Card feed item START -->
                    <div class="card d-none">
                        <!-- Card header START -->
                        <div class="card-header  bg-white d-flex justify-content-between align-items-center border-0 pb-0">
                            <h6 class="card-title mb-0">People you may know</h6>
                            <button class="btn btn-sm btn-primary-soft"> See all </button>
                        </div>      
                        <!-- Card header START -->
    
                        <!-- Card body START -->
                        <div class="card-body">
                            <div class="tiny-slider arrow-hover">
                                <div class="tns-outer" id="tns1-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">14 to 18</span>  of 4</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="tiny-slider-inner ms-n4  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" data-arrow="true" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-md="2" data-items-sm="2" data-items-xs="1" data-gutter="12" data-edge="30" id="tns1" style="transform: translate3d(-77.7778%, 0px, 0px);"><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-story avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/10.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Larry Lawson </a></h6>
                                                <p class="mb-0 small lh-sm">33 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Louis Crawford </a></h6>
                                                <p class="mb-0 small lh-sm">45 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/12.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Dennis Barrett </a></h6>
                                                <p class="mb-0 small lh-sm">21 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1"> 
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/09.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                <p class="mb-0 small lh-sm">50 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-story avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/10.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Larry Lawson </a></h6>
                                                <p class="mb-0 small lh-sm">33 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Louis Crawford </a></h6>
                                                <p class="mb-0 small lh-sm">45 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/12.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Dennis Barrett </a></h6>
                                                <p class="mb-0 small lh-sm">21 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div>
                                    <!-- Slider items -->
                                    <div class="tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1"> 
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/09.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                <p class="mb-0 small lh-sm">50 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div>
                                    <div class="tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-story avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/10.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Larry Lawson </a></h6>
                                                <p class="mb-0 small lh-sm">33 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div>
                                    <div class="tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Louis Crawford </a></h6>
                                                <p class="mb-0 small lh-sm">45 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div>
                                    <div class="tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/12.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Dennis Barrett </a></h6>
                                                <p class="mb-0 small lh-sm">21 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div>
                                <div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1"> 
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/09.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                <p class="mb-0 small lh-sm">50 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-story avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/10.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Larry Lawson </a></h6>
                                                <p class="mb-0 small lh-sm">33 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned tns-slide-active">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Louis Crawford </a></h6>
                                                <p class="mb-0 small lh-sm">45 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned tns-slide-active">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/12.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Dennis Barrett </a></h6>
                                                <p class="mb-0 small lh-sm">21 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned tns-slide-active"> 
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/09.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                <p class="mb-0 small lh-sm">50 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned tns-slide-active">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-story avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/10.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Larry Lawson </a></h6>
                                                <p class="mb-0 small lh-sm">33 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div><div class="tns-item tns-slide-cloned tns-slide-active">
                                        <!-- Card add friend item START -->
                                        <div class="card shadow-none text-center">
                                            <!-- Card body -->
                                            <div class="card-body p-2 pb-0">
                                                <div class="avatar avatar-xl">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt=""></a>
                                                </div>
                                                <h6 class="card-title mb-1 mt-3"> <a href="#!"> Louis Crawford </a></h6>
                                                <p class="mb-0 small lh-sm">45 mutual connections</p>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer bg-white p-2 border-0">
                                                <button class="btn btn-sm btn-primary-soft w-100"> Add friend </button>
                                            </div>
                                        </div>
                                        <!-- Card add friend item END -->
                                    </div></div></div></div><div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="tns1"><i class="fa-solid fa-chevron-left"></i></button><button type="button" data-controls="next" tabindex="-1" aria-controls="tns1"><i class="fa-solid fa-chevron-right"></i></button></div></div>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Card feed item END -->
    
                    <!-- Card feed item START -->
                    <div class="card">
                        <!-- Card header START -->
                        <div class="card-header  bg-white">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar mx-2">
                                        <a href="#!"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/logo/11.svg" alt=""> </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <h6 class="card-title mb-0"> <a href="#!"> Webestica </a></h6>
                                        <p class="small mb-0">9 December at 10:00 </p>
                                    </div>
                                </div>
                                <!-- Card share action START -->
                                <div class="dropdown">
                                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction8">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction8">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card share action START -->
                            </div>
                        </div>
                        <!-- Card header START -->
                        
                        <!-- Card body START -->
                        <div class="card-body">
                            <p class="mb-0">The next-generation blog, news, and magazine theme for you to start sharing your content today with beautiful aesthetics! This minimal &amp; clean Bootstrap 5 based theme is ideal for all types of sites that aim to provide users with content. <a href="#!"> #bootstrap</a> <a href="#!"> #webestica </a> <a href="#!"> #getbootstrap</a> <a href="#"> #bootstrap5 </a></p>
                        </div>
                        <!-- Card body END -->
                        <a href="#!"> <img src="assets/images/post/3by2/03.jpg" alt=""> </a>
                        <!-- Card body START -->
                        <div class="card-body position-relative bg-light">
                            <a href="#!" class="small stretched-link">https://blogzine.webestica.com</a>
                            <h6 class="mb-0 mt-1">Blogzine - Blog and Magazine Bootstrap 5 Theme</h6>
                            <p class="mb-0 small">Bootstrap based News, Magazine and Blog Theme</p>
                        </div>
                        <!-- Card body END -->
    
                        <!-- Card Footer START -->
                        <div class="card-footer bg-white py-3">
                            <!-- Feed react START -->
                            <ul class="nav nav-fill nav-stack small">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
  <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"/>
</svg>Comments (12)</a>
                                </li>
                                <!-- Card share action dropdown START -->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link mb-0" id="feedActionShare7">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare7">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                    </ul>
                                </li>
                                <!-- Card share action dropdown END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card Footer END -->
    
                    </div>
                    <!-- Card feed item END -->
    
                        <!-- Load more button START -->
                        <a href="#!" role="button" class="btn btn-loader btn-primary-soft">
                            <span class="load-text"> Load more </span>
                            <div class="load-icon">
                                <div class="spinner-grow spinner-grow-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </a>
                        <!-- Load more button END -->
    
                </div>
                <!-- Main content END -->
    
                <!-- Right sidebar START -->
                <div class="col-lg-3">
                    <div class="row g-4">
                        <!-- Card follow START -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header bg-white pb-0 border-0 bg-white">
                                    <h5 class="card-title mb-0 text-center">Who to follow</h5>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#!"><img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/04.jpg" alt=""></a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Judy Nguyen </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->
                                    <!-- Connection item START -->
                                        <div class="hstack gap-2 mb-3">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-story">
                                                <a href="#!"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/05.jpg" alt=""> </a>
                                            </div>
                                            <!-- Title -->
                                            <div class="overflow-hidden">
                                                <a class="h6 mb-0" href="#!">Amanda Reed </a>
                                                <p class="mb-0 small text-truncate">Web Developer</p>
                                            </div>
                                            <!-- Button -->
                                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->
    
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/11.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Billy Vasquez </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary rounded-circle icon-md ms-auto" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="color:#fff;" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <!-- Connection item END -->
                                    
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/01.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Lori Ferguson </a>
                                            <p class="mb-0 small text-truncate">Web Developer at Webestica</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->
    
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle" src="https://social.webestica.com/assets/images/avatar/placeholder.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Carolyn Ortiz </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->
    
                                    <!-- View more button -->
                                    <div class="d-grid mt-3">
                                        <a class="btn btn-primary-soft" href="#!" style="width: 100%;">View more</a>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card follow START -->
    
                        <!-- Card News START -->
                        <div class="col-sm-6 col-lg-12 mt-3">
                            <div class="card">
                                <!-- Card header START -->
                                <div class="card-header  bg-white pb-0 border-0">
                                    <h5 class="card-title mb-0">Today’s news</h5>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Ten questions you should answer truthfully</a></h6>
                                        <small>2hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Five unbelievable facts about money</a></h6>
                                        <small>3hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Best Pinterest Boards for learning about business</a></h6>
                                        <small>4hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Skills that you can learn from business</a></h6>
                                        <small>6hr</small>
                                    </div>
                                    <!-- Load more comments -->
                                    <a href="#!" role="button" class="btn btn-link btn-sm text-secondary d-flex align-items-center">
                                        <div class="spinner-dots mx-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                                            </svg>
                                        </div>
                                        View all latest news
                                    </a>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card News END -->
                    </div>
                </div>
                <!-- Right sidebar END -->
    
            </div> <!-- Row END -->
        </div>
    </div>
</body>
</html>