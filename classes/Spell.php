<?php 

class Spell 
{
    private int $id  ;
    // 1
    private string $spell_name ; 
    // "Eldritch Blast"    ;
    private int $spell_level  ;
    // 0    ;
    private int $school_id  ;
    // 8    ;
    private string $spell_property ;
        // "<p> Temps d'incantation : 1 action</p><br />
        // <p> Portée : 36 mètres </p><br />
        // <p> Composantes : V, S </p><br />
        // <p> Durée : instantanée </p><br />";
    // private int $castTimeValue;
    // private string $castTimeUnit;
    // private int $spell_range;
    // private int $spell_component    ;
    private string $spell_desc ;
    // // "<p> Un rayon d'énergie crépitante zigzague jusqu'à une créature à portée. Effectuez 
    // une attaque à distance avec un sort contre la cible. En cas de réussite, la cible subit 1d10 dégâts de force.
    // Ce sort crée plus d'un rayon lorsque vous montez en niveau : deux rayons au niveau 5, trois rayons au niveau 11, 
    // et quatre rayons au niveau 17. Vous pouvez diriger les rayons sur une cible unique et les répartir entre différentes 
    // créatures. Effectuez un jet d'attaque séparé pour chaque rayon. </p><br />"    ;



    public function __construct(
        int $id, 
        string $spell_name, 
        int $spell_level, 
        int $school_id, 
        string $spell_property, 
        string $spell_desc
        ) {
    $this->setId($id);
    $this->setSpellName($spell_name);
    $this->setSpellLevel($spell_level);
    $this->setSchoolId($school_id);
    $this->setSpellProperty($spell_property);
    // $this->spellPower = $this->level = $level . $this->school_id = $school_id;
    // $this->castTimeValue = $castTimeValue;
    // $this->castTimeUnit = $castTimeUnit;
    // $this->range = $range . 'mètres';
    // $this->component = $component;
    $this->setSpellDesc($spell_desc);
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSpellName(): ?string
    {
        return $this->spell_name;
    }
    public function setSpellName(string $spell_name): self
    {
        $this->spell_name = $spell_name;
        return $this;
    }

    public function getSpellLevel(): ?int
    {
        return $this->spell_level;
    }
    public function setSpellLevel(int $spell_level): self
    {
        $this->spell_level = $spell_level;
        return $this;
    }

    public function getSchoolId(): ?int
    {
        return $this->school_id;
    }
    public function setSchoolId(int $school_id): self
    {
        $this->school_id = $school_id;
        return $this;
    }

    public function getSpellProperty(): ?string
    {
        return $this->spell_property;
    }
    public function setSpellProperty(string $spell_property): self
    {
        $this->spell_property = $spell_property;
        return $this;
    }

    public function getSpellDesc(): ?string
    {
        return $this->spell_desc;
    }
    public function setSpellDesc(string $spell_desc): self
    {
        $this->spell_desc = $spell_desc;
        return $this;
    }

    public function deleteCharSpell(int $character_id, int $spells_id) : void
{
  $pdo = getDbConnection();
  $stmt = $pdo->prepare("DELETE FROM characters_has_spells WHERE characters_has_spells.characters_id = :character_id AND characters_has_spells.spells_id = :spells_id;");
  $stmt->execute(['character_id' => $character_id, 'spells_id' => self::$id]);
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
