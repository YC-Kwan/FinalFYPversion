@extends('layouts.app')
@section('content')

<header>
  <!-- Navbar -->
   <p> <img src="/uploads/others/24-hours.png" alt="logo" style="width:19px;height:15px;"> &nbsp; Emergency Call : +60-123212999 &nbsp; &nbsp; &nbsp; <img src="/uploads/others/telephone.png" alt="logo" style="width:14px;height:15px;">&nbsp; Hotlink : +60-4252999 &nbsp; &nbsp; &nbsp;</p>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a href="{{url('user/home')}}"><img src="/uploads/others/logo.png" alt="logo" style="width:100px;height:45px;"></a>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
          <li class="nav-item active">
            <a class="nav-link" href="{{url('user/patientbookapp')}}"> Book appointment &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/doctorsdetails')}}"> Doctors on-call  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/myappointment')}}"> My appointment &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/myreport')}}"> My reports &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
  <!-- Navbar -->

<!-- Hero -->

<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=1600');
    height: 400px;
  ">

    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3"> Meet our doctors! </h1>
        <h4 class="mb-3">They are very nice</h4>
        
      </div>
    </div>
  </div>
</div>
<!-- Hero -->

    <div class="container" style="margin-top: 90px;">
    <div class="card border-info">
  <img class="card-img-bottom" src="https://images.pexels.com/photos/5214955/pexels-photo-5214955.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Card image cap">
   <div class="card-body">
    <h3 class="card-title">Dr. Hannah Esther</h3>
    <p class="card-text">Dr. Hannah Esther is U.K. certified has an experience of over 15 years in heart centre hospital</p>
    <p class="card-text">Preferred Language:English</p>
    <p class="card-text"><small class="text-muted">Specialise in Cardiology</small></p>
  </div>
</div>
</div>

<div class="container" style="margin-top: 90px;">
    <div class="card border-info">
  <img class="card-img-bottom" src="https://images.pexels.com/photos/4173239/pexels-photo-4173239.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">Dr. Som Teng Wong</h3>
    <p class="card-text">Dr. Som Teng Wong is UM certified has an experience of over 25 years in heart centre hospital</p>
    <p class="card-text">Preferred Language:Chinese and English</p>
    <p class="card-text"><small class="text-muted">Specialise in Anesthesiologists</small></p>
  </div>
</div>
</div>

<div class="container" style="margin-top: 90px;">
    <div class="card border-info">
  <img class="card-img-bottom" src="https://images.pexels.com/photos/2182979/pexels-photo-2182979.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title">Dr. Aym Suu Tyred</h3>
    <p class="card-text">Dr. Aym Suu Tyred is UM certified has an exeprience of over 20 years in heart centre hospital </p>
    <p class="card-text">Preferred Language:English</p>
    <p class="card-text"><small class="text-muted">Specialise in Cardiology</small></p>
  </div>
</div>
</div>

</br>

<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection

