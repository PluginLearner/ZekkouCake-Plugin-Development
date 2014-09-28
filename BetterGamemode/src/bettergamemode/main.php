<?php

namespace bettergamemode\BetterGamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase{}

public function onEnable() {

$this->getlogger()->info("BetterGamemode Has Been Loaded!");

}

public function onDisable() {

$this->getLogger()->info("BetterGamemode Has Been unLoaded");

}

public function onCommand(CommandSender $sender, Command $command, $label, array $args) {

  $cmd = strlower($command->getName()):


    switch($cmd){
    
    case:"creative":
      
      if (!($sender instanceof Player)){
      
        $sender->sendMessage("You don't have enough permissions to use this command!");
        return true;
        
      }
      $player = $this->getServer()->getPlayer($sender->getName());
      if ($player->hasPermission("bettergamemode.creative")){
        $player->setGamemode(1);
        
      }
      break;
      
      case:"survival":
      
      if (!($sender instanceof Player)){
      
        $sender->sendMessage("You don't have enough permissions to use this command!");
        return true;
        
      }
      $player = $this->getServer()->getPlayer($sender->getName());
      if ($player->hasPermission("bettergamemode.survival")){
        $player->setGamemode(0);
        
      }
      break;
      }
    }
    
      
    

