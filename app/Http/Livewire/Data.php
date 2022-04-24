<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use App\Models\Intervention;
use App\Models\Parcelle;
use Livewire\Component;

class Data extends Component
{
    public function render()
    {
        $this->question1=Agriculteur::all("agr_nom")->sortBy("agr_nom");
        $this->question2=Parcelle::where("par_superficie",">",500)->get();
        $this->question3=Parcelle::where("emp_lieu","Arith","and")->whereBetween("par_superficie",[200,500])->get();
        $this->question4=Parcelle::join('agriculteurs', 'parcelles.par_prop', '=', 'agriculteurs.agr_id')->get(['parcelles.*','agriculteurs.agr_nom']);
        $from = date('2011-11-07');
        $to = date('2012-02-9');
        $this->question5=Intervention::whereBetween("Int_Debut",[$from,$to])->get();
        // $this->question5=Intervention::all();
        $this->question6=Intervention::join('parcelles', 'interventions.Int_Par_Id', '=', 'parcelles.par_id')->get(['parcelles.par_nom','interventions.*']);
        $this->question7=Intervention::join('parcelles', 'interventions.Int_Par_Id', '=', 'parcelles.par_id')
            ->join('employes', 'interventions.int_emp_nss', '=', 'employes.emp_nss')
            ->get(['parcelles.par_nom','employes.emp_nom','interventions.*']);
        $this->question8 = Intervention::join('employes', 'interventions.int_emp_nss', '=', 'employes.emp_nss')
            ->select('employes.emp_nss','interventions.*')->where("employes.emp_nom","Pernet")->get();

        $this->question9 = Parcelle::sum("par_superficie");

        $this->question10 =  Parcelle::select('par_nom')->orderBy('par_superficie', 'DESC')->first();

        $this->question11 = Parcelle::select('par_nom')->orderBy('par_superficie', 'ASC')->first();
        return view('livewire.data');
    }

}
