<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body style="background-image: url('{{asset('/storage/falcao_home.png')}}');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size:25em" onload="carregaAudio()" >
  <audio id="audio">
    <source src="{{asset('/storage/ronaldinho.mp3')}}" type="audio/mpeg">
</audio>

{{-- <audio id="myAudio" allow="autoplay" muted> --}}

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="background-color: black; padding:20px; opacity:0.8" >
                    @auth
                        <a href="{{ url('/jogador') }}" style="color:white">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md ">
                    {{-- <span style="color:white">Reinar </span> --}}
                    {{-- Reinar --}}
                    <img src="{{asset('/storage/fenix.gif')}}" alt="" class="img-fluid" width="300px" height="300px">


                </div>


            </div>
        </div>
        <script>

        //     var audio = new Audio();
        //     audio.src = '{{asset('/storage/ronaldinho.mp3')}}';

        //    var x = document.getElementById("myAudio").autoplay;


            var carregaAudio = function(){

                    var sound = document.createElement("audio");
                    sound.src = '{{asset('/storage/ronaldinho.mp3')}}';
                    sound.muted = true;
                    sound.setAttribute("preload", "auto");
                    sound.setAttribute("controls", true);

                    sound.style.display = "none";
                    document.body.appendChild(sound);
                    sound.play();
                    console.log(sound);
                    // console.log(this.sound);
                    // this.sound = document.createElement("audio");
                    // this.sound.src = '{{asset('/storage/ronaldinho.mp3')}}';


                    // this.sound.setAttribute("autoplay", "auto");
                    // this.sound.setAttribute("controls", "none");
                    // this.sound.style.display = "none";
                    // document.body.appendChild(this.sound);
                    // this.play = function () {
                    //     this.sound.play();
                    // }
                    // this.stop = function () {
                    //     this.sound.pause();
                    // }
                }
            // onload = function () {
            //     var sound =document.getElementById('myAudio');
            //     sound.muted = false;
            //     sound.setAttribute("autoplay", "auto");
            //     sound.setAttribute("controls", "true");
            //     sound.setAttribute("src", "{{asset('/storage/ronaldinho.mp3')}}");

            //     // sound.style.display = "none";
            //     sound.play();
            // }


            document.body.addEventListener("click", function () {
                document.getElementById('audio').play();
            })
        </script>
    </body>
</html>
