<?php

namespace App\Controller;

use App\Entity\Category;
use App\Utils\CategoryTreeFrontPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/video-list/category/{categoryname},{id}", name="video_list")
     */
    public function videolist($id, CategoryTreeFrontPage $categoryTreeFrontPage)
    {
        $subcategories = $categoryTreeFrontPage->buildTree($id);
        
        return $this->render('front/videoList.html.twig',[
            'subcategories' => $categoryTreeFrontPage->getCatergoryList($subcategories),
            dump($categoryTreeFrontPage->getCatergoryList($subcategories))
        ]);
    }

    /**
     * @Route("/video-details", name="video_details")
     */
    public function videodetails()
    {
        return $this->render('front/video-details.html.twig');
    }

    
    /**
     * @Route("/search-results", name="search_results",methods={"POST"})
     */
    public function searchResult()
    {
        return $this->render('front/search_results.html.twig');
    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing()
    {
        return $this->render('front/pricing.html.twig');
    }
    
    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render('front/register.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('front/login.html.twig');
    }

    /**
     * @Route("/payment", name="payment")
     */
    public function payment()
    {
        return $this->render('front/payment.html.twig');
    }

    public function mainCategories()
    {
        $categories = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findBy(['parent' => null],['name'=>'ASC']); 
        return $this->render('front/_main_categories.html.twig',[
            'categories' => $categories
        ]);
    }


}   