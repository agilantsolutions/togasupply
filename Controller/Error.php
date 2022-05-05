<?php

class _Controller_Error extends _Controller {

	public function getError($inpError) {
		$this->code = $inpError;
	}

}