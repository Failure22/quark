<?php
namespace Quark\Extensions\OAuth;

use Quark\IQuarkAuthorizableModel;

/**
 * Interface IQuarkOAuthAuthorizableModel
 *
 * @package Quark\Extensions\OAuth
 */
interface IQuarkOAuthAuthorizableModel extends IQuarkAuthorizableModel {
	/**
	 * @return OAuthToken
	 */
	public function OAuthModelToken();

	/**
	 * @return OAuthError
	 */
	public function OAuthModelError();

	/**
	 * @param string[] $scope
	 *
	 * @return bool
	 */
	public function OAuthModelCheckScope($scope);
}