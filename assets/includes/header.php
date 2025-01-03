<?php include 'head.php'; ?>

<header class="header">
  <div class="logo">
    <a href="index.php">
      <img src="https://i.ibb.co/Cws5D7Q/logo.png" alt="logo" border="0">
    </a>
  </div>
  <nav class="menu">
  <?php include 'menu-links.php'; ?>
  </nav>
  <div class="menu-toggle">
    <i class="fa fa-bars" aria-hidden="true"></i>
    <i class="fa fa-times" aria-hidden="true"></i>
  </div>
</header>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
    const barsIcon = menuToggle.querySelector('.fa-bars');
    const timesIcon = menuToggle.querySelector('.fa-times');

    timesIcon.style.display = 'none';

    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('active');
      if (menu.classList.contains('active')) {
        barsIcon.style.display = 'none';
        timesIcon.style.display = 'block';
      } else {
        barsIcon.style.display = 'block';
        timesIcon.style.display = 'none';
      }
    });
  });
</script>
