<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @property ACA_Pods_Column $column
 */
class ACA_Pods_Editing extends ACP_Editing_Model {

	public function __construct( ACA_Pods_Column $column ) {
		parent::__construct( $column );
	}

	public function get_view_settings() {
		$data = array(
			'type' => 'text',
		);

		return $data;
	}

	public function save( $id, $value ) {
		$field = $this->column->get_field();

		$pod = pods( $field->get( 'pod' ), $id, true );
		$pod->save( array( $field->get( 'name' ) => $value ) );

		return true;
	}

}
