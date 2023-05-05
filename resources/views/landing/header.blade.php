<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/site-logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="/">About</a></li>
                              <li><a href="/">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/">Contact</a>
                        </li>
                        <li class="nav-item">
                           <!-- <a class="nav-link" href="/"></a> -->
                           <a class="nav-link" href="#">
                           Cart 
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="display: inline;display: inline;"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                           </a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                              <x-app-layout>
                              </x-app-layout>
                            @else
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif
                        <li class="nav-item">
                           
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>