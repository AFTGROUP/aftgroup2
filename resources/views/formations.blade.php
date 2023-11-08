@extends('layouts.app')

@section('content')
<div id="boite">
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
<section id="pyranda">
  <img src="{{asset('assets/img/Group 162556.png')}}" id="pyramide" alt="pyramide">
</section>
<!-- ========== Start formation ========== -->

<section class="container py-5 my-2 my-md-4 my-lg-5 m" id="why">
  <div class="d-flex justify-content-center">
    <div class="">
      <img src="{{asset('assets/img/Group 162578.png')}}" class="mx-5 mt-3" alt="niveau">
    </div>
    <h2 class="h1 text-center pt-1 pt-xl-2 mb-4 mx-3">Nos formations</h2>
  </div>
  <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">Enver studio is a digital studio that offers several services such as UI/UX Design to developers, we will provide the best service for those of you who use our <br><br> services Enver studio is a digital studio that offers several service</p>
</section>
<!-- ========== End formation ========== -->

<!-- ========== Start maketing section ========== -->
<section class="container py-5 my-2 my-md-4 my-lg-5 m" id="why">
  <div class="row">
    <div class="col-md-6">
      <h1>Marketing et <br> Communication digital</h1>
      <p style="text-align: justify;">Enver studio is a digital studio that offers several services such as UI/UX Design to developers, we will provide the best service for those of you who use our services Enver studio is a digital studio that offers several services such as UI/UX Design to developers, we will provide thEnver studio is a digital studio that offers several services such as UI/UX Design to developers, we will provide the best service for those of you who use our services Enver studio is a digital studio that offers several services such as UI/UX Design to developers, we will provide the best service for those of you who use our services.e best service for those of you who use our services.</p>
    </div>
    <div class="col-md-6">
      <div class="attendant">
        <img src="{{asset('assets/img/Rectangle 9541.png')}}" id="cardrer" class="mb-5" alt="profession">
        <img src="{{asset('assets/img/concept-marketing-medias-sociaux-pour-marketing-applications_23-2150063140 (1).jpg')}}" class="blockchain " alt="website">
      </div>
    </div>
    <img src="{{asset('assets/img/Group 162533.png')}}" class="cicle" alt="cicle">
  </div>
</section>
<!-- ========== End maketing section ========== -->
<!-- ========== Start strategie maketing ========== -->
<div id="whyyy">
  <section class="container py-5 my-2 my-md-4 my-lg-5 " id="why">
  <i class="fa-thin fa-triangle text-light "></i>
    <div class="row">
      <div class="col-md-6">
        <div class="attendant">
          <img src="{{asset('assets/img/Rectangle 9541.png')}}" id="cardrer" class="mb-5" alt="profession">
          <img src="{{asset('assets/img/concept-marketing-medias-sociaux-pour-marketing-applications_23-2150063140 (1).jpg')}}" class="blockchain " alt="website">
        </div>
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </section>
</div>
<!-- ========== End strategie maketing ========== -->
@endsection