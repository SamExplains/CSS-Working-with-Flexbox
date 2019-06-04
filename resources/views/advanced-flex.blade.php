@extends('layout.app')
@section('content')

  <div class="outer-wrap">
    <header class="site-header">
      <div class="site-info">
        <h1 class="site-title">
          Header
        </h1>
        <p class="site-description">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
      </div>
      <nav class="main-menu">Lorem ipsum dolor sit amet, consectetur.</nav>
    </header>

    <div class="content-area">
      <main class="main-content-area">
        <section class="posts">
          <article class="post post-half">
            <a href="">
              <div>
                <img src="{{ asset('images/img_1.jpg') }}" alt="">
              </div>
              <div class="post-content">
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum in itaque officia quos,
                  reprehenderit.</p>
              </div>
            </a>
          </article>

          <article class="post post-half">
            <a href="">
              <div>
                <img src="{{ asset('images/img_2.jpg') }}" alt="">
              </div>
              <div class="post-content">
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum in itaque officia quos,
                  reprehenderit.</p>
              </div>
            </a>
          </article>

          <article class="post post-one-third">
            <a href="">
              <div>
                <img src="{{ asset('images/img_3.jpg') }}" alt="">
              </div>
              <div class="post-content">
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum in itaque officia quos,
                  reprehenderit.</p>
              </div>
            </a>
          </article>

          <article class="post post-one-third">
            <a href="">
              <div>
                <img src="{{ asset('images/img_4.jpg') }}" alt="">
              </div>
              <div class="post-content">
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum in itaque officia quos,
                  reprehenderit.</p>
              </div>
            </a>
          </article>

          <article class="post post-one-third">
            <a href="">
              <div>
                <img src="{{ asset('images/img_5.jpeg') }}" alt="">
              </div>
              <div class="post-content">
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum in itaque officia quos,
                  reprehenderit.</p>
              </div>
            </a>
          </article>

          <article class="post post-full">
            <a href="">
              <div>
                <img src="{{ asset('images/img_6.jpg') }}" alt="">
              </div>
              <div class="post-content">
                <h2>Lorem ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto earum in itaque officia quos,
                  reprehenderit.</p>
              </div>
            </a>
          </article>


        </section>

        <section class="watch">
          <h2 class="section-header">Lorem ipsum dolor.</h2>
          <div class="watch-card">
            <div class="watch-img">
              <img src="{{ asset('images/img_8.jpg') }}" alt="">
            </div>
            <div class="watch-content">
              <h2>Lorem ipsum.</h2>
              <div class="movie-info">
                <span>Lorem ipsum.</span>
                <span>Ea, nihil.</span>
                <span>Beatae, dolores.</span>
                <span>Expedita, saepe.</span>
                <span>A, facere?</span>
                <p class="movie-story">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi deleniti dignissimos doloremque eligendi illum officiis omnis pariatur sint tempora!
                </p>
                <a href="">Read more</a>
              </div>
            </div>
          </div>

          <div class="watch-card">
            <div class="watch-img img-right">
              <img src="{{ asset('images/img_9.jpg') }}" alt="">
            </div>
            <div class="watch-content">
              <h2>Lorem ipsum.</h2>
              <div class="movie-info">
                <span>Lorem ipsum.</span>
                <span>Ea, nihil.</span>
                <span>Beatae, dolores.</span>
                <span>Expedita, saepe.</span>
                <span>A, facere?</span>
                <p class="movie-story">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi deleniti dignissimos doloremque eligendi illum officiis omnis pariatur sint tempora!
                </p>
                <a href="">Read more</a>
              </div>
            </div>
          </div>

        </section>

        <section class="download">
          <h2 class="section-header">Lorem ipsum.</h2>
          <div class="download-card">
            <div class="download-img">
              <img src="{{ asset('images/img_11.jpg') }}" alt="">
            </div>
            <div class="download-content">
              <a href="#">
                <span>download</span>
                <span>Icon</span>
              </a>
              <div class="download-info">
                <div class="download-genre">
                  <h4>Genre: </h4>
                  <p>Lorem ipsum.</p>
                </div>
                <div class="download-cast">
                  <h4>cast: </h4>
                  <img src="{{ asset('images/img_11.jpg') }}" alt="">
                  <img src="{{ asset('images/img_12.jpg') }}" alt="">
                  <img src="{{ asset('images/img_13.jpg') }}" alt="">
                  <img src="{{ asset('images/img_14.jpg') }}" alt="">
                  <img src="{{ asset('images/img_15.jpg') }}" alt="">
                </div>
              </div>

              <div class="download-rating">
                <span class="rate">8.7</span>
                <span>1200 ratings</span>
                <span>6 seasons</span>
              </div>


            </div>
          </div>
        </section>

      </main>

      <div class="sidebar-right">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minus natus odit praesentium qui sunt
          voluptatibus? Animi consequatur cum deleniti dicta doloribus eius esse fugiat illo iste libero maxime
          molestiae, molestias nulla odit, perferendis porro qui, repellat reprehenderit sapiente sint. Dignissimos
          eaque eos iure molestias quasi reiciendis sit ullam unde!</p>
      </div>

    </div>

    <footer class="site-footer">
      <h1>Lorem ipsum.</h1>
    </footer>

  </div>


@endsection