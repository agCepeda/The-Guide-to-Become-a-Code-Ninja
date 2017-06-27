<?php

interface IApprover
{
	public function handleRequest();
	public function setSuccessor(IApprover $succesor);
}