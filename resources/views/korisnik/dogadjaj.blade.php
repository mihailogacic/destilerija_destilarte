@extends('layouts.public')

@section('title')
    {{$dogadjaj->naziv}}
@endsection

@section('main')
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">REZERVISI STO PRE</h6>
                <h1 class="text-white mb-4">{{$dogadjaj->naziv}}</h1>
                <p class="text-white mb-4">{{$dogadjaj->opis}}</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Svi Dogadjaji</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Rezervisi Dogadjaj</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="position-relative">
                <img class="img-fluid" src="{{ URL::to('/') }}/img/{{$dogadjaj->slika}}" alt="">
                <small class="position-absolute start-0 top-100 translate-middle-y  rounded py-1 px-3 ms-4"><a href="{{route('obrisi-dogadjaj', $dogadjaj->id)}}" class="btn btn-danger">OBRISI</a></small>
            </div>
        </div>
    </div>
</div>

@endsection