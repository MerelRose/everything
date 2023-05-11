<?php
class AutoOverzicht {
    public array $autos;

    public function __construct() {
        $this->autos = [];
    }

    public function add($auto) {
        $this->auto[] = $auto;
    }

    public function getMerken() {
        $merken = [];
        foreach($this->$autos as $auto) {
            if(!in_array($auto->merk, $merken)){
                $merken[] = $auto->merk;
            }
        }
        return $merken;
    }
}
?>