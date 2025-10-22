<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProdottoRepository;
use App\Entity\Prodotto;
use App\Form\ProdottoType;  
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
final class ProductController extends AbstractController
{
    #[Route('/product', name: 'product_index')]
    public function index(ProdottoRepository $repository): Response
    {
     
        return $this->render('product/index.html.twig', [
            'products' => $repository->findAll(),
        ]);
    }
    #[Route('/product/{id<\d+>}', name: 'product_show')]
    public function show(Prodotto $product): Response
    {
        return $this->render('product/show.html.twig',  
        ['product'=> $product]);
       
    }
    #[Route('/product/new', name:'product_new')]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $product = new Prodotto();
     
        $form = $this->createForm(ProdottoType::class, $product);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
            $manager->persist($product);
            $manager->flush();
            return $this->redirectToRoute('product_show', ['id'=> $product->getId()]);

        }

         return $this->render('product/new.html.twig', ['form'=> $form, ]);
    }
}
