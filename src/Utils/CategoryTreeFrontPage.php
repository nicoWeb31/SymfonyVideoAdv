<?php 
namespace App\Utils;

use App\Twig\AppExtension;
use App\Utils\AbstractClasses\CategoryTreeAbstract;

class CategoryTreeFrontPage extends CategoryTreeAbstract{

    public $html_1 = '<ul>';
    public $html_2 = '<li>';
    public $html_3 = '<a href="';
    public $html_4 = '">';
    public $html_5 = '</a>';
    public $html_6 = '</li>';
    public $html_7 = '</ul>';




    public function getCatergoryListAndParent(int $id): string
    {
        $this->slugger =new AppExtension;//twig extension to sluggfy url's for cat
        $parentData = $this->getMainParent($id);//main parent of category
        $this->mainParentNameId = $parentData['id'];
        $this->mainParentName = $parentData['name'];
        $key = array_search($id,array_column($this->categoriesArrayFromDB,'id'));
        $this->currentCategoryName = $this->categoriesArrayFromDB[$key]['name'];
        $catergories_array = $this->buildTree($parentData['id']);
        return $this->getCatergoryList($catergories_array);
    }



    public function getCatergoryList(array $catergories_array)


    {


        $this->catergoryList  .= $this->html_1;
            foreach($catergories_array as $value)
            {
                $catName = $this->slugger->slugify($value['name']);
                $url = $this->urlGen->generate('video_list',['categoryname' => $value['name'],'id'=>$value['id']]);
                
                $this->catergoryList  .= $this->html_2 . $this->html_3 . $url . $this->html_4 . $value['name'] . $this->html_5;
                
                if(!empty($value['children']))
                {
                    $this->getCatergoryList($value['children']);
                }
                $this->catergoryList .= $this->html_6;
            }
        $this->catergoryList  .=$this->html_7;  

        return $this->catergoryList;
    }

    public function getMainParent(int $id): array
    {
        $key = array_search($id,array_column($this->categoriesArrayFromDB,'id'));
        if($this->categoriesArrayFromDB[$key]['parent_id'] != null)
        {
            return $this->getMainParent($this->categoriesArrayFromDB[$key]['parent_id']);
        }else{
            return [
                'id'=>$this->categoriesArrayFromDB[$key]['id'],
                'name'=>$this->categoriesArrayFromDB[$key]['name']
            ];
        }
    }


}