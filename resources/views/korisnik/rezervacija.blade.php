@extends('layouts.public')

@section('title')
    Rezervacija
@endsection

@section('main')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Rezervacija</h6>
            <h1 class="mb-5"><span class="text-primary text-uppercase">Rezervisi</span> Dogadjaj</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 offset-lg-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="{{route('rezervacija-post')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="ime" placeholder="Ime">
                                    <label for="name">Ime</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="prezime" placeholder="Prezime">
                                    <label for="text">Prezime</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="godina_rodjenja" placeholder="Godina rodjenja">
                                    <label for="subject">Godina rodjenja</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="broj_telefona" placeholder="Broj telefona">
                                    <label for="subject">Broj telefona</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="dogadjaj_id" class="form-control">
                                        @foreach ($dogadjaji as $dogadjaj)
                                            <option value="{{$dogadjaj->id}}">{{$dogadjaj->naziv}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Rezervisi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection