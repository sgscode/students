<?php

class StudentMapper
{

    protected $DBH;

    public function __construct(PDO $DBH)
    {
        $this->DBH = $DBH;
    }

    protected function bindField(PDOStatement $statment, Student $student)
    {
        $statment->bindValue(':code', $student->getCode());
        $statment->bindValue(':name', $student->getName());
        $statment->bindValue(':surname', $student->getSurname());
        $statment->bindValue(':gender', $student->getGender());
        $statment->bindValue(':groupNumber', $student->getGroupNumber());
        $statment->bindValue(':email', $student->getEmail());
        $statment->bindValue(':scores', $student->getScores());
        $statment->bindValue(':yearOfBirth', $student->getYearOfBirth());
        $statment->bindValue(':residence', $student->getResidence());
    }

    public function createStudent(Student $student)
    {
        $STH = $this->DBH->prepare("INSERT INTO students (name, surname, gender, 
                                                      groupnumber, email, year_of_birth, 
                                                      scores, residence, code)
                                              VALUES (:name, :surname, :gender, 
                                                      :groupNumber, :email, :yearOfBirth,
                                                      :scores, :residence, :code)");
        $this->bindField($STH, $student);
        $STH->execute();
    }

    public function updateStudent(Student $student)
    {
        $STH = $this->DBH->prepare("UPDATE students 
                                SET name=:name, surname=:surname, gender=:gender,
                                    groupnumber=:groupNumber, email=:email, scores=:scores,
                                    year_of_birth=:yearOfBirth, residence=:residence 
                                WHERE code=:code");
        $this->bindField($STH, $student);
        $STH->execute();
    }

    public function isEmailUsed(Student $student)
    {
        $email = $student->getEmail();
        $code = $student->getCode();
        $STH = $this->DBH->prepare("SELECT count(*) FROM students WHERE email=:email and code!=:code");
        $STH->bindValue(":email", $email);
        $STH->bindValue(":code", $code);
        $STH->execute();
        return $STH->fetchColumn();
    }

    public function isCodeExist($code)
    {
        $STH = $this->DBH->prepare("SELECT count(*) FROM students WHERE code=:code");
        $STH->bindValue(":code", $code);
        $STH->execute();
        return $STH->fetchColumn();
    }

    public function fetchStudentByCode($code)
    {
        $STH = $this->DBH->prepare("SELECT name, surname, email, groupNumber, scores, year_Of_Birth as yearOfBirth, residence, gender, code
                                FROM students WHERE code=:code");
        $STH->bindValue(":code", $code);
        $STH->execute();
        $STH->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Student");
        return $STH->fetch();
    }

    public function searchStudents($reqest, $order, $orderColumn, $startRecord, $countPerPage)
    {

        $orderRegExp = "/^(ASC|DESC)$/ui";
        $columnRegExp = "/^(name|surname|groupnumber|scores)$/ui";
        $numRegExp = "/^[0-9]+$/";
        $userReqest = "%" . $reqest . "%";

        if (!preg_match($orderRegExp, $order) || !preg_match($columnRegExp, $orderColumn) || !preg_match($numRegExp, $startRecord) || !preg_match($numRegExp, $countPerPage)) {
            return "error reqest";
        }

        $STH = $this->DBH->prepare("SELECT name, surname, groupNumber, scores
                                FROM students
                                WHERE name LIKE :request OR surname LIKE :request OR groupnumber LIKE :request OR scores LIKE :request
                                ORDER BY $orderColumn $order LIMIT :start,  :countPerPage");

        $STH->bindValue(":start", (int) $startRecord, PDO::PARAM_INT);
        $STH->bindValue(":countPerPage", (int) $countPerPage, PDO::PARAM_INT);
        $STH->bindValue(":request", $userReqest);

        $STH->execute();
        return $STH->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Student");
    }

    public function getCountRecords($reqest)
    {
        $userReqest = "%" . $reqest . "%";
        $STH = $this->DBH->prepare("SELECT count(*)
                                FROM students
                                WHERE name LIKE :request OR surname LIKE :request OR groupnumber LIKE :request OR scores LIKE :request");
        $STH->bindValue(":request", $userReqest);
        $STH->execute();
        return $STH->fetchColumn();
    }

}
