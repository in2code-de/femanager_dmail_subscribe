<?php
namespace Derhansen\FemanagerDmailSubscribe\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class User
 */
class User extends \In2code\Femanager\Domain\Model\User
{
    /**
     * @var bool
     */
    protected $moduleSysDmailNewsletter = false;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Derhansen\FemanagerDmailSubscribe\Domain\Model\DmailCategory>
     */
    protected $moduleSysDmailCategory = null;

    /**
     * @var bool
     */
    protected $moduleSysDmailHtml = true;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->moduleSysDmailCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        parent::__construct();
    }

    /**
     * @return bool
     */
    public function getModuleSysDmailNewsletter()
    {
        return $this->moduleSysDmailNewsletter;
    }

    /**
     * @param bool $moduleSysDmailNewsletter
     */
    public function setModuleSysDmailNewsletter($moduleSysDmailNewsletter)
    {
        $this->moduleSysDmailNewsletter = $moduleSysDmailNewsletter;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getModuleSysDmailCategory()
    {
        return $this->moduleSysDmailCategory;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $moduleSysDmailCategory
     * @return void
     */
    public function setModuleSysDmailCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $moduleSysDmailCategory)
    {
        $this->moduleSysDmailCategory = $moduleSysDmailCategory;
    }

    /**
     * @return bool
     */
    public function getModuleSysDmailHtml()
    {
        return $this->moduleSysDmailHtml;
    }

    /**
     * @param bool $moduleSysDmailHtml
     * @return void
     */
    public function setModuleSysDmailHtml($moduleSysDmailHtml)
    {
        $this->moduleSysDmailHtml = $moduleSysDmailHtml;
    }
}
