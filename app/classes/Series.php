<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected  $endingNumber;
    protected $result;
    protected $i;
    protected $user;
    protected $oddEven;




    public function __construct($post=null)
    {

        $this-> startingNumber =$post['starting_number'];
        $this->endingNumber    = $post['ending_number'];
        $this->oddEven         = $post['odd_even'];

        if ($post['odd_even'])
        {
            $this->oddEven = $post['odd_even'];
        }
    }

    public function index()
    {

        header('Location: pages/index.php');


    }

    public function makeSeries()
    {

        if ( $this->startingNumber > $this->endingNumber)
            {
                return $this->smallToBigevenseries();
            }
        else
            {
                if ($this->oddEven == 'odd')
                {
                    return $this->smallToSmalloddseries();
                }
                elseif ($this->oddEven =='even')
                    {

                        return $this->smallToBigevenseries();
                    }
                else
                {
                    return $this->smallToBig();
                }
            }
    }


    protected function smallToSmalloddseries()
    {
        for ($this->i =$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 != 0)
            {
                $this->result .= $this->i.' ';
            }

        }
        return $this->result;
    }

    protected function smallToBigevenseries()
    {
        for ($this->i =$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 == 0)
            {
                $this->result .= $this->i.' ';
            }

        }
        return $this->result;
    }

    protected function smallToBig()
    {

        for ($this->i =$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {


            $this->result .= $this->i.' ';
        }
        return $this->result;
    }

    protected function bigToSmall()
    {
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
}