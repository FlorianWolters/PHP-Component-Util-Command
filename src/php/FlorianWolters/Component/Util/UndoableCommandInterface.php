<?php
/**
 * `UndoableCommandInterface.php`
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
 * The interface {@see UndoableCommandInterface} specifies a reversable command
 * and can be implemented by a class to implement the *Command* behavioral
 * design pattern.
 *
 * {@inheritdoc}
 */
interface UndoableCommandInterface extends CommandInterface
{
    /**
     * Reverses the execution of this command.
     *
     * @return void
     */
    public function undo();
}
