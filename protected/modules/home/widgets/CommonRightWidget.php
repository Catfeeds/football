<?php
class CommonRightWidget extends CWidget
{
	public $rmtjs = [];

	public $leas = [];
	public $points = [];
	public $comms = [];

	public function run()
	{
		foreach (['rmtjs','leas','points','comms'] as $key => $value) {
			$data[$value] = $this->$value;
		}
		$this->render('common',$data);
	}
}