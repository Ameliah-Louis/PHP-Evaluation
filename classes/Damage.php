<?php

class Damage {
    public string $damage_type;
    public string $damage_type_img;
    public int $damage_dice;

    public function __construct($damage_type, $damage_type_img, $damage_dice) {
        $this->damage_type = $damage_type;
        $this->damage_type_img = $damage_type_img;
        $this->damage_dice = $damage_dice;
    }
}
