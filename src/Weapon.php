<?php
require_once __DIR__ . '/Fighter.php';
class Weapon
{ 
    private int $damage = 10;
    private string $image = 'sword.svg';


    /**
     * Get the value of damage
     */ 
    public function getDamage()
    {
        return $this->damage;
    }
    
        /**
         * Set the value of damage
         *
         * @return  self
         */ 
        public function setDamage($damage)
        {
            $this->damage = $damage;
    
            return $this;
        }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}

?>