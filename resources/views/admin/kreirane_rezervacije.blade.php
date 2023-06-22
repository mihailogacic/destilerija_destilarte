@extends('layouts.public')

@section('title')
    Kreirane rezervacije
@endsection

@section('main')
    <div class="col-md-12 px-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Ime Prezime</th>
                    <th>Godina rodjenja</th>
                    <th>Broj telefona</th>
                    <th>Zeljeni dogadjaj</th>
                    <th>Prihvatanje</th>
                    <th>Odbijanje</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($kreirane_rezervacije as $rezervacija)
                <tr>
                    <td>{{$rezervacija->korisnik->ime}} {{$rezervacija->korisnik->prezime}}</td>
                    <td>{{$rezervacija->korisnik->godina_rodjenja}}</td>
                    <td>{{$rezervacija->korisnik->broj_telefona}}</td>
                    <td>{{$rezervacija->dogadjaj->naziv}}</td>
                    <td><a href="{{route('prihvati-rezervaciju',$rezervacija->id)}}" class="btn btn-success">Prihvati</a></td>
                    <td><a href="{{route('odbij-rezervaciju', $rezervacija->id)}}" class="btn btn-danger">Odbij</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection