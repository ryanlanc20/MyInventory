<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\User;
use Authorization\IdentityInterface;

/**
 * User policy
 */
class UserPolicy
{
    /**
     * Check if $user can add User
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $resource
     * @return bool
     */
    public function canAdd(IdentityInterface $user, User $resource)
    {
        return $this->isAdmin($user);
    }

    /**
     * Check if $user can edit User
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $resource
     * @return bool
     */
    public function canEdit(IdentityInterface $user, User $resource)
    {
        return $this->isOwner($user,$resource) || $this->isAdmin($user);
    }

    /**
     * Check if $user can delete User
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $resource
     * @return bool
     */
    public function canDelete(IdentityInterface $user, User $resource)
    {
        return $this->isAdmin($user);
    }

    /**
     * Check if $user can view User
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $resource
     * @return bool
     */
    public function canView(IdentityInterface $user, User $resource)
    {
        return $this->isAdmin($user) || $this->isOwner($user,$resource);
    }

    public function canIndex(IdentityInterface $user, User $resource)
    {
        return $this->isAdmin($user);
    }

    protected function isOwner(IdentityInterface $user, User $resource)
    {
        return $user->id === $resource->id;
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->getOriginalData()->get("is_admin");
    }
}
