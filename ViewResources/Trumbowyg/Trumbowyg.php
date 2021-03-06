<?php
namespace Quark\ViewResources\Trumbowyg;

use Quark\IQuarkViewResource;
use Quark\IQuarkViewResourceWithDependencies;

/**
 * Class Trumbowyg
 *
 * @package Quark\ViewResources\Trumbowyg
 */
class Trumbowyg implements IQuarkViewResource, IQuarkViewResourceWithDependencies {
	const CURRENT_VERSION = '2.9.4';

	/**
	 * @var string $_lang = TrumbowygLanguage::LANG_DEFAULT
	 */
	private $_language = TrumbowygLanguage::LANG_DEFAULT;

	/**
	 * @var string $_version = self::CURRENT_VERSION
	 */
	private $_version = self::CURRENT_VERSION;

	/**
	 * @param string $language = TumbowygLanguage::LANG_DEFAULT
	 * @param string $version = self::CURRENT_VERSION
	 */
	public function __construct ($language = TrumbowygLanguage::LANG_DEFAULT, $version = self::CURRENT_VERSION) {
		$this->_language = $language;
		$this->_version = $version;
	}

	/**
	 * @return IQuarkViewResource[]
	 */
	public function Dependencies () {
		return array(
			new TrumbowygCSS($this->_version),
			new TrumbowygJS($this->_version),
			$this->_language != TrumbowygLanguage::LANG_DEFAULT ? new TrumbowygLanguage($this->_language) : null
		);
	}
}