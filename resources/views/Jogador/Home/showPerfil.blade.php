@extends('layouts.app')

@section('content')
<script src="{{asset('node_modules/jquery/dist/jquery.js)')}}"></script>
<div class="container">
    <div class="row justify-content-center align-items-center">
        @foreach ($usuarios as $usuario)
        <div class="col-3 mb-3 ">
            <img src="{{$usuario['jogador']['img']}}" class="img-fluid">
        </div>
        <div class="col-9">
            <a href="{{route('Usuario.Home.showProfileFunctions', $usuario['id'])}}"><p><strong>{{$usuario['name']}}</strong></p></a>

        </div>
        @endforeach

    </div>
</div>

<script>
    const button = document.querySelector('#button');
  const tooltip = document.querySelector('#tooltip');

  // Pass the button, the tooltip, and some options, and Popper will do the
  // magic positioning for you:
  Popper.createPopper(button, tooltip, {
    placement: 'right',
  });
</script>
@endsection
