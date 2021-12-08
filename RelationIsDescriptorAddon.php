<?php

/**
 * RelationIsDescriptorAddon: custom module to add more relation descriptors
 *
 * webtrees: online genealogy
 * Copyright (C) 2021 Hermann Hartenthaler
 * Copyright (C) 2021 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Hartenthaler\Webtrees\Module\RelationIsDescriptorAddon;

use Fisharebest\Webtrees\Elements\RelationIsDescriptor;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;

use function uasort;

/**
 * Class RelationIsDescriptorAddon
 */
class RelationIsDescriptorAddon extends AbstractModule implements RelationIsDescriptor, ElementInterface, ModuleCustomInterface
{
    // List of const for module administration

    public const CUSTOM_TITLE       = 'Custom Relation Descriptors';
    public const CUSTOM_DESCRIPTION = 'Provide additional relation descriptors';
    public const CUSTOM_MODULE      = 'hh_relation_is_descriptor';
    public const CUSTOM_AUTHOR      = 'Hermann Hartenthaler';
    public const CUSTOM_GITHUB      = 'https://github.com/hartenthaler/';
    public const CUSTOM_WEBSITE     = self::CUSTOM_GITHUB . self::CUSTOM_MODULE . '/';
    public const CUSTOM_VERSION     = '2.1.0.1';
    public const CUSTOM_LAST        = self::CUSTOM_WEBSITE . 'raw/main/latest-version.txt';

    /**
     * provides additional custom relation descriptors
     *
     * A word or phrase with size=1:25 that states object 1's relation is object 2.
     * For example, you would read the following as
     * "Joe Jacob's great-grandson is the submitter pointed to by the XREF @S1@":
     * 0 INDI
     * 1 NAME Joe /Jacob/
     * 1 ASSO @S1@
     * 2 RELA great-grandson
     *
     * @param string $sex - the text depends on the sex of the *linked* individual
     * @return array<string,string>
     */
    private function customDescriptorAddons(string $sex = 'U'): array
    {
        $values = [
            'M' => [
                'guru'        => I18N::translateContext('MALE', 'Guru'),
            ],
            'F' => [
                'guru'        => I18N::translateContext('FEMALE', 'Guru'),
            ],
            'U' => [
                'guru'        => I18N::translate('Guru'),
            ],
        ];

        return $values[$sex] ?? $values['U'];
    }

    /**
     * replaces this function in the parent module
     *
     * @param string $sex - the text depends on the sex of the *linked* individual
     * @return array<string,string>
     */
    public function values(string $sex = 'U'): array
    {
        $parentValues = RelationIsDescriptor::values($sex);
        $addonValues = $this->customDescriptorAddons($sex);
        $values = array_merge($parentValues, $addonValues);

        $tmp = $values[$sex] ?? $values['U'];

        uasort($tmp, I18N::comparator());

        return $tmp;
    }

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        /* I18N: Name of a module */
        return I18N::translate(self::CUSTOM_TITLE);
    }

    /**
     * A sentence describing what this module does.
     *
     * @return string
     */
    public function description(): string
    {
        /* I18N: Description of the module */
        return I18N::translate(self::CUSTOM_DESCRIPTION);
    }

    /**
     * The version of this module.
     *
     * @return string
     */
    public function customModuleVersion(): string
    {
        return self::CUSTOM_VERSION;
    }

    /**
     * A URL that will provide the latest version of this module.
     *
     * @return string
     */
    public function customModuleLatestVersion(): string
    {
        return self::CUSTOM_LAST;
    }

    /**
     * A URL that will provide the latest version of this module.
     *
     * @return string
     */
    public function customModuleLatestVersionUrl(): string
    {
        return self::CUSTOM_LAST;
    }

    /**
     * Where to get support for this module?  Perhaps a GitHub repository?
     *
     * @return string
     */
    public function customModuleSupportUrl(): string
    {
        return self::CUSTOM_WEBSITE;
    }

    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string {
        return self::CUSTOM_AUTHOR;
    }

    /**
     * Should this module be enabled when it is first installed?
     *
     * @return bool
     */
    public function isEnabledByDefault(): bool
    {
        return true;
    }

    /**
     * Additional translations.
     *
     * @param string $language
     *
     * @return array<string,string>
     */
    public function customTranslations(string $language): array
    {
        switch ($language) {

            case 'de':
                return $this->germanTranslations();

            case 'nl':
                return $this->dutchTranslations();

            default:
                return [];
        }
    }

    /**
     * @return array<string,string>
     */
    private function germanTranslations(): array
    {
        // Note the special characters used in plural and context-sensitive translations.
        return [
            'Guru' => 'mein Guru',
        ];
    }

    /**
     * @return array<string,string>
     */
   private function dutchTranslations(): array
    {
        // Note the special characters used in plural and context-sensitive translations.
        return [
            'Guru' => 'Guru xxx',
        ];
    }
}
