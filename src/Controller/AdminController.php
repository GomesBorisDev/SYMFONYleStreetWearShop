<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            
        ]);
    }

    /**
     * @Route("/admin/sneakers", name="adminSneakers")
     */
    public function adminSneakers()
    {
        return $this->render('admin/sneakers.html.twig', [
            
        ]);
    }

    /**
     * @Route("/admin/addSneaker", name="addSneaker")
     */
    public function addSneaker()
    {
        return $this->render('admin/addSneaker.html.twig', [
            
        ]);
    }
}
