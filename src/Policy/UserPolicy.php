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
	// Unregistered users can add - treat this as registration
	// Internal users can add - treat this as manual account creation
	// External users cannot create other users
	return $this->isExternalUser($user) == false;
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
    }

    /**
     * Check if $user is authorised to access Aonghas.
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $resource
     * @return bool
     */
    public function canAccessInternal(IdentityInterface $user)
    {
	if (is_null($user))
	{
	    return false;
	}
	else
	{
	    return $this->isInternalUser($user);
	}
    }

    // check if $user is the account holder
    protected function isAccountHolder(IdentityInterface $user, User $resource)
    {
        return $resource->id === $user->getIdentifier();
    }

    // check if $user is an internal user
    protected function isInternalUser(IdentityInterface $user)
    {
	$role = $user->role;
        return $role == "int_admin";
    }

    // check if $user is an external user
    protected function isExternalUser(IdentityInterface $user)
    {
	$role = $user->role;
        return $role == "ext_user";
    }
}
