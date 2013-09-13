<?php
/**
 * `MacroCommand.php`
 *
 * This file is part of FlorianWolters\Component\Util\Command.
 *
 * FlorianWolters\Component\Util\Command is free software: you can redistribute
 * it and/or modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * FlorianWolters\Component\Util\Command is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser
 * General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with FlorianWolters\Component\Util\Command.  If not, see
 * <http://gnu.org/licenses/lgpl.txt>.
 *
 * PHP version 5.3
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Util-Command
 * @since     0.1.0 introduced
 */

namespace FlorianWolters\Component\Util;

/**
 * The class {@see MacroCommand} executes a sequence of commands.
 *
 * A {@see MacroCommand} has no explicit receiver, because the commands it
 * sequences define their own receiver.
 * 
 * The class {@see MacroCommand} implements the *Composite* structural design
 * pattern. *Composite* is defined as:
 *
 * > "Compose objects into tree structures to represent part-whole hierarchies.
 * > Composite lets clients treat individual objects and compositions of objects
 * > uniformly."
 */
class MacroCommand implements CommandInterface
{
    /**
     * The sequence of commands to execute with this {@see MacroCommand}.
     *
     * @var array
     */
    private $commands = array();

    /**
     * Adds the specified command to this {@see MacroCommand}.
     *
     * @param CommandInterface $command The command to add.
     *
     * @return void
     */
    public function addCommand(CommandInterface $command)
    {
        $this->commands[] = $command;
    }

    /**
     * Removes the specified command from this {@see MacroCommand}.
     *
     * @param CommandInterface $command The command to remove.
     *
     * @return bool `true` if the specified command has been removed or `false`
     *         if the specified command does not exist.
     */
    public function removeCommand(CommandInterface $command)
    {
        $result = false;
        $index = array_search($command, $this->commands);

        if (false !== $index) {
            unset($this->commands[$index]);
            $result = true;
        }

        return $result;
    }
    
    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function execute()
    {
        /* @var $command CommandInterface */
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
