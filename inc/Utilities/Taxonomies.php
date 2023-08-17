<?php
/**
 * WPBlueprint Theme Classic Handler: Taxonomies Handler Extension
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/taxonomies/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the TaxonomyHandler in order to register Taxonomies.
 */
class Taxonomies extends \WPBlueprint\Theme\Core\Handlers\Taxonomy {

	/**
	 * Constructor: Registering taxonomies
	 */
	public function __construct() {
		$taxonomies = array(
			// Define the Taxonomies here.
		);

		parent::set_taxonomies( $taxonomies );
	}
}
