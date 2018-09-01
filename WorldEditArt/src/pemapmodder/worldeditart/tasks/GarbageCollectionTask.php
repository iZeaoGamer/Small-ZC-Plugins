<?php

namespace pemapmodder\worldeditart\tasks;

use pemapmodder\worldeditart\utils\provider\Cached;
use pemapmodder\worldeditart\WorldEditArt;
use pocketmine\scheduler\Task;

class GarbageCollectionTask extends Task{
	/** @var Cached */
	private $cached;
	/** @var number */
	private $expiry;

	public function __construct(WorldEditArt $main, Cached $cached){
		parent::__construct($main);
		$this->cached = $cached;
		$this->expiry = $main->getConfig()->get("data providers")["cache time"];
	}

	public function onRun(int $ticks){
		$this->cached->collectGarbage($this->expiry);
	}
}
