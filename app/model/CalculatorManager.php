<?php

namespace App\Model;

use Nette;

class CalculatorManager
{
    use Nette\SmartObject;

    /**
     * @var Nette\Database\Context
     */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        parent::__construct();
        $this->database = $database;
    }

    public function getPublicArticles()
    {
        return $this->database->table('posts')
            ->where('created_at < ', new \DateTime)
            ->order('created_at DESC');
    }
}