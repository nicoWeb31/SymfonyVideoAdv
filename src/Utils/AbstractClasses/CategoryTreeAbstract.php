<?php 
namespace App\Utils\AbstractClasses;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

abstract class CategoryTreeAbstract {

    public $categoriesArrayFromDB;
    protected static $bdconnection;
    public $catergoryList;

public function __construct(EntityManagerInterface $man , UrlGeneratorInterface $urlGen)
{
    $this->man = $man;
    $this->urlGen = $urlGen;
    $this->categoriesArrayFromDB = $this->getCatergories();
}


abstract public function getCatergoryList(array $catergories_array);

public function buildTree(int $parent_id = null): array
{
    $subCategry = [];
    foreach($this->categoriesArrayFromDB as $category)
    {
        if($category['parent_id'] == $parent_id)
        {
            $children = $this->buildTree($category['id']);
            if($children)
            {
                $category['children'] = $children;
            }
            $subCategry[]= $category;
        }
    }
    return $subCategry;
}

private function getCatergories(): array
{
    if(self::$bdconnection)
    {
        return self::$bdconnection;
    }

    else
    {

        $conn = $this->man->getConnection();
        $sql = " SELECT * FROM categotries ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }


}



}