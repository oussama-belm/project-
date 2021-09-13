@extends('layouts.app2')

@section('content')


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="/css/about/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="/css/about/style.css" media="screen">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oussama and Anter</title>
</head>
<body>
  <h1 class="title">Oussama And Anter</h1>
  <span class="tagline">Developers &amp; Students</span>
  <nav class="main-nav">
    <ul>
      <li><a class="active" id="about-page" data-page="about" href="#">About</a></li>
      <li><a href="#" id="publications-page" data-page="publications">Resources</a></li>
      <li><a href="#" id="contact-page" data-page="contact">Contact</a></li>
    </ul>
  </nav>
  <section data-page-name="about" class="page default">

    <div class="about-me"><img class="profile-img" src="/css/about/about.jpg" alt=""/>
      <p>This website was created by us and was made possible with the will of Allah (Glory be unto Him).
          and that website was created for the end of the therd year as a practice of the memory and  all the praises and thanks be to God alone
      </p>
    </div>
  </section>

  <section data-page-name="publications" class="page">
  <h2 class="subtitle">websites</h2>
  <p><a href="https://laravel.com/" target="_blank">Laravel</a></p>
  <p><a href="https://codepen.io/" target="_blank">codepen</a></p>
  <p><a href="https://stackoverflow.com/" target="_blank">stackoverflow</a></p>
  <p><a href="https://css-tricks.com/" target="_blank">css-trickes</a></p>

</section>

<section data-page-name="contact" class="page">
  <p>oussama gmail: <a href="https://mail.google.com/mail/?tab=rm&authuser=0&ogbl">oo1019848@gmail.com</a></p>
  <p>anter gmail: <a href="#">antarkostra@gmail.com</a></p>
</section>


<!-- Loading -->
  <div class="loading">
    <h1 class="loading-title">loading</h1>
    <div class="loading-progress"></div>
  </div>
</body>
<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="css/about/script.js"></script>

</body>
</html>

@endsection
