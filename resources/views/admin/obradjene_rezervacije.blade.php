@extends('layouts.public')

@section('title')
    Obradjene rezervacije
@endsection

@section('main')
<div class="col-md-12 px-4">
    <table class="table">
        <thead>
            <tr>
                <th>Ime Prezime</th>
                <th>Godina rodjenja</th>
                <th>Broj telefona</th>
                <th>Status</th>
                <th>Zeljeni dogadjaj</th>
                <th>Opis dogadjaja</th>
                <th>Obrisi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($obradjene_rezervacije as $rezervacija)
            <tr>
                <td>{{$rezervacija->korisnik->ime}} {{$rezervacija->korisnik->prezime}}</td>
                <td>{{$rezervacija->korisnik->godina_rodjenja}}</td>
                <td>{{$rezervacija->korisnik->broj_telefona}}</td>
                <td>
                    @if ($rezervacija->status==0)
                        Prihvacena
                    @else
                        Odbijena
                    @endif
                </td>
                <td>{{$rezervacija->dogadjaj->naziv}}</td>
                <td>{{$rezervacija->dogadjaj->opis}}</td>
                <td><a href="{{route('obrisi-rezervaciju', $rezervacija->id)}}" class="btn btn-danger">OBRISI</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection