<?php
namespace App;


class Mapv1
{   
    protected $data;
    
    function __construct($data) {
       $this->data = $data;
    }
    
    function getFolder(){
        return $this->data['folder'];
    }
    
    function getVersion(){
        return $this->data['version'];
    }
    
    function getOrganization(){
        return $this->data['organization'];
    }
    
    function getBuilding(){
        return $this->data['building'];
    }
    
    function getFloors(){
        return $this->data['building']['floors'];
    }
    
    function getSearchPoints(){
        $searchPoints = array();
        foreach($this->getFloors() as $i=>$floor) {
            foreach($floor['points'] as $point) {
                $searchPoints[$point['name']] =  $i;
            }
        }
        return $searchPoints;
    }
}

