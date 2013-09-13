<?php
/**
 * `MacroCommandTest.php`
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
 * Test class for {@see MacroCommand}.
 *
 * @covers FlorianWolters\Component\Util\MacroCommand
 */
class MacroCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The {@see MacroCommand} under test.
     *
     * @var MacroCommand
     */
    private $macroCommand;

    /**
     * The command to add, execute and remove.
     *
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $command;

    /**
     * Sets up this fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        $this->macroCommand = new MacroCommand();
        $this->command = $this->getMock(__NAMESPACE__ . '\CommandInterface');
    }

    /**
     * @return void
     *
     * @test
     */
    public function testCommandSequenceIsInitallyEmpty()
    {
        $this->assertAttributeCount(0, 'commands', $this->macroCommand);
    }

    /**
     * @return MacroCommand
     *
     * @test
     */
    public function testAddCommand()
    {
        $this->macroCommand->addCommand($this->command);

        $attributeName = 'commands';
        $this->assertAttributeCount(1, $attributeName, $this->macroCommand);
        $this->assertAttributeContains($this->command, $attributeName, $this->macroCommand);

        return $this->macroCommand;
    }

    /**
     * @return void
     *
     * @test
     */
    public function testRemoveCommandWithUnknownCommand()
    {
        $command = $this->getMock(__NAMESPACE__ . '\CommandInterface');

        $actual = $this->macroCommand->removeCommand($command);

        $this->assertFalse($actual);
    }

    /**
     * @return MacroCommand
     *
     * @test
     */
    public function testExecute()
    {
        $this->command->expects($this->once())
            ->method('execute');
        $this->macroCommand->addCommand($this->command);
        $this->macroCommand->execute();
    }

    /**
     * @return void
     *
     * @depends testAddCommand
     * @test
     */
    public function testRemoveCommandWithKnownCommand(MacroCommand $macroCommand)
    {
        $actual = $macroCommand->removeCommand($this->command);

        $this->assertTrue($actual);
    }
}
