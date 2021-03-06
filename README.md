# FlorianWolters\Component\Util\Command

[![Build Status](https://secure.travis-ci.org/FlorianWolters/PHP-Component-Util-Command.png?branch=master)](http://travis-ci.org/FlorianWolters/PHP-Component-Util-Command)
[![Latest Stable Version](https://poser.pugx.org/florianwolters/component-util-command/version.png)](https://packagist.org/packages/florianwolters/component-util-command)
[![Latest Unstable Version](https://poser.pugx.org/florianwolters/component-util-command/v/unstable.png)](https://packagist.org/packages/florianwolters/component-util-command)

| Period of Time         | Number of Downloads                                                                                                                                                      |
| ----------------------:|:------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|
| <small>Total</small>   | [![Total Downloads](https://poser.pugx.org/florianwolters/component-util-command/downloads.png)](https://packagist.org/packages/florianwolters/component-util-command)   |
| <small>Monthly</small> | [![Monthly Downloads](https://poser.pugx.org/florianwolters/component-util-command/d/monthly.png)](https://packagist.org/packages/florianwolters/component-util-command) |
| <small>Daily</small>   | [![Daily Downloads](https://poser.pugx.org/florianwolters/component-util-command/d/daily.png)](https://packagist.org/packages/florianwolters/component-util-command)     |

**FlorianWolters\Component\Util\Command** is a simple-to-use [PHP][17] component that provides the *Command* behavioral design pattern.

## Table of Contents (ToC)

* [Introduction](#introduction)
* [Features](#features)
* [Requirements](#requirements)
* [Usage](#usage)
* [Installation](#installation)
  * [Local Installation](#local-installation)
  * [System-Wide Installation](#system-wide-installation)
* [As A Dependency On Your Component](#as-a-dependency-on-your-component)
  * [Composer](#composer)
  * [PEAR](#pear)
* [Development Environment](#development-environment)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Introduction

*Command* is a *behavioral* design pattern and defined as follows:

> "Encapsulate a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations."

-- E. Gamma, et al. Design Patterns: Elements of Reusable Object-Oriented Software. Westford: Addison-Wesley, 1995.

## Features

* Follows the naming conventions for the *Command* design pattern
  * A command offers a member method `execute()`.
  * A sequence of commands can be executed with a `MacroCommand`, which implements the *Composite* structural design pattern.
* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit tests) implemented using [PHPUnit][19].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][14]: Style Checker
        * [PHP Mess Detector (PHPMD)][18]: Code Analyzer
        * [phpcpd][4]: Copy/Paste Detector (CPD)
        * [phpdcd][5]: Dead Code Detector (DCD)
* Installable via [Composer][3] or [PEAR installer][11]:
    * Provides a [Packagist][22] package which can be installed using the dependency manager [Composer][3].
        * Click [here][21] for the package on [Packagist][22].
    * Provides a [PEAR package][13] which can be installed using the package manager [PEAR installer][11].
        * Click [here][9] for the [PEAR channel][12].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [phpDocumentor][2].
    * Click [here][1] for the current API documentation.
* Follows the [PSR-0][6] requirements for autoloader interoperability.
* Follows the [PSR-1][7] basic coding style guide.
* Follows the [PSR-2][8] coding style guide.
* Follows the [PSR-5][23] PHPDoc standard.
* Follows the [Semantic Versioning][20] Specification (SemVer) 2.0.0-rc.1.

## Requirements

* [PHP][17] >= 5.3

## Usage

The best documentation for **FlorianWolters\Component\Util\Command** are the unit tests, which are shipped in the package. You will find them installed into your [PEAR][10] repository, which on Linux systems is normally `/usr/share/php/test`.

## Installation

### Local Installation

**FlorianWolters\Component\Util\Command** should be installed using the dependency manager [Composer][3]. [Composer][3] can be installed with [PHP][6].

    php -r "eval('?>'.file_get_contents('http://getcomposer.org/installer'));"

> This will just check a few [PHP][17] settings and then download `composer.phar` to your working directory. This file is the [Composer][3] binary. It is a PHAR ([PHP][17] archive), which is an archive format for [PHP][17] which can be run on the command line, amongst other things.
>
> Next, run the `install` command to resolve and download dependencies:

    php composer.phar install

### System-Wide Installation

**FlorianWolters\Component\Util\Command** should be installed using the [PEAR installer][11]. This installer is the [PHP][17] community's de-facto standard for installing [PHP][17] components.

    pear channel-discover pear.florianwolters.de
    pear install --alldeps fw/Command

## As A Dependency On Your Component

### Composer

If you are creating a component that relies on **FlorianWolters\Component\Util\Command**, please make sure that you add **FlorianWolters\Component\Util\Command** to your component's `composer.json` file:

```json
{
    "require": {
        "florianwolters/component-util-command": "0.1.*"
    }
}
```

### PEAR

If you are creating a component that relies on **FlorianWolters\Component\Util\Command**, please make sure that you add **FlorianWolters\Component\Util\Command** to your component's `package.xml` file:

```xml
<dependencies>
  <required>
    <package>
      <name>Command</name>
      <channel>pear.florianwolters.de</channel>
      <min>0.1.0</min>
      <max>0.1.99</max>
    </package>
  </required>
</dependencies>
```

## Development Environment

If you want to patch or enhance this component, you will need to create a suitable development environment. The easiest way to do that is to install [phix4componentdev][16]:

    # phix4componentdev
    pear channel-discover pear.phix-project.org
    pear install phix/phix4componentdev

You can then clone the Git repository:

    # PHP-Component-Util-Command
    git clone http://github.com/FlorianWolters/PHP-Component-Util-Command

Then, install a local copy of this component's dependencies to complete the development environment:

    # build vendor/ folder
    phing build-vendor

To make life easier for you, common tasks (such as running unit tests, generating code review analytics, and creating the [PEAR package][13]) have been automated using [phing][15]. You'll find the automated steps inside the `build.xml` file that ships with the component.

Run the command `phing` in the component's top-level folder to see the full list of available automated tasks.

## Contributing

See [`CONTRIBUTING.md`](CONTRIBUTING.md).

## Credits

* [Florian Wolters](https://github.com/FlorianWolters)
* [All Contributors](https://github.com/FlorianWolters/PHP-Component-Util-Command/contributors)

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with this program. If not, see <http://gnu.org/licenses/lgpl.txt>.

[1]: http://blog.florianwolters.de/PHP-Component-Util-Command
     "FlorianWolters\Component\Util\Command | Application Programming Interface (API) documentation"
[2]: http://phpdoc.org
     "phpDocumentor 2"
[3]: http://getcomposer.org
     "Composer"
[4]: https://github.com/sebastianbergmann/phpcpd
     "sebastianbergmann/phpcpd · GitHub"
[5]: https://github.com/sebastianbergmann/phpdcd
     "sebastianbergmann/phpdcd · GitHub"
[6]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
     "PSR-0 requirements for autoloader interoperability"
[7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
     "PSR-1 basic coding style guide"
[8]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
     "PSR-2 coding style guide"
[9]: http://pear.florianwolters.de
     "PEAR channel of Florian Wolters"
[10]: http://pear.php.net
      "PEAR - PHP Extension and Application Repository"
[11]: http://pear.php.net/manual/en/guide.users.commandline.cli.php
      "Manual :: Command line installer (PEAR)"
[12]: http://pear.php.net/manual/en/guide.users.concepts.channel.php
      "Manual :: PEAR Channels"
[13]: http://pear.php.net/manual/en/guide.users.concepts.package.php
      "Manual :: PEAR Packages"
[14]: http://pear.php.net/package/PHP_CodeSniffer
      "PHP_CodeSniffer"
[15]: http://phing.info
      "Phing"
[16]: https://github.com/stuartherbert/phix4componentdev
      "stuartherbert/phix4componentdev · GitHub"
[17]: http://php.net
      "PHP: Hypertext Preprocessor"
[18]: http://phpmd.org
      "PHPMD - PHP Mess Detector"
[19]: http://phpunit.de
      "sebastianbergmann/phpunit · GitHub"
[20]: http://semver.org
      "Semantic Versioning"
[21]: http://packagist.org/packages/florianwolters/component-util-command
      "florianwolters/component-util-command - Packagist"
[22]: http://packagist.org
      "Packagist"
[23]: https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md
      "PSR-5 PHPDoc"
