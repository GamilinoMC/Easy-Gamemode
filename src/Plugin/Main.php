<?php

namespace Plugin;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $lable, array $args): bool{
        if($cmd->getName() === "test"){
            if(isset($args[0])){
                if($args[0]))
            }
        }
    return true;   
    }
}
