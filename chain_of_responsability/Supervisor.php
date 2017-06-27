<?php

class Supervisor implements IApprover
{
	private $succesor;

	public function __construct(IApprover $succesor)
	{
		$this->succesor = $succesor;
	}

	public function handleRequest()
	{
		return $this->succesor->handleRequest();
	}
}