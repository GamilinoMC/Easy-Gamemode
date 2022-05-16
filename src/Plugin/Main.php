<?php

namespace Plugin;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $lable, array $args): bool{
        if($cmd->getName() === "test"){
            if($sender->hasPermission("test.cmd")){
                $sender->sendMessage("§bPingu§cGames§r: §cDu hast keine berechtigungen dafür!");
                $sender->sendPopup("§aTest erfolgreich");
            }
        }
    return true;   
    }
}
