@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="container"
    style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(253,193,104,1) 0%, rgba(251,128,128,1) 90% );">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <input id="resistencia" type="hidden" value="{{$user['resistencia']}}">
            <input id="drible" type="hidden" value="{{$user['drible']}}">
            <input id="chute" type="hidden" value="{{$user['chute']}}">
            <input id="marcacao" type="hidden" value="{{$user['marcacao']}}">
            <input id="padrao_de_jogo" type="hidden" value="{{$user['padrao_de_jogo']}}">
            <input id="habilidade" type="hidden" value="{{$user['habilidade']}}">
            <div class="input-group mb-3 card py-3">
                <div class="col-10 mx-auto">
                    <h4>Busque um jogador</h4>
                    <hr>
                    <p>
                        Sua avaliação pode fazer com que outro jogador se destaque, ou consiga alguma oportunidade.
                    </p>
                </div>
                @csrf
                <form action="{{route('Usuario.Home.showPerfil')}}" method="post" class="mx-auto col-12">
                    @csrf
                    <input type="text" id="perfilNome" class="p-3 col-12" placeholder="Busque um Jogador"
                        aria-label="Busque um Jogador" aria-describedby="basic-addon2" name="perfilNome">
                    <div class="input-group-append mt-3">
                        <button class="btn w-100 p-3" type="submmit"
                            style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(253,193,104,1) 0%, rgba(251,128,128,1) 90% );">Buscar</button>
                    </div>
                </form>
            </div>


        </div>

        <div class="col-md-8">
            <div class="card">

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif




                <div class="col-8 mx-auto text-center ">

                    @if($user['jogador']['posicao'] == 'linha')
                        <img src="{{$user['jogador']['img']}}" alt="" class="img-fluid mt-3 ">
                    @endif
                    @if ($user['goleiro']['posicao']=='goleiro')
                        <img src="{{$user['goleiro']['img']}}" alt="" class="img-fluid mt-3">
                    @endif
                    <div class="">

                        <br>
                        @if ($user['jogador']['posicao'] == 'linha')
                            <h1>{{explode(' ',$user['name'])[0]}}</h1>

                            <strong><span style="font-size:1.5em">Jogador</span></strong>
                            <br>
                            <strong>Altura:</strong>
                            {{auth()->user()['jogador']['altura']}}
                            <br>
                            <strong>Idade:</strong>
                            {{auth()->user()['jogador']['idade']}}
                            <br>
                            {{-- <img src="{{asset('/storage/ronaldinho_gif.gif')}}" alt="" class="img-fluid"
                            id="ronaldinho"> --}}
                        @endif
                        @if ($user['goleiro']['posicao']=='goleiro')

                            <h1>{{explode(' ',$user['name'])[0]}}</h1>
                            <br>
                            <span style="font-size: 2em">
                                <i class="far fa-star"></i>
                            </span>
                            <strong><span style="font-size:1.5em">Goleiro</span></strong>
                            <br>
                            <strong>Altura:</strong>
                            {{$user['jogador']['altura']}}
                            <br>
                            <strong>Idade:</strong>
                            {{$user['jogador']['idade']}}
                            <br>
                            {{-- <img src="" alt="" class="img-fluid" id="cassio"> --}}
                        @endif



                    </div>

                </div>
            </div>
        </div>
        <div id="piechart" class="mx-auto my-5"></div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
    integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous">
</script>


<script>
    window.addEventListener("scroll", myFunction);
    var perfilInput = document.getElementById('perfilNome');
    perfilInput.addEventListener('keypress', carregaPerfil);

    function myFunction() {
        var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) /
        (document.documentElement.scrollHeight - document.documentElement.clientHeight);
        console.log(scrollpercent);
        if(scrollpercent > 0.9){
            setTimeout(() => {
                document.getElementById('cassio').setAttribute('src','{{asset('/storage/cassio.gif')}}');
                document.getElementById('ronaldinho').setAttribute('src','{{asset('/storage/ronaldinho_gif.gif')}}');
            }, 400);
        }

    }
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['resistencia', 2],
  ['drible',4],
  ['chute', 5],
  ['marcacao',7],
  ['padrao_de_jogo',7],
  ['habilidade', 2]
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':340, 'height':340};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
@endsection
