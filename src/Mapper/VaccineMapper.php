<?php

namespace App\Mapper;

use App\Entity\Vaccine;
use App\View\VaccineLightView;

class VaccineMapper
{
    public function toVaccineLightView(Vaccine $vaccine): VaccineLightView {
        return new VaccineLightView(
            $vaccine->getId(),
            $vaccine->getDateTime(),
            $vaccine->getType(),
            $vaccine->getFinalInjection()
        );
    }
}