<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:36
 */

namespace App\Core\Entity\Item;

class Armor extends Inventory implements ArmorInterface
{
    const TYPE = 'ARMOR';

    /** @var ArmorPropertyCollection */
    protected $properties;

    /** @var ArmorType */
    protected $armorType;

    protected $_properties;

    public function getArmorType(): ArmorType
    {
        return $this->armorType;
    }

    public function setArmorType(ArmorType $armorType): void
    {
        $this->armorType = $armorType;
    }

    public function getProperties()
    {
        if (!$this->_properties) {
            $this->_properties = $this->properties;
            if ($this->armorType) {
                /** @var ArmorProperty $property */
                foreach ($this->armorType->getProperties()->toArray() as $property) {
                    if (!$this->_properties->containsKey($property->getName())) {
                        $this->_properties->set($property->getName(), $property);
                    }
                }
            }

        }
        return $this->_properties;
    }

    public function setProperties(ArmorPropertyCollection $properties): void
    {
        $this->properties = $properties;
    }

}