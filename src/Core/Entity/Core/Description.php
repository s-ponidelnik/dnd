<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:27
 */

namespace App\Core\Entity\Core;

/**
 * Class Description
 * @package App\Core\Entity
 * @ORM\Entity(repositoryClass="App\Core\Entity\Core\Repository\DescriptionRepository")
 */
class Description
{
    /**
     * @ORM\Column(type="string")
     * @var string|null
     */
    protected $serrialazedData;
    /** @var array */
    protected $data;
    /** @var array */
    protected $tags;

    protected function getAll()
    {
        return $this->data;
    }

    protected function getByTag(string $tag): array
    {
        $result = [];
        if (isset($this->tags[$tag])) {
            $idsByTag = $this->tags[$tag];
            if (is_array($idsByTag)) {
                foreach ($idsByTag as $idByTag) {
                    if (isset($this->data[$idByTag]))
                        $result[] = $this->data[$idByTag];
                }
            } else {
                if (isset($this->data[$idsByTag]))
                    $result[] = $this->data[$idsByTag];
            }
        }
        return $result;
    }
}