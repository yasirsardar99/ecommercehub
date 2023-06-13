<!-- header section strats -->
<header class="header_section">
    <div class="container" style="width: 100%; height: 45px;">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <div class="d-flex justify-content-between">
              <div class="mx-5">
                <a class="" href="index.html"><img width="200" src="images/logo.png" alt="#" /></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
              </button>
              </div>
              <div class="mx-5">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav">
                       <li class="nav-item active">
                          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                       </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                             <li><a href="about.html">About</a></li>
                             <li><a href="testimonial.html">Testimonial</a></li>
                          </ul>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="product.html">Products</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="blog_list.html">Blog</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact</a>
                       </li>

                       <form class="">
                          <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                          <i class="fa fa-search" aria-hidden="true"></i>
                          </button>
                       </form>


                           @if (Route::has('login'))

                           @auth


                           <li class="nav-item">
                           <x-app-layout>

                           </x-app-layout>
                           </li>
                           @else

                           <li class="nav-item">
                               <a class="btn btn-sm btn-light btn-outline-danger mx-2" href="{{ route('login') }}">login</a>
                            </li>
                            <li class="nav-item">
                               <a class="btn btn-sm btn-light btn-outline-primary mx-2" href="{{ route('register') }}">Register</a>
                            </li>

                            @endif

                            @endauth

                    </ul>
                 </div>
              </div>
          </div>
       </nav>
    </div>
 </header>
