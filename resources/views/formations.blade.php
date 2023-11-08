@extends('layouts.app')

@section('content')
<div id="boite" class="">
  <div class="banniere">
    <img src="{{asset('assets/img/homme-africain-dans-costume-noir-homme-ecrivant-verre_1157-45582.jpg')}}" id="form-img" alt="form-home">
  </div>
  <div class="success">
    <h3 class="text-light">Prêt pour une nouvelle aventure?</h3>
    <a href="#" class="btn btn-primary shadow-primary btn-lg mt-2">Contactez nous</a>
  </div>
  <div class="objectt">
    <img src="{{asset('assets/img/Group 162533.png')}}" alt="jolie">
  </div>
</div>

<section class=""  id="formation">
  <img src="{{asset('assets/img/Group 162556.png')}}" style="margin-left: 50*x;" alt="jolie">
</section>
@endsection