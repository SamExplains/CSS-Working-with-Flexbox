@extends('layout.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <section class="menu-section">
          <h2 class="menu-heading">Simple Menu</h2>

          <nav class="single-nav menu">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Testimonials</a></li>
              <li><a href="">Portfolio</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </nav>


        </section>


        <section class="menu-section">
          <h2 class="menu-heading">Advanced Menu</h2>

          <nav class="advanced-nav menu">
            <ul>
              <li>
                <a href="">
                  <div class="icon">
                    A
                  </div>
                  <div class="text">
                    Lorem ipsum.
                    <span>Lorem ipsum dolor sit.</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="">
                  <div class="icon">
                    A
                  </div>
                  <div class="text">
                    Lorem ipsum.
                    <span>Lorem ipsum dolor sit.</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="">
                  <div class="icon">
                    A
                  </div>
                  <div class="text">
                    Lorem ipsum.
                    <span>Lorem ipsum dolor sit.</span>
                  </div>
                </a>
              </li>

            </ul>
          </nav>

        </section>


      </div>
    </div>
  </div>
@endsection