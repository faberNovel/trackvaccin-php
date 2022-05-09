<?php

namespace App\Controller;

use App\Mapper\VaccineMapper;
use App\Repository\VaccineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VaccineController extends AbstractController
{
    private VaccineRepository $repository;
    private VaccineMapper $mapper;

    /**
     * @param VaccineRepository $repository
     */
    public function __construct(VaccineRepository $repository, VaccineMapper $mapper)
    {
        $this->repository = $repository;
        $this->mapper = $mapper;
    }

    #[Route('/vaccine', name: 'app_vaccine')]
    public function index(): Response
    {
        $vaccineEntities = $this->repository->findAll();
        $views = array_map([$this->mapper, 'toVaccineLightView'], $vaccineEntities);

        return $this->json($views);
    }
}
