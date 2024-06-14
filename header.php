<nav>
  <header>
    <script src="/assets/js/menu.js"></script>
    <div id="weblogo-container">
      <a href="#">
        <img id="weblogo" src="assets/img/logo_ko.png" alt="weblogo">
      </a>
    </div>
    <div id="headerbuttons">
      <a class="headerbutton" href="/index.php">Home</a>
      <a class="headerbutton" href="/core/dienstenpage.php">Diensten</a>
      <a class="headerbutton" href="/core/recensiespage.php">Recensies</a>
      <a class="headerbutton" href="/core/overmijpage.php">Over mij</a>
      <a class="headerbutton" href="/core/tarievenpage.php">Tarieven</a>
      <a id="contact-btn" href="/core/contactpage.php">Contact</a>
      <div id="menu-container">
        <button id="drop-btn" onclick="showmenu()"><img id="menu-icon" src="<?= BASEURL ?>assets/img/menu-icon.png"
            alt=""></button>
        <div id="menu-overlay">
          <div id="menu-links">
            <button id="close-menu-btn" onclick="closemenu()">&#10006;</button>
            <a class="menu-link" href="#">Diensten</a>
            <a class="menu-link" href="#">Recensies</a>
            <a class="menu-link" href="#">Over mij</a>
            <a class="menu-link" href="#">Tarieven</a>
            <a class="menu-link" href="#">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </header>
</nav>