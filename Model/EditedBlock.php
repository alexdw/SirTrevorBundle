<?php

namespace EdsiTech\SirTrevorBundle\Model;

class EditedBlock
{
    /**
     * @var int|null
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $position;

    /**
     * @var string
     */
    public $textContent;

    /**
     * @var array
     */
    public $rawData;
}
