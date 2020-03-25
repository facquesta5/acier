<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fornecedore Entity.
 *
 * @property int $id
 * @property string $apelido
 * @property string $razao_social
 * @property string $cnpj
 * @property string $telefone
 * @property string $contato
 * @property string $endereco
 */
class Fornecedore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
