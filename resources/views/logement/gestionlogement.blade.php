@extends('layouts.goodentete')

@section('content')
<body>
<div id="wrapper">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="" />
                        </a>
                    </div>
                    <!-- end logo -->
                    <!-- top menu -->
                {{--<div class="navigation">
                    <nav>
                        <ul class="nav topnav">
                            <li>
                                <a href="index.html"><i class="icon-home"></i> Home </a>
                            </li>
                            <li class="dropdown">
                                <a href="#"><i class="icon-cog"></i> Features <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="media.html">Media</a></li>
                                    <li><a href="color-scheme.html">8 Theme colors</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="components.html">Components</a></li>
                                    <li><a href="animations.html">56 Animations</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="icon-variations.html">Icon variations</a></li>
                                    <li class="dropdown"><a href="#">3rd level <i class="icon-angle-right"></i></a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="#">Example menu</a></li>
                                            <li><a href="#">Example menu</a></li>
                                            <li><a href="#">Example menu</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#"><i class="icon-leaf"></i> Pages <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="pricingbox.html">Pricing boxes</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#"><i class="icon-briefcase"></i> Portfolio <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                    <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                    <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                    <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown active">
                                <a href="#"><i class="icon-book"></i> Blog <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                    <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                    <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html"><i class="icon-envelope-alt"></i> Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>--}}
                <!-- end menu -->
                </div>
            </div>
        </div>
    </header>
    <!-- Subintro
================================================== -->
    {{--  <section id="subintro">
          <div class="container">
              <div class="row">
                  <div class="span8">
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                          <li><a href="#">Blog</a><i class="icon-angle-right"></i></li>
                          <li class="active">Blog with left sidebar</li>
                      </ul>
                  </div>
                  <div class="span4">
                      <div class="search">
                          <form class="input-append">
                              <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
                              <button class="btn btn-dark" type="submit">Search</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>--}}
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside>
                        <div class="widget">
                            <h4 class="rheading">Nos Reservations<span></span></h4>
                            <ul class="cat">
                                <li><a href="{{url('/logement')}}">Logement</a></li>
                                <li><a href="{{url('/hopitql')}}">Hopital</a></li>
                                <li><a href="{{url('/restaurant')}}">Restaurant</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="rheading">Recent posts<span></span></h4>
                            <ul class="recent-posts">
                                <li><a href="#">Lorem ipsum dolor sit amet munere commodo ut nam</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 4 Comments</span>
                                </li>
                                <li><a href="#">Sea nostrum omittantur ne mea malis nominavi insolens</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 2 Comments</span>
                                </li>
                                <li><a href="#">Eius graece recusabo no pri odio tale quo id, mea at saepe</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 4 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 12 Comments</span>
                                </li>
                                <li><a href="#">Malorum deserunt at nec usu ad graeco elaboraret at rebum</a>
                                    <div class="clear">
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i> 3 March, 2013</span>
                                    <span class="comment"><i class="icon-comment"></i> 3 Comments</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="rheading">Post tags<span></span></h4>
                            <ul class="tags">
                                <li><a href="#" class="btn">Tutorial</a></li>
                                <li><a href="#" class="btn">Tricks</a></li>
                                <li><a href="#" class="btn">Design</a></li>
                                <li><a href="#" class="btn">Trends</a></li>
                                <li><a href="#" class="btn">Online</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="span8">
                    <!-- start article 1 -->

                        <article class="blog-post">
                            <div class="post-heading">
                                <h3><a href="{{url('/logement/residence').'?sel='.$log->reference}}">{{$log->designation}}</a></h3>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    <div class="post-image">
                                            <section id="intro">

                                                <!-- Place somewhere in the <body> of your page -->
                                                <div id="mainslider" class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                                                            <img src="{{asset('assets/img/slides/flexslider/img1.jpg')}}" alt="" />
                                                            <div class="flex-caption primary">
                                                                <h2>Bootstrap</h2>
                                                                <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                                            </div>
                                                        </li>
                                                        <li data-thumb="assets/img/slides/flexslider/img2.jpg">
                                                            <img src="{{asset('assets/img/slides/flexslider/img2.jpg')}}" alt="" />
                                                            <div class="flex-caption warning">
                                                                <h2>Responsive layout</h2>
                                                                <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                                            </div>
                                                        </li>
                                                        <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                                                            <img src="{{asset('assets/img/slides/flexslider/img3.jpg')}}" alt="" />
                                                            <div class="flex-caption success">
                                                                <h2>Rich of features</h2>
                                                                <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </section>
                                    </div>
                                    <ul class="post-meta">
                                        <li class="first"><i class="icon-calendar"></i><span>Mar 13, 2013</span></li>
                                        <li><i class="icon-comments"></i><span><a href="#">4 comments</a></span></li>
                                        <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li>
                                    </ul>
                                    <div class="clearfix">
                                    </div>
                                    <p>
                                        {{$log->description_compl}}
                                    </p>
                                </div>
                            </div>
                        </article>
                    <div class="col-sm-6 col-lg-6">
                        <p class="lead text-muted">Disponibilitees</p>
                        <table class="table table-bordered" data-effect="fade">
                            <thead>
                            <tr>

                                <th>Emplacement</th>
                                <th>Taille(Metre Carre)</th>
                                <th>Commentaire</th>
                                <th>Prix(Euros)</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                          {{--  <tr>
                                <td rowspan="2">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>--}}
                          @foreach($app as $ap)
                            <tr>
                                <td>{{$ap->libelle}}</td>
                                <td>{{$ap->superficie}}</td>
                                <td>{{$ap->commentaire}}</td>
                                <td>{{$ap->prix}}</td>
                                <td><a href="{{url('/logement/appartement').'?witch='.$ap->id}}">Reserver</a></td>
                            </tr>
                            @endforeach
                          {{--  <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                <!-- end article 1 -->
                </div>
            </div>
        </div>
    </section>
    <!-- Footer
 ================================================== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="widget">
                        <h5>Interesting pages</h5>
                        <ul class="regular">
                            <li><a href="#">About our company</a></li>
                            <li><a href="#">How we do all stuff</a></li>
                            <li><a href="#">Our recent works</a></li>
                            <li><a href="#">Press releases</a></li>
                            <li><a href="#">Get in touch with us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5>Flickr photostream</h5>
                        <div class="flickr-badge">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5>How to find us</h5>
                        <address>
                            <i class="icon-home"></i> <strong>Lumia company, Inc.</strong><br>
                            X104 Awesome ville, Suite AB12<br>
                            Jakarta 12420 Indonesia
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-8890<br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                    <div class="widget">
                        <ul class="social">
                            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square icon-32"></i></a></li>
                            <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square icon-32"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="verybottom">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <p>
                            &copy; Lumia - All right reserved
                        </p>
                    </div>
                    <div class="span6">
                        <div class="pull-right">
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                                -->
                                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end wrapper -->
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('assets/js/jquery.elastislide.js')}}"></script>
<script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/jquery-hover-effect.js')}}"></script>
<script src="{{asset('assets/js/animate.js')}}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>

@endsection