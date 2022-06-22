<?php

/*
 * This file is part of the overtrue/socialite.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cnpscy\BaseSocialite;

interface ProviderInterface
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @param \Cnpscy\BaseSocialite\AccessTokenInterface $token
     *
     * @return \Cnpscy\BaseSocialite\User
     */
    public function user(AccessTokenInterface $token = null);
}
