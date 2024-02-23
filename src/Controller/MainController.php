<?php
namespace App\Controller;
// use App\Repository\PlanetRepository;
// use App\Repository\VoyageRepository;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(){
        $coucou = "coucou";
 return $this->render('base.html.twig',[
    'coucou' => $coucou,
]);
    //     VoyageRepository $voyageRepository,
    //     PlanetRepository $planetRepository,
    //     #[MapQueryParameter('query')] string $query = null,
    //     #[MapQueryParameter('planets', \FILTER_VALIDATE_INT)] array $searchPlanets = [],
    // ): Response
    // {
    //     $voyages = $voyageRepository->findBySearch($query, $searchPlanets);
    //     return $this->render('main/homepage.html.twig', [
    //         'voyages' => $voyages,
    //         'planets' => $planetRepository->findAll(),
    //         'searchPlanets' => $searchPlanets,
    //     ]);
    }
}