<?php
session_start();
if(empty($_SESSION['user'])){
  header("Location: index.php");
}
?>
<header>
    <div class="hautnav"></div>
    <nav class="navbar">
        <div class="nav-links">
            <img src="images/se-deconnecter.png" class="logout" id="logout-img">
            <div class="contenant-deconnexion"><a href="logout.php" id="logout-text" class="show">Déconnexion</a></div>
            <ul class="contenant-liste">
                <div id="accueil" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="backoffice.php">Accueil</a></li></div>
                <div id="partenariat" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="partenaire-back.php">Partenaires</a></li></div>
                <div id="billetterie" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="billetterie-back.php">Offres</a></li></div>
                <div id="contact" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="contact-back.php">Messagerie</a></li></div>
            </ul>
        </div>
        <div class="dropdown_menu">
            <ul class="contenant-liste">
                <div id="accueil" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="index.php">Accueil</a></li></div>
                <div id="partenariat" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="partenaire.php">Partenaires</a></li></div>
                <div id="billetterie" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="billetterie.php">Offres</a></li></div>
                <div id="contact" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="contact.php">Messagerie</a></li></div>
                <div id="logout" class="fond-nav"><li class="boutons-liste"><a class="liennav" href="logout.php">Déconnexion</a></li></div>
            </ul>
        </div>
        <img src="images/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
    </nav>
</header>

<script>
  const logoutImg = document.getElementById('logout-img');
  const logoutContainer = document.querySelector('.contenant-deconnexion');

  logoutImg.addEventListener('click', () => {
    logoutContainer.classList.toggle('show');
  });

  window.addEventListener('click', (event) => {
    if (event.target !== logoutImg && !logoutContainer.contains(event.target) && logoutContainer.classList.contains('show')) {
      logoutContainer.classList.remove('show');
    }
  });
</script>