<?php
interface CarServiceInterface{
    public function getCost();

}
class BasicInspection implements CarServiceInterface{


    public function getCost(){
        return  10;
    }

}
class TireRotation implements CarServiceInterface{

    protected $carService;
    public function __construct(CarServiceInterface $carService){
        $this->carService = $carService;
    }
    public function getCost(){
        return 20 + $this->carService->getCost();
    }
}
class OilChange implements CarServiceInterface{

    protected $carService;
    public function __construct(CarServiceInterface $carService){
        $this->carService = $carService;
    }
    public function getCost(){
        return 10 + $this->carService->getCost();
    }
}

echo   (new OilChange(new TireRotation(new BasicInspection())))->getCost();


?>