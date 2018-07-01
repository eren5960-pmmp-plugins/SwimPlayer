<?php

namespace Eren5960\SwimPlayer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;

class Swim extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function yuzz(PlayerMoveEvent $e){
		$o = $e->getPlayer();
		if($o->getLevel()->getBlock($o->getSide(0))->getId() == 9 || $o->getLevel()->getBlock($o->getSide(0))->getId() == 8){
			if($o->hasPermission("use.swim")){
			$o->setSwimming(true);
			}
		}
	}
} 
