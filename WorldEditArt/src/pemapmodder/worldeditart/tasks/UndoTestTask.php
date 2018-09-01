<?php

namespace pemapmodder\worldeditart\tasks;

use pemapmodder\worldeditart\utils\spaces\Space;
use pemapmodder\worldeditart\WorldEditArt;
use pocketmine\scheduler\Task;

class UndoTestTask extends Task{
	/** @var Space */
	private $space;

	public function __construct(WorldEditArt $main, Space $space){
		$this->space = clone $space;
	}

	public function onRun(int $ticks) : void{
//		$this->space->undoLastTest();
	}

	public function onCancel(){
		$this->onRun(0);
	}
}
