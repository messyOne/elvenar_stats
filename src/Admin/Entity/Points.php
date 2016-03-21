<?php

namespace Admin\Entity;

use Loo\Database\EntityInterface;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="points")
 */
class Points implements EntityInterface
{
	/**
	 * @Column(type="integer")
	 * @Id
	 *
	 * @var int
	 */
	protected $date;

	/**
	 * @Column(type="string")
	 * @Id
	 *
	 * @var string
	 */
	protected $user;

	/**
	 * @Column(type="integer")
	 *
	 * @var int
	 */
	protected $points;

	/**
	 * @return int
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @return string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @return int
	 */
	public function getPoints() {
		return $this->points;
	}
}
