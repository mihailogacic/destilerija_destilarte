@extends('layouts.public')

@section('title')
    Dodaj dogadjaj
@endsection

@section('main')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Dodavanje dogadjaja</h6>
            <h1 class="mb-5"><span class="text-primary text-uppercase">Dodaj</span> Dogadjaj</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 offset-lg-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="{{route('dodaj-dogadjaj-post')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="naziv" placeholder="Ime">
                                    <label for="name">Naziv</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="opis" placeholder="Opis"></textarea>
                                    <label for="">Opis</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Dodaj</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection