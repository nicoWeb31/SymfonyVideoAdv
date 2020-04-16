<?php 
namespace App\Utils;

use App\Utils\AbstractClasses\CategoryTreeAbstract;

class CategoryTreeFrontPage extends CategoryTreeAbstract{


    public function getCatergoryList(array $catergories_array)
    {
        $this->catergoryList  .='<ul>';
            foreach($catergories_array as $value)
            {
                $catName = $value['name'];
                $url = $this->urlGen->generate('video_list',['categoryname' => $catName,'id'=>$value['id']]);
                
                $this->catergoryList  .= '<li>' . '<a href="' . $url . '">' . $catName . '</a>';
                
                if(!empty($value['children']))
                {
                    $this->getCatergoryList($value['children']);
                }
            }
        $this->catergoryList  .='</ul>';  

        return $this->catergoryList;
    }



}