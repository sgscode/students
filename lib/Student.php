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
    protected $errors = ["name" => false,
        "surname" => false,
        "gender" => false,
        "groupNumber" => false,
        "email" => false,
        "yearOfBirth" => false,
        "scores" => false,
        "residence" => false,
        "code" => false];

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

        if (isset($sentData['gender'])) {
            $this->gender = $sentData['gender'];
        }
        if (isset($sentData['residence'])) {
            $this->residence = $sentData['residence'];
        }
        $this->name = $sentData['name'];
        $this->surname = $sentData['surname'];
        $this->groupNumber = $sentData['groupNumber'];
        $this->email = $sentData['email'];
        $this->yearOfBirth = $sentData['yearOfBirth'];
        $this->scores = $sentData['scores'];
        
        $this->checkFields();
    }

    public function checkFields()
    {
        foreach ($this->errors as $error) {
            $error = false;
        }

        $charRegExp = "/^[а-яa-zё-]{1,100}$/ui";
        $numRegExp = "/^[0-9]+$/";
        $mailRegExp = "/@/";
        $groupRegExp = "/^[0-9а-яa-zё]{5}$/ui";

        if (!preg_match($charRegExp, $this->name)) {
            $this->errors["name"] = true;
        }
        if (!preg_match($charRegExp, $this->surname)) {
            $this->errors["surname"] = true;
        }
        if (!isset($this->gender) || $this->gender === "") {
            $this->errors["gender"] = true;                                                                                                                       //должна состоять только из букв и быть длиной от 1 до 100 символов";
        }
        if (!preg_match($groupRegExp, $this->groupNumber)) {
            $this->errors["groupNumber"] = true;
        }
        if (!preg_match($mailRegExp, $this->email)) {
            $this->errors["email"] = true;
        }
        if (!preg_match($numRegExp, $this->scores) || $this->scores <= 0 || $this->scores > 400) {
            $this->errors["scores"] = true;
        }
        if (!preg_match($numRegExp, $this->yearOfBirth) || $this->yearOfBirth < 1900 || $this->yearOfBirth > 2015) {
            $this->errors["yearOfBirth"] = true;
        }
        if (!isset($this->residence) || $this->residence === "") {
            $this->errors["residence"] = true;
        }

        if (array_search(true, $this->errors)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getError($key)
    {
        return $this->errors[$key];
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
