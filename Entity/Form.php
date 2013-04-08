<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Form
{
    /**
     * @Assert\NotBlank()
     */
    protected $text;
    protected $date;
    protected $choice;
    protected $checkbox;
    protected $file;
    protected $repeated;
    protected $collection;
    protected $choiceMultiple;

    public function setCheckbox($checkbox)
    {
        $this->checkbox = $checkbox;
    }

    public function getCheckbox()
    {
        return $this->checkbox;
    }

    public function setChoice($choice)
    {
        $this->choice = $choice;
    }

    public function getChoice()
    {
        return $this->choice;
    }

    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    public function getCollection()
    {
        return $this->collection;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setRepeated($repeated)
    {
        $this->repeated = $repeated;
    }

    public function getRepeated()
    {
        return $this->repeated;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setChoiceMultiple($choiceMultiple)
    {
        $this->choiceMultiple = $choiceMultiple;
    }

    public function getchoiceMultiple()
    {
        return $this->choiceMultiple;
    }

    public static function getChoises()
    {
        return array(
            0 => 'Choise 1',
            1 => 'Choise 2',
            2 => 'Choise 3',
            3 => 'Choise 4'
        );
    }
}
