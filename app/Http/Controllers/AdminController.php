<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dogadjaj;
use App\Models\Rezervacija;

class AdminController extends Controller
{
    public function dodaj_dogadjaj_get(){
        return view('admin.dodaj_dogadjaj');
    }

    public function dodaj_dogadjaj_post(Request $request){
        $dogadjaj=new Dogadjaj();
        $dogadjaj->naziv=$request->input('naziv');
        $dogadjaj->opis=$request->input('opis');
        $dogadjaj->save();
        return redirect(route('dogadjaji'));
    }

    public function obrisi_dogadjaj($id){
        $dogadjaj=Dogadjaj::find($id);
        $dogadjaj->delete();

        return redirect(route('dogadjaji'));
    }

    public function kreirane_rezervacije(){
        $kreirane_rezervacije = Rezervacija::where("status", "=", -1)->get();
        return view('admin.kreirane_rezervacije', [
            'kreirane_rezervacije'=>$kreirane_rezervacije
        ]);
    }

    public function prihvati_rezervaciju($id){
        $rezervacija=Rezervacija::find($id);
        $rezervacija->status=0;
        $rezervacija->save();

        return redirect(route('kreirane-rezervacije'));
    }
    public function odbij_rezervaciju($id){
        $rezervacija=Rezervacija::find($id);
        $rezervacija->status=1;
        $rezervacija->save();

        return redirect(route('kreirane-rezervacije'));
    }

    public function obradjene_rezervacije(){
        $obradjene_rezervacije = Rezervacija::where("status", "!=", -1)->get();
        return view('admin.obradjene_rezervacije', [
            'obradjene_rezervacije'=>$obradjene_rezervacije
        ]);
    }

    public function obrisi_rezervaciju($id){
        $rezervacija=Rezervacija::find($id);
        $rezervacija->delete();

        return redirect(route('obradjene-rezervacije'));
    }
}
