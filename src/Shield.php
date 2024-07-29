<?php

class Shield
{
    public function __construct(
        private int             $protection = 10,
        private readonly string $image = 'shield.svg'
    )
    {

    }

    public function getDefense(): int
    {
        return $this->protection;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }
}