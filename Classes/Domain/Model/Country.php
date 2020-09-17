<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (SV)" extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameSv = '';

    /**
     * @return string
     */
    public function getShortNameSv(): string
    {
        return $this->shortNameSv;
    }

    /**
     * @param string $shortNameSv
     */
    public function setShortNameSv(string $shortNameSv)
    {
        $this->shortNameSv = $shortNameSv;
    }
}
