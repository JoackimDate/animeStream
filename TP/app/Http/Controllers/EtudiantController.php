<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use DB;


class EtudiantController extends Controller
{
    public function index()
    {   
        //Selectionner les element de la table etudiant
        $etudiant = DB::table("etudiants")->get();
        //Affichage des informations recuperées
        //dd($etudiant);
       return view('Etudiants.etudiant',["etudiant"=>$etudiant]);
    }
    //Redirection
    public function FormEtudiant()
    {   
        
        return view('Etudiants.etudiantajout');
    }

    //
    public function AjoutEtudiant(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            "Nom" => "required|unique:etudiants",
            "Prenom" =>"required",
            "Age" => "required|unique|min:0"]);
        
        /*if($validator->fails()){
            return view("Etudiants.etudiantajout");
        }*/

        //Voir si les informations sont recuperer

        $data = $request->input();
        //dd($data);
        $etudiant = new Etudiant();
        $etudiant->Nom=$data["Nom"];
        $etudiant->Prenom=$data["Prenom"];
        $etudiant->Age=$data["Age"];
        $etudiant->save();

        return redirect(Route('Etudiantindex'));
    }

    public function ModificationEtudiant()
    {
        $id = $_GET['id'];
        //dd($id);
        //Recuperation de l'objet en fonction de l'id
        $etudiant = DB::table("etudiants")
        ->where("id",$id)
        ->get();

        return view("Etudiants.ModificationEtudiant",["etudiant"=>$etudiant]);
    }

    public function ModifEtudiant(Request $request){
        //Recuperer les données du formulaire
        $data = $request->input();
        DB::table("etudiants")
        ->where("id",$data["id"])
        ->update([
            "Nom" => $data["Nom"],
            "Prenom" =>$data["Prenom"],
            "Age" =>$data["Age"]
        ]
        );
        //Selectionner les element de la table etudiant
        $etudiant = DB::table("etudiants")->get();
        //Affichage des informations recuperées
        //dd($etudiant);
        return redirect(Route('Etudiantindex'));
    }
    public function supprimerEtudiant()
    {
        $id = $_GET['id'];
        DB::table("etudiants")
        ->where("id",$id)
        ->delete();
        return redirect(Route('Etudiantindex'));
    }
}
