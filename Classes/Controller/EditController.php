<?php
namespace Derhansen\FemanagerDmailSubscribe\Controller;

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

use Derhansen\FemanagerDmailSubscribe\Domain\Repository\DmailCategoryRepository;
use Psr\Http\Message\ResponseInterface;

/**
 * Class EditController
 */
class EditController extends \In2code\Femanager\Controller\EditController
{
    /**
     * Directmail Category Repository
     *
     * @var \Derhansen\FemanagerDmailSubscribe\Domain\Repository\DmailCategoryRepository
     */
    protected $dmailCategoryRepository;

    /**
     * DI for dmailCategoryRepository
     *
     * @param DmailCategoryRepository $dmailCategoryRepository
     * @return void
     */
    public function injectDmailCategoryRespository(DmailCategoryRepository $dmailCategoryRepository)
    {
        $this->dmailCategoryRepository = $dmailCategoryRepository;
    }

    /**
     * Edit action
     *
     * @return void
     */
    public function editAction(): ResponseInterface
    {
        $dmailCategories = $this->dmailCategoryRepository->findAll();
        $this->view->assign('dmailCategories', $dmailCategories);
        return parent::editAction();
    }

    /**
     * Workaround to avoid php7 warnings of wrong type hint.
     */
    public function initializeUpdateAction()
    {
        parent::initializeUpdateAction();
        if ($this->arguments->hasArgument('user')) {
            /** @var \Derhansen\FemanagerDmailSubscribe\Xclass\Extbase\Controller\Argument $user */
            $user = $this->arguments['user'];
            $user->setDataType(\Derhansen\FemanagerDmailSubscribe\Domain\Model\User::class);
        }
    }

    /**
     * action update
     *
     * @param \Derhansen\FemanagerDmailSubscribe\Domain\Model\User $user
     * @TYPO3\CMS\Extbase\Annotation\Validate("In2code\Femanager\Domain\Validator\ServersideValidator", param="user")
     * @TYPO3\CMS\Extbase\Annotation\Validate("In2code\Femanager\Domain\Validator\PasswordValidator", param="user")
     * @TYPO3\CMS\Extbase\Annotation\Validate("In2code\Femanager\Domain\Validator\CaptchaValidator", param="user")
     * @return void
     */
    public function updateAction(\In2code\Femanager\Domain\Model\User $user)
    {
        parent::updateAction($user);
    }
}
