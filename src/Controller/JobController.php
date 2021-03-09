<?php

namespace App\Controller;

use App\Entity\Job;
use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/offres", name="offres")
     * @param JobRepository $jobRepository
     * @return Response
     */
    public function index(JobRepository $jobRepository): Response
    {
        $jobs = $jobRepository->findAll();
        return $this->render('offres/index.html.twig', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * @Route("/offre/{id}", name="detail_offre")
     * @param Job $job
     * @return Response
     */
    public function offreDetail(Job $job): Response
    {
        return $this->render('offres/detail.html.twig', [
            'job' => $job,
        ]);
    }
}
