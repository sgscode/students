<?php

class Student
{

    const CODE_LENGTH = 32;
    protected $name = "";
    protected $surname = "";
    protected $gender = "";
    protected $groupNumber = "";
    protected $email = "";
    protected $yearOfBirth = "";
    protected $scores = "";
    protected $residence = "";
    protected $code = "";
    protected $errorsText = [];
   

    public function generateCode()
    {
        
        $string = "qwertyuiopasdfghjklzxcvbnm1234567890";
        $strLen = mb_strlen($string);
        $newString = "";

        for ($i = 0; $i < self::CODE_LENGTH; $i++) {
            $newString .= mb_substr($string, mt_rand(0, $strLen - 1), 1);
        }

        $this->code = $newString;
    }

    public function setFields($sentData)
    {
        foreach ($sentData as $field => $data) {
            $sentData[$field] = trim($data);
        }

        if (isset($sentData['code'])) {
            $this->code = $sentData['code'];
        }
        $this->name = $sentData['name'];
        $this->surname = $sentData['surname'];
        $this->gender = $sentData['gender'];
        $this->groupNumber = $sentData['groupNumber'];
        $this->email = $sentData['email'];
        $this->yearOfBirth = $sentData['yearOfBirth'];
        $this->scores = $sentData['scores'];
        $this->residence = $sentData['residence'];
    }

    public function checkFields()
    {
        $charRegExp = "/^[а-яa-zё-]{1,100}$/ui";
        $numRegExp = "/^[0-9]+$/";
        $mailRegExp = "/@/";
        $groupRegExp = "/^[0-9а-яa-zё]{5}$/ui";
        
        if (!preg_match($charRegExp, $this->name)) {
            $this->errorsText["name"] = "должно состоять только из букв и быть длиной от 1 до 100 символов";
        }
        if (!preg_match($charRegExp, $this->surname)) {
            $this->errorsText["surname"] = "должна состоять только из букв и быть длиной от 1 до 100 символов";
        }
        if (!isset($this->gender)) {
            $this->errorsText["sex"] = "Пол неверно введен или отсутствует";
        }
        if (!preg_match($groupRegExp, $this->groupNumber)) {
            $this->errorsText["groupNumber"] = "должен содержать 5 символов";
        }
        if (!preg_match($mailRegExp, $this->email)) {
            $this->errorsText["email"] = "должен содержать @";
        }
        if (!preg_match($numRegExp, $this->scores) || $this->scores <= 0 || $this->scores > 400) {
            $this->errorsText["scores"] = "должно быть не более 400";
        }
        if (!preg_match($numRegExp, $this->yearOfBirth) || $this->yearOfBirth < 1900 || $this->yearOfBirth > 2015) {
            $this->errorsText["yearOfBirth"] = "должен быть не меньше 1900 и не больше 2005";
        }
        if (!isset($this->residence)) {
            $this->errorsText["residence"] = "Место рождения неверно введено или отсутствует";
        }

        return $this->errorsText;
    }

    public function getErrors($key)
    {
        if (isset($this->errorsText[$key])) {
            return $this->errorsText[$key];
        } else {
            return "";
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getGroupNumber()
    {
        return $this->groupNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    public function getScores()
    {
        return $this->scores;
    }

    public function getResidence()
    {
        return $this->residence;
    }

    public function getCode()
    {
        return $this->code;
    }

}
