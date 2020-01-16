@extends('layouts.goodentete')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}">
    <!-- styles -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/color/default.css')}}" rel="stylesheet">
</head>

<body>

<section class="banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="left-side">
                    <div class="logo">
                        <img src="{{asset('img/iconlogi.jpeg')}}" alt="Flight Temlate">
                    </div>
                    <div class="tabs-content">
                        <h4>Choisissez votre Logement:</h4>
                        <ul class="social-links">
                            <li><a href="http://facebook.com">RDV sur  <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://youtube.com">Notre  Chaine <em>YouTube</em> <i class="fa fa-youtube"></i></a></li>
                            <li><a href="http://instagram.com">Suivez nous sur <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="page-direction-button">
                        <a href="contact.html"><i class="fa fa-phone"></i>Contact Us Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <div class="submit-form">
                            <h4>Disponibilité pour <em>Logement</em>:</h4>

                            <form id="form-submit" action="{{route('logement.list')}}" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="from">Departement:</label>
                                        {{--Recupere les departement a partir de la base HomeStead--}}
                                            <select required name='departement' id="departement" class="dynamic" data-dependent="quartier">
                                                <option value="">Select a location...</option>
                                                @foreach($fulldep as $dep)
                                                <option value="{{$dep->id}}">{{$dep->nom}}</option>
                                                @endforeach
                                            </select>

                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="to">Quartier:</label>
                                            {{--Charger depuis le js ok --}}
                                            <select required name='quartier' id='quartier' onchange='this.form.()'>
                                                <option value="">Choissez un departemen...</option>
                                                </select>
                                        </fieldset>
                                    </div>
                                    {{ csrf_field() }}
                                   {{-- <div class="col-md-6">
                                        <fieldset>
                                            <label for="departure">Departure date:</label>
                                            <input name="deparure" type="text" class="form-control date" id="deparure" placeholder="Select date..." required onchange='this.form.()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="return">Return date:</label>
                                            <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required onchange='this.form.()'>
                                        </fieldset>
                                    </div>--}}
                                  {{--  <div class="col-md-6">
                                        <div class="radio-select">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="round">Round</label>
                                                    <input type="radio" name="trip" id="round" value="round" requiredonchange='this.form.()'>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="oneway">Oneway</label>
                                                    <input type="radio" name="trip" id="oneway" value="one-way" requiredonchange='this.form.()'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="col-md-6">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn">Recherche</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
           {{-- <div class="col-md-12">
                <div class="primary-button">
                    <a href="#" class="scroll-top">Back To Top</a>
                </div>
            </div>--}}
            <div class="col-md-12">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/tooplate"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <p>Copyright &copy; 2020 Caring Together Company

                    | Design: <em>Ass</em></p>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
{{--d--}}

{{--second--}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {



        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
</script>
<script>
    $(document).ready(function(){

        $('.dynamic').change(function(){
      //      alert('try to change');
            if($(this).val() != '')
            {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('logementcontroller.fetch') }}",
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
            //        data:{select:select, value:value, dependent:dependent},
                    success:function(result)
                    {
                        $('#'+dependent).html(result);
                    }

                })
            }
        });

        $('#departement').change(function(){
            $('#quartier').val('');
           // $('#city').val('');
        });

       /* $('#state').change(function(){
            $('#city').val('');
        });*/


    });
</script>
</body>
</html>

@endsection