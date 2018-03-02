<?php

namespace App\Presenters;


class HomepagePresenter extends BasePresenter
{
	/* @var CalculatorManger*/
	private $calculatorManager;

	public function __construct(CalculatorManger $calculatorManager)
	{
		 parent::__construct();
		$this->calculatorManager = $calculatorManager;
	}

	public function renderDefault()
	{
		$this->template->posts = $this->calculatorManager->getPublicArticles()->limit(5);
	}
}
