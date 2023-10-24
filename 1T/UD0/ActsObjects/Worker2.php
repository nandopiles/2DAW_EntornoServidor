<?php

class Worker2 {
    private $nameWorker;
    private $salaryWorker;

    /**
     * Get the value of nameWorker
     */ 
    public function getNameWorker()
    {
        return $this->nameWorker;
    }

    /**
     * Set the value of nameWorker
     *
     * @return  self
     */ 
    public function setNameWorker($nameWorker)
    {
        $this->nameWorker = $nameWorker;

        return $this;
    }

    /**
     * Get the value of salaryWorker
     */ 
    public function getSalaryWorker()
    {
        return $this->salaryWorker;
    }

    /**
     * Set the value of salaryWorker
     *
     * @return  self
     */ 
    public function setSalaryWorker($salaryWorker)
    {
        $this->salaryWorker = $salaryWorker;

        return $this;
    }
}