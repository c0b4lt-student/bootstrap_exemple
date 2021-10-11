<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no  " />
  <title>Amnesia</title>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
        crossorigin="anonymous" />
  <link rel="stylesheet"
        href="style.css" />
</head>

<body>
<div class="container-fluid">
  <!--Header-->
  <header class="row justify-content-between shadow-lg">
    <div class="logo col-3">
      <p class="row h-100 justify-content-around align-items-center">LOGO</p>
    </div>
    <div class="col-6">
      <h1 class="row justify-content-around align-items-center title hardball">Amnesia</h1>
    </div>
    <div class="badge col-3">
      <p class="row h-100 justify-content-center align-items-center">BADGE</p>
    </div>
  </header>
  <!--Navbar collapsed-->
  <div class="position-flex top-0 end-0">
    <div class="my_navbar collapse navbar flex-column rounded-bottom" id="navbarToggleExternalContent">
      <ul class="nav flex-column nav-pills">
        <li class="nav-item">
          <a class="nav-link my_nav-text-color" href="#qui_sommes_nous">Qui sommes-nous ?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link my_nav-text-color" href="#">Nos prochains concerts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link my_nav-text-color" href="#">Nous contacter</a>
        </li>
      </ul>
    </div>
    <nav class="position-absolute top-0 end-0 navbar rounded-circle">
      <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </span>
      </button>
    </nav>
  </div>

  <!-- Main content -->
  <main class="row m-3">
    <section class="col-12">

      <article class="row justify-content-xl-around card-group">
        <h2 class="hardball" id="qui_sommes_nous">Les membres du groupes</h2>
        <article class="col-12 col-md-4 col-xl-3 card member_cards">
          <img class="card-img-top my_card-img c" src="Pics/Thomas.jpg" alt="Picture of Thomas, member of amnesia"/>
          <div class="card-body">
            <h3 class="hardball card-title">Thomas guitariste et chanteur</h3>
            <p class="card-text">Thomas, né le 23/10/1997 est guitariste et chanteur du groupe amnesia.
            Il consacre la majorité de son temps libre pour l'évolution du groupe. Membre depuis la création, il aimerai pouvoir vivre grâce aux revenu d'amnesia</p>
          </div>
          <div class="card-footer">
            <p>Three buttons</p>
          </div>
        </article>
        <article class="article2 col-12 col-md-4 col-xl-3">
          <p class="row h-100 justify-content-center align-items-center">ARTICLE 2</p>
        </article>
        <article class="article3 col-12 col-md-4 col-xl-3">
          <p class="row h-100 justify-content-center align-items-center">ARTICLE 3</p>
        </article>
      </article>

      <article class="article4 row my-1">
        <p>
          Amnesia est un groupe de Rock/Hard Rock/Heavy Metal formé en 2018 à Clermont-Ferrand par 4 musiciens</p>
        <ul>
          <li>- Thomas AGOSTINIS : guitare rythmique, chant</li>
          <li>- Pierre BERNIS : guitare soliste</li>
          <li>- Mehdi LAAKAIRI : batterie</li>
          <li>- Julien SERRE : basse</li>
        </ul>
      </article>

    </section>
  </main>

  <footer class="row">
    <p class="row h-100 justify-content-center align-items-center">FOOTER</p>
  </footer>
</div>


<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous">
</script>
</body>
</html>
