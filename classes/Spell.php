<?php 

class Spell 
{
    public int $id = 1;
    public string $name = "Eldritch Blast";
    public int $level = 0;
    public int $school_id = 8;
    public string $spell_property = 
        "<p> Temps d'incantation : 1 action</p><br />
        <p> Portée : 36 mètres </p><br />
        <p> Composantes : V, S </p><br />
        <p> Durée : instantanée </p><br />";
    // public int $castTimeValue;
    // public string $castTimeUnit;
    // public int $spell_range;
    // public int $spell_component;
    public string $desc = "<p> Un rayon d'énergie crépitante zigzague jusqu'à une créature à portée. Effectuez 
    une attaque à distance avec un sort contre la cible. En cas de réussite, la cible subit 1d10 dégâts de force.
    Ce sort crée plus d'un rayon lorsque vous montez en niveau : deux rayons au niveau 5, trois rayons au niveau 11, 
    et quatre rayons au niveau 17. Vous pouvez diriger les rayons sur une cible unique et les répartir entre différentes 
    créatures. Effectuez un jet d'attaque séparé pour chaque rayon. </p><br />";



    public function __construct($id, $name, $level, $school_id, $spell_property, $desc) 
    {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
    $this->school_id = $school_id;
    $this->spell_property = $spell_property;
    // $this->spellPower = $this->level = $level . $this->school_id = $school_id;
    // $this->castTimeValue = $castTimeValue;
    // $this->castTimeUnit = $castTimeUnit;
    // $this->range = $range . 'mètres';
    // $this->component = $component;
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
