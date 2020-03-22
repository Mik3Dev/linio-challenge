<?php 

namespace App;

use App\Libraries\Checker;

class Counter
{
    /**
     * get the list in array format function
     *
     * @return array
     */
    public function getArrayList()
    {
        $arr = [];
        $checker = new Checker();
        
        for ($i=1; $i <=100 ; $i++) { 
            $arr[] = $checker->getResult($i);
        }

        return $arr;
    }

    public function getList()
    {
        $list = '';
        $values = $this->getArrayList();
        foreach ($values as $value) {
            $list .= "$value <br>";
        }
        return $list;
    }
}