<?php

namespace HXPHP\System\Configs;

class Mail
{
	public $from;
	public $from_mail;

	public function __construct()
	{
		$this->setFrom(array(
			'from' => 'HXPHP Framework',
			'from_mail' => 'no-reply@hxphp.com.br'
		));
		return $this;
	}

	public function setFrom(array $data)
	{
		$this->from = $data['from'];
		$this->from_mail = $data['from_mail'];

		return $this;
	}
}