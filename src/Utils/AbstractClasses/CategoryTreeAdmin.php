<?php 
namespace App\Utils\AbstractClasses;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use App\Utils\AbstractClasses\CategoryTreeAbstract;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CategoryTreeAdmin extends CategoryTreeAbstract{

    public $html_1 = '<ul class="fa-ul text-left">';
    public $html_2 = '<li><i class="fa-li fa fa-arrow-right"></i>  ';
    public $html_3 = '<a href="';
    public $html_4 = '">';
    public $html_5 = '</a> <a onclick="return confirm(\'Are you sure?\');" href="';
    public $html_6 = '">';
    public $html_7 = '</a>';
    public $html_8 = '</li>';
    public $html_9 = '</ul>';


    public function getCatergoryList(array $catergories_array)
    {
        $this->catergoryList  .= $this->html_1;
            foreach($catergories_array as $value)
            {
                $url_edit = $this->urlGen->generate('edit_category', ['id' => $value['id']]);
                $url_delete = $this->urlGen->generate('delete_category', ['id' => $value['id']]);

                //$catName = $this->slugger->slugify($value['name']);
                $this->catergoryList .= $this->html_2 . $value['name'] . $this->html_3 . $url_edit . $this->html_4 . ' Edit' . $this->html_5 . $url_delete . $this->html_6 . 'Delete' . $this->html_7;
            if (!empty($value['children']))
            {
                $this->getCatergoryList($value['children']);
            }
            $this->catergoryList .= $this->html_8;
        }
        $this->catergoryList .= $this->html_9;
        return $this->catergoryList;
    }


}