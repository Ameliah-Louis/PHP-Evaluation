<?php 
require_once 'Damage.php';

class Spell 
{
    public int $id;
    public string $name;
    public int $level;
    public int $school_id;
    public string $desc;



    public function __construct($id, $name, $level, $school_id, $desc) 
    {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
    $this->school_id = $school_id;
    $this->desc = $desc;
    }
}
    //  $name = "Eldritch Blast"
    //  $school_id = classe Evocation with parameters school_name & school_image,
    //  $level = int 0,
    //  $desc = ["A beam of crackling energy streaks toward a creature within range. 
    //                 Make a ranged spell attack against the target. On a hit, the target takes 1d10 force damage. 
    //                 The spell creates more than one beam when you reach higher levels: two beams at 5th level, three beams at 11th level, and four beams at 17th level. 
    //                 You can direct the beams at the same target or at different ones. Make a separate attack roll for each beam."
    //                 ]
    //  $class = [["warlock","Warlock"]]
