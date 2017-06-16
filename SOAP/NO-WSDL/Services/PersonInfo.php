<?php
//服务具体实现类
class PersonInfo{
	private $name = "null";

    public function getName(){
        return $this->name;
    }

    public function setName($name){
    	$this->name = $name;
    }

    public function add($a, $b){
    	return $a + $b;
    }
}
?>