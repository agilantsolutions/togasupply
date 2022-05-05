<?php

abstract class _ extends _Framework {

	// Defaults
	const NAMESPACE = 'togasupply';
	const APPLICATION_NAME = 'Empty Project';
	const DEFAULT_LAYOUT = self::LAYOUT_MAIN;
	const DEFAULT_THEME = self::THEME_DEFAULT;
	const DEFAULT_DATABASE = self::DB_MYDATABASE;

	// Layouts
	const LAYOUT_MAIN = 'Layout/Main';

	// Themes
	const THEME_DEFAULT = 'Theme/Default';

	// Databases
	const DB_MYDATABASE = 'MyDatabase';

	// Initialize the project with any required frameworks or other requirements
	public static function initialize() {
		// Place other requirements here, for example:
		$component = new _Component_Library_FontAwesome();
		$component->version = '6';

		$component = new _Component_Library_jQuery();
		$component->version = '3.6.0';

		$component = new _Component_Library_jQueryUI();
		$component->version = '1.13.1';

		// _Theme::set(self::THEME_DEFAULT);
		// _::debug();
	}

	// If needed, we can put functions here. such as:

	public static function trimArgSpaces($str) {
		// Accept spaces after commas with multiple arguments
		// Trim the space here
		return str_replace(", ", ",", $str);
	}

	public static function parseArgs($str) {
			$str = \_::trimArgSpaces($str);
			$argArray = explode(",", $str);
			return $argArray;
	}

}