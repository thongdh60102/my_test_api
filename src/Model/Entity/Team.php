<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string $team_name
 * @property string|null $description
 * @property string|null $position
 *
 * @property \App\Model\Entity\UserTeam[] $user_teams
 */
class Team extends Entity
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
        'team_name' => true,
        'description' => true,
        'position' => true,
        'user_teams' => true,
    ];
}
