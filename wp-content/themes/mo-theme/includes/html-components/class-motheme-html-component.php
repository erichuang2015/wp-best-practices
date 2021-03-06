<?php
/**
 * The HTML components class
 *
 * @package MoTheme
 * @since 1.0.0
 */

if ( ! class_exists( 'MoThemeHTMLComponent' ) ) {
	/**
	 * The HTML components class.
	 *
	 * @since 1.0.0
	 */
	class MoThemeHTMLComponent extends MoThemeBase {

		/**
		 * Class arguments.
		 *
		 * @since 1.0.0
		 *
		 * @var array $arguments An Array of arguments.
		 */
		public $arguments = array(
			'attributes' => array(),
			'title'      => array(),
		);

		/**
		 * Sets up the class.
		 *
		 * @since 1.0.0
		 *
		 * @param array $arguments The class setup arguments array.
		 * @return void
		 */
		public function __construct( $arguments = array() ) {
			$this->arguments = array_merge( $this->arguments, $arguments );

			$this->attributes = new MoThemeHTMLComponentAttributes( $this->arguments['attributes'] );
			$this->title      = new MoThemeHTMLComponentTitle( $this->arguments['title'] );
		}
	}
}
