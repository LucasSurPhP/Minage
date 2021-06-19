<?php

namespace Minage;

use pocketmine\event\Listener;
use pocketmine\{Server, Player};
use pocketmine\command\{Command, CommandSender};
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->saveDefaultConfig();
        $this->saveResource("config.yml");

        $this->getServer()->getLogger()->info("§aPlugin Minage on");
        $this->getServer()->getLogger()->info("§l§aCheck the Config !");
        $this->getserver()->getPluginManager()->registerEvents($this,$this);

        Server::getInstance()->loadLevel("Minage");

    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if ($command->getName() === "minage") {

            if ($sender instanceof Player) {

                $level = Server::getInstance()->getLevelByName("Minage");

                $sender->teleport($level->getSafeSpawn());

                $sender->sendMessage($this->getConfig()->get("successfull_tp"));
            }
        }
        return true;
    }
}


#