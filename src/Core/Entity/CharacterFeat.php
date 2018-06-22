<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 15:15
 */

namespace App\Core\Entity;

/**
 * Class CharacterFeat
 * @package App\Core\Entity
 */
class CharacterFeat extends CharacterRel
{
    /**
     * @var CharacterFeat
     */
    protected $feat;

    /**
     * @return CharacterFeat
     */
    public function getFeat(): CharacterFeat
    {
        return $this->feat;
    }
}