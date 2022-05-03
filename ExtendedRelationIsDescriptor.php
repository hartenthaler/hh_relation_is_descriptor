<?php

/**
 * class ExtendedRelationIsDescriptor
 * module RelationIsDescriptorAddon
 * custom module to add more relation descriptors which are used in ASSO:TYPE or _ASSO:TYPE
 *
 * webtrees: online genealogy
 * Copyright (C) 2022 Hermann Hartenthaler
 * Copyright (C) 2022 webtrees development team
 *
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

use function uasort;

/*
 * class extends original class RelationIsDescriptor with custom descriptor values
 */
class ExtendedRelationIsDescriptor extends RelationIsDescriptor
{
    protected const SEX = ['M', 'F', 'U'];

    /**
     * provides additional custom relation descriptors
     * Replace the example lines in this function by your custom descriptors!
     *
     * @return array
     */
    private function valuesAddon(): array
    {
        return [
            'M' => [
                'guru'        => I18N::translateContext('MALE', 'Guru'),
                'godparent'   => I18N::translate('Godfather'),
                'landlord'    => I18N::translateContext('MALE', 'Landlord'),
            ],
            'F' => [
                'guru'        => I18N::translateContext('FEMALE', 'Guru'),
                'godparent'   => I18N::translate('Godmother'),
                'landlord'    => I18N::translateContext('FEMALE', 'Landlord'),
            ],
            'U' => [
                'guru'        => I18N::translate('Guru'),
                'godfather'   => I18N::translate('Godfather'),
                'godmother'   => I18N::translate('Godmother'),
                'godparent'   => I18N::translate('Godparent'),
                'landlord'    => I18N::translate('Landlord'),
            ],
        ];
    }

    /**
     * original value list as a copy from /app/Elements/RelationIsDescriptor
     *
     * @return array
     */
    private function valuesOriginal(): array
    {
        foreach (self::SEX as $sexPart) {
            $values[$sexPart] = RelationIsDescriptor::values($sexPart);
        }
        return $values;
    }

    /**
     * @param string $sex - the text depends on the sex of the *linked* individual
     * @return array
     */
    public function values(string $sex = 'U'): array
    {
        $values = [];
        $valuesOriginal = $this->valuesOriginal();
        $valuesAddon = $this->valuesAddon();
        foreach (self::SEX as $sexPart) {
            $values[$sexPart] = array_merge($valuesOriginal[$sexPart], $valuesAddon[$sexPart]);
        }

        $tmp = $values[$sex] ?? $values['U'];
        uasort($tmp, I18N::comparator());

        return $tmp;
    }
}
