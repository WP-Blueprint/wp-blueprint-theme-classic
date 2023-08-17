<?php
/**
 * WPBlueprint Theme Classic Handler: Posttypes Handler Extension
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/post-types/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the PosttypeHandler in order to register Posttypes.
 */
class PostTypes extends \WPBlueprint\Theme\Core\Handlers\PostType {

	/**
	 * Constructor: Registering posttypes
	 */
	public function __construct() {
		$posttypes = array(
			// Define the Posttypes here.
		);

		parent::set_posttypes( $posttypes );

	}
}
