<?php

class Weapon
{


    public function __construct(
        private int    $damage = 10,
        private string $image = 'sword.svg',
    )
    {
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

}