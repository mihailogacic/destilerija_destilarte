@extends('layouts.public')

@section('title')
    Kontakt
@endsection

@section('main')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">kontakt</h6>
            <h1 class="mb-5"><span class="text-primary text-uppercase">Kontaktiraj</span> Nas</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 offset-lg-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="{{route('kontakt-post')}}" method="post">
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
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <label for="subject">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="broj_telefona" placeholder="Broj telefona">
                                    <label for="subject">Broj telefona</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea type="text" class="form-control" name="poruka" placeholder="Poruka"></textarea>
                                    <label for="subject">Poruka</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Posalji</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection