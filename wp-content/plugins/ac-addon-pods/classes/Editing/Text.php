<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACA_Pods_Editing_Text extends ACA_Pods_Editing {

	public function get_view_settings() {
		$data = parent::get_view_settings();
		$data['type'] = 'text';

		return $data;
	}

}
