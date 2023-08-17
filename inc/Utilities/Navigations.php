<?php
/**
 * WPBlueprint Theme Classic Handler: Navigation Handler Extension
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/navigations/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the NavigationHandler in order to register Navigations.
 */
class Navigations extends \WPBlueprint\Theme\Core\Handlers\Navigation {

	/**
	 * Constructor: Registering navigations
	 */
	public function __construct() {
		$navigations = array(
			// Define the Navigation here.
		);

		parent::set_navigations( $navigations );
	}
}
