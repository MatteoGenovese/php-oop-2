<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Kart.php';
require_once __DIR__ . '/User.php';

class CreditCard {

    protected $id;
    protected $bank;
    protected $expirationDate;
    protected $backCode;
    protected $credit;

    function __construct($_id, $_bank, $_expirationDate, $_backCode, $_credit)
    {   
        $this->setId($_id);
        $this->setBank($_bank);
        $this->setExpirationDate($_expirationDate);
        $this->setBackCode($_backCode);
        $this->setCredit($_credit);
    }

    protected function setId($_id){
        $this->id=$_id;
    }
    protected function setBank($_bank){
        $this->bank=$_bank;
    }
    protected function setExpirationDate($_expirationDate){
        $this->expirationDate=$_expirationDate;
    }
    protected function setBackCode($_backCode){
        $this->backCode=$_backCode;
    }
    protected function setCredit($_credit){
        $this->credit=$_credit;
    }

    public function getId(){
        return $this->id;
    }
    public function getBank(){
        return $this->bank;
    }
    public function getExpirationDate(){
        return $this->expirationDate;
    }
    public function getBackCode(){
        return $this->backCode;
    }
    public function getCredit(){
        return $this->credit;
    }

}