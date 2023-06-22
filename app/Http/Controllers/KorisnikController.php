<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use Illuminate\Http\Request;
use App\Models\Dogadjaj;
use App\Models\Kontakt;
use App\Models\Rezervacija;

class KorisnikController extends Controller
{
    public function pocetna(){
        return view('korisnik.pocetna');
    }

    public function dogadjaji(){
        $dogadjaji=Dogadjaj::all();
        return view('korisnik.dogadjaji',[
            'dogadjaji'=>$dogadjaji
        ]);
    }

    public function dogadjaj($id){
        $dogadjaj=Dogadjaj::find($id);
        return view('korisnik.dogadjaj',[
            'dogadjaj'=>$dogadjaj
        ]);
    }

    public function rezervacija_get(){
        $dogadjaji=Dogadjaj::all();
        return view('korisnik.rezervacija', [
            'dogadjaji'=>$dogadjaji
        ]);
    }

    public function rezervacija_post(Request $request){
        $korisnik = new Korisnik();
        $korisnik->ime=$request->input('ime');
        $korisnik->prezime=$request->input('prezime');
        $korisnik->godina_rodjenja=$request->input('godina_rodjenja');
        $korisnik->broj_telefona=$request->input('broj_telefona');
        $korisnik->save();

        $rezervacija=new Rezervacija();
        $rezervacija->korisnik_id=$korisnik->id;
        $rezervacija->dogadjaj_id=$request->input('dogadjaj_id');
        $rezervacija->status=-1;
        $rezervacija->save();

        return redirect(route('pocetna'));
    }

    public function rezervacija_bez_dogadjaja_get($id){
        return view('korisnik.rezervacija_bez', [
            'id'=>$id
        ]);
    }

    public function rezervacija_bez_dogadjaja_post($id, Request $request){
        $korisnik = new Korisnik();
        $korisnik->ime=$request->input('ime');
        $korisnik->prezime=$request->input('prezime');
        $korisnik->godina_rodjenja=$request->input('godina_rodjenja');
        $korisnik->broj_telefona=$request->input('broj_telefona');
        $korisnik->save();

        $rezervacija=new Rezervacija();
        $rezervacija->korisnik_id=$korisnik->id;
        $rezervacija->dogadjaj_id=$id;
        $rezervacija->status=-1;
        $rezervacija->save();

        return redirect(route('pocetna'));
    }

    public function kontakt_get(){
        return view('korisnik.kontakt');
    }
    public function kontakt_post(Request $request){
        $kontakt = new Kontakt();
        $kontakt->ime=$request->input('ime');
        $kontakt->prezime=$request->input('prezime');
        $kontakt->email=$request->input('email');
        $kontakt->broj_telefona=$request->input('broj_telefona');
        $kontakt->poruka=$request->input('poruka');
        $kontakt->save();
        
        return redirect(route('pocetna'));
    }
}
