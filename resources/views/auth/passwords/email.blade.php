@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="center">
  <div class="row form z-depth-1">
        <h3 style="font-weight: 100">Zresetuj hasło</h3>
        @if (session('status'))
          <div class="card-panel green lighten-2">
            <p class="white-text text-darken-2">{{ $error }}</p>
          </div>
        @endif
        @if (count($errors) > 0)
          <ul class="card-panel red lighten-2">
              @foreach($errors->all() as $error)
                  <li class="white-text text-darken-2">{{ $error }}</li>
              @endforeach
          </ul>
        @endif
        <form role="form" method="POST" action="{{ url('/password/email') }}">
          {!! csrf_field() !!}
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" name="email" type="text">
              <label for="email">Adres e-mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 center">
                <button type="submit" class="btn-large waves-effect waves-light blue darken-4">
                    <i class="fa fa-btn fa-sign-in"></i>Wyślij link resetujący hasło
                </button>
            </div>
          </div>
         </form>
     </div>
</div>
@endsection
