@extends('layouts.public')

@section('title')
    Dogadjaji
@endsection

@section('main')
<div class="col-md-12 p-3"><a href="{{route('dodaj-dogadjaj-get')}}" class="col-md-12 btn btn-primary">DODAJ DOGADJAJ</a></div>
<div class="row g-4 p-3">
@foreach ($dogadjaji as $dogadjaj)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="room-item shadow rounded overflow-hidden">
            <div class="position-relative">
                <img class="img-fluid" src="{{ URL::to('/') }}/img/{{$dogadjaj->slika}}" style="height: 300px;width:500px;">
                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Veruj bratu</small>
            </div>
            <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="mb-0">{{$dogadjaj->naziv}}</h5>
                    <div class="ps-2">
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                    </div>
                </div>
                <p class="text-body mb-3">{{$dogadjaj->opis}}</p>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('dogadjaj',$dogadjaj->id)}}">Detaljnije</a>
                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('rezervacija-bez-get',$dogadjaj->id)}}">Rezervisi</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection