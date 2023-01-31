{{--  Extending layout  --}}

@extends('layout')

{{--  Sectioning the header  --}}
@section('header')
<!-- header -->
<header class="header" style=" background-image: url({{ asset('images/photography.jpg')  }});">
  <div class="header-text">
    <h1>Soko ya comrade</h1>
    <h4>Home of verified Comrade...</h4>
  </div>
  <div class="overlay"></div>
</header>
@endsection

{{--  Sectioning the main  --}}
@section('main')
<!-- main -->
<main class="container">
  <h2 class="header-title">Latest Blog Posts</h2>
  <section class="cards-blog latest-blog">
    <div class="card-blog-content">
      <img src="{{  asset('images/pic1.jpg')  }}" alt="" />
      <p>
        2 hours ago
        <span style="float: right">Written By Blogger</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="/blog/single-blog-post"
          >Benefits of Paul Photography capturing your Wedding</a
        >
      </h4>
    </div>

    <div class="card-blog-content" data-aos="fade-left">
      <img src="{{  asset('images/pic2.jpg')  }}" alt="" />
      <p>
        23 hours ago
        <span style="float: right">Written By Blogger</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="/blog/single-blog-post"
          >Benefits of Using Drones in Aerial Photography</a
        >
      </h4>
    </div>

    <div class="card-blog-content" data-aos="fade-up">
      <img src="{{  asset('images/pic3.jpg')  }}" alt="" />
      <p>
        2 days ago
        <span style="float: right">Written By Blogger</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="/blog/single-blog-post"
          >Best Location Ideas for Your Next Photo Shoot</a
        >
      </h4>
    </div>

    <div class="card-blog-content" data-aos="fade-left">
      <img src="{{  asset('images/pic4.jpg')  }}" alt="" />
      <p>
        3days ago
        <span style="float: right">Written By Blogger</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="/blog/single-blog-post">8 Most Popular Photography Genres</a>
      </h4>
    </div>
  </section>
</main>
@endsection
