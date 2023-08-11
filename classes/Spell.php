<?php 
require_once 'Damage.php';

class Spell {
    public string $name;
    public string $school;
    public int $level;
    public $damage = 'class Damage';
    public array $desc;
    public boolval $ritual;

    public function __construct($name, $school, $level, Damage $damage, $desc, $ritual) {
        $this->name = $name;
        $this->school = $school;
        $this->level = $level;
        $this->damage = '???????????';
        $this->desc = $desc;
        $this->ritual = $ritual;
    }
}
    //  $name = "Eldritch Blast"
    //  $school = classe Evocation with parameters school_name & school_image,
    //  $level = int 0,
    //  $damage = classe Damage with parameters /damage_type & damage_type_icon related/ & damage_dice,
    //  $desc = ["A beam of crackling energy streaks toward a creature within range. 
    //                 Make a ranged spell attack against the target. On a hit, the target takes 1d10 force damage. 
    //                 The spell creates more than one beam when you reach higher levels: two beams at 5th level, three beams at 11th level, and four beams at 17th level. 
    //                 You can direct the beams at the same target or at different ones. Make a separate attack roll for each beam."
    //                 ]
    //  $ritual = false,
    //  $class = [["warlock","Warlock"]]
