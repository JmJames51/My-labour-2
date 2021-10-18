<?php
require_once __DIR__ . '/Fighter.php';
class Shield {

    private int $protection= 10;
    private string $image = 'shield.svg';




    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * Get the value of protection
     */ 
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Set the value of protection
     *
     * @return  self
     */ 
    public function setProtection($protection)
    {
        $this->protection = $protection;

        return $this;
    }
}


?> 