
# webtrees module hh_relation_is_descriptor

[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](http://www.gnu.org/licenses/gpl-3.0)

![webtrees major version](https://img.shields.io/badge/webtrees-v2.x.x-green)
![Latest Release](https://img.shields.io/github/v/release/hartenthaler/hh_relation_is_descriptor)

This [webtrees](https://www.webtrees.net/) custom module
provides additional relation descriptors.

## Contents
This Readme contains the following main sections

* [Description](#description)
* [Requirements](#requirements)
* [Installation](#installation)
* [Upgrade](#upgrade)
* [Contact Support](#support)
* [License](#license)

<a name="description"></a>
## Description

This custom module
provides additional relation descriptors.

Such a descriptor is a word or a phrase that states
object 1's relation is object 2.
For example, you would read the following GEDCOM code as
"Joe Jacob's great-grandson is the submitter pointed to by the XREF @S1@":

`0 INDI`

`1 NAME Joe /Jacob/`

`1 ASSO @S1@`

`2 RELA great-grandson`

<a name="requirements"></a>
## Requirements

This module requires **webtrees** version 2.0 or later.
This module has the same requirements as [webtrees#system-requirements](https://github.com/fisharebest/webtrees#system-requirements).

This module was tested with **webtrees** 2.0.19 and 2.1.0-alpha.1 version and all available themes and all other custom modules.

<a name="installation"></a>
## Installation

This section documents installation instructions for this module.

1. Download the [latest release](https://github.com/hartenthaler/hh_relation_is_descriptor/releases/latest).
3. Unzip the package into your `webtrees/modules_v4` directory of your web server.
4. Rename the folder to `hh_relation_is_descriptor`. It's safe to overwrite the respective directory if it already exists.
5. Login to **webtrees** as administrator, go to <span class="pointer">Control Panel/Modules/Genealogy/Menus</span>,
   and find the module. It will be called "Custom GEDCOM tags HH". Check if it has a tick for "Enabled".
6. Finally, click SAVE, to complete the configuration.

<a name="upgrade"></a>
## Upgrade

To update simply replace the hh_relation_is_descriptor
files with the new ones from the latest release.

<a name="support"></a>
## Support

<span style="font-weight: bold;">Issues: </span>you can report errors raising an issue in this GitHub repository.

<span style="font-weight: bold;">Forum: </span>general webtrees support can be found at the [webtrees forum](http://www.webtrees.net/)

<a name="license"></a>
## License

* Copyright (C) 2021 Hermann Hartenthaler
* **webtrees** - Copyright 2021 webtrees development team.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

* * *
