<?php
class Standard_Dice
{
    private ?int $sides = 6;

    public function __construct(?int $sideNum)
    {
        $this->sides = $sideNum;
    }

    public function roll(): int
    {
        return rand(1, $this->sides);
    }

    public function __toString()
    {
        return (string)$this->sides;
    }
}
