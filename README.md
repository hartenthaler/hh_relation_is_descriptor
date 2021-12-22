
# webtrees module hh_relation_is_descriptor

[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](http://www.gnu.org/licenses/gpl-3.0)

![webtrees major version](https://img.shields.io/badge/webtrees-v2.x.x-green)
![Latest Release](https://img.shields.io/github/v/release/hartenthaler/hh_relation_is_descriptor)

!!! *This is a beta Version! Do not install in a productive system!* !!!

!!! Report issues, please !!!

This [webtrees](https://www.webtrees.net/) custom module
provides additional relation descriptors.

## Contents
This Readme contains the following main sections

* [Description](#description)
* [Usage](#usage)
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

The module supports
* INDI:ASSO:RELA (GEDCOM standard)
* INDI:*:ASSO:RELA (no standard GEDCOM, but supported by webtrees)
* INDI:*:_ASSO:RELA (using a custom tag _ASSO like in INDI:BIRT:_ASSO)
* FAM:*:_ASSO:RELA (using a custom tag _ASSO like in FAM:MARR:_ASSO).

<a name="usage"></a>
## Usage

To add your custom relation descriptors
you have to modify the file `ExtendedRelationIsDescriptor.php`.
Replace the example lines in the function valuesAddon() by your custom descriptors.
The text values depend on the sex of the *linked* individual.

If you like to add translations for your custom relation descriptors
you have to add them at the end of the file `RelationIsDescriptorAddon.php`.

<a name="requirements"></a>
## Requirements

This module requires **webtrees** version 2.1 or later.
This module has the same requirements as [webtrees#system-requirements](https://github.com/fisharebest/webtrees#system-requirements).

This module was tested with **webtrees** 2.1.0-alpha.1 version.

Using this module together with webtrees 2.0 is possible,
but you cannot use the selection menu to add a new custom relation descriptor.
You have to edit raw GEDCOM.

<a name="installation"></a>
## Installation

This section documents installation instructions for this module.

1. Download the [latest release](https://github.com/hartenthaler/hh_relation_is_descriptor/releases/latest).
3. Unzip the package into your `webtrees/modules_v4` directory of your web server.
4. Rename the folder to `hh_relation_is_descriptor`. It's safe to overwrite the respective directory if it already exists.
5. Login to **webtrees** as administrator, go to <span class="pointer">Control Panel/Modules/Other</span>,
   and find the module. It will be called "Custom Relation Descriptors".

<a name="upgrade"></a>
## Upgrade

To update simply replace the hh_relation_is_descriptor
files with the new ones from the [latest release](https://github.com/hartenthaler/hh_relation_is_descriptor/releases/latest).

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
