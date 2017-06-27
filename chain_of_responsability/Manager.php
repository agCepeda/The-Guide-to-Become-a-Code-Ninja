<?php

class Manager implements IApprover
{
	private $succesor;

	public function setSuccessor(IApprover $succesor)
	{
		$this->succesor = $succesor;
	}

	public function handleRequest()
	{
		return $this->succesor->handleRequest();
	}

}