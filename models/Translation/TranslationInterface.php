<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Translation
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Model\Translation;


interface TranslationInterface
{
    /**
     * @TODO activate method in Pimcore 10
     * @param string $domain
     * @return array
     */
    public static function getValidLanguages(string $domain): array;

    /**
     * @TODO activate method in Pimcore 10
     * @param string $domain
     * @param string $locale
     *
     * @return bool
     */
    public static function IsAValidLanguage(string $domain, string $locale): bool;

    /**
     * @param string $id
     *
     * @return mixed
     */
    public static function getByKey($id);
}
