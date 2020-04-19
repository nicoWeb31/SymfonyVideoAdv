<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Component\Routing\Annotation\Route;
use App\Utils\AbstractClasses\CategoryTreeAdmin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




    /**
     * @Route("/admin")
     */

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_main_page")
     */
    public function index()
    {
        return $this->render('admin/my_profile.html.twig');
    }

    /**
     * @Route("/categories", name="categories")
     */
    public function categories(CategoryTreeAdmin $categoryTreeAdmin)
    {
        $categoryTreeAdmin->getCatergoryList($categoryTreeAdmin->buildTree());
        return $this->render('admin/categories.html.twig',[
            'categoryTreeAdmin' => $categoryTreeAdmin->catergoryList
        ]);
    }


    /**
     * @Route("/delete-category/{id}", name="delete_category")
     */
    public function deleteCategory(Category $category, EntityManagerInterface $man)
    {
        $man->remove($category);
        $man->flush();
        return $this->redirectToRoute('categories');
    }


    /**
     * @Route("/categories", name="edit_category")
     */
    public function Editcategory()
    {
        return $this->render('admin/edit_category.html.twig');
    }

    /**
     * @Route("/videos", name="videos")
     */
    public function videos()
    {
        return $this->render('admin/videos.html.twig');
    }

    /**
     * @Route("/upload-videos", name="upload_videos")
     */
    public function uploadVideos()
    {
        return $this->render('admin/upload_video.html.twig');
    }

    /**
     * @Route("/users", name="users")
     */
    public function users()
    {
        return $this->render('admin/users.html.twig');
    }
}
