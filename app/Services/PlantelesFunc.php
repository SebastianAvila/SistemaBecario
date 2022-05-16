<?php 

namespace App\Services; 

use App\Planteles;



class PlantelesFunc {


    public function get(){
        $planteles = PlantelesFunc ::get();
        $plantelesArray[''] = 'Selecciona un plantel';
        foreach ($planteles as $plantel){
            $plantelesArray[$plantel->clavePlantel] = $plantel -> nombrePlantel; 

        }
        return $plantelesArray; 
    }
}



?>