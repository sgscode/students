<?php

class PageNavigator
{

    protected $arrowDesc = "&#9660";
    protected $arrowAsc = "&#9650;";
    protected $columns = [
        "name" => "Имя",
        "surname" => "Фамилия",
        "groupNumber" => "Номер группы",
        "scores" => "Количество баллов",
    ];
    protected $userSearch = "";
    protected $orderDirection = "";
    protected $orderColumn = "";
    protected $recordPerPage = "";
    protected $countRecord = "";

    public function __construct($userSearch, $order, $orderColumn, $recordPerPage, $countRecord)
    {
        $this->userSearch = $userSearch;
        $this->orderDirection = $order;
        $this->orderColumn = $orderColumn;
        $this->recordPerPage = $recordPerPage;
        $this->countRecord = $countRecord;
    }

    public function getOrderLink()
    {
        $linkOrderArrow = "";
        $linkArray = array();

        if ($this->orderDirection === "DESC") {
            $linkOrderArrow = $this->arrowDesc;
            $this->orderDirection = "ASC";
        } else {
            $linkOrderArrow = $this->arrowAsc;
            $this->orderDirection = "DESC";
        }

        foreach ($this->columns as $columnName => $linkName) {

            if ($columnName === $this->orderColumn) {
                $linkFullName = $linkOrderArrow . $linkName;
            } else {
                $linkFullName = $linkName;
            }

            $queryString = ["orderColumn" => $columnName,
                "orderDirection" => $this->orderDirection,
                "userSearch" => $this->userSearch
            ];

            $linkArray[$linkFullName] = $_SERVER['PHP_SELF'] . '?' . http_build_query($queryString);
        }

        return $linkArray;
    }

    public function getPageLink()
    {
        $pageArray = array();
        $pageCount = ceil($this->countRecord / $this->recordPerPage);

        for ($pageNumber = 0; $pageNumber < $pageCount; $pageNumber++) {
            $startRecord = $pageNumber * $this->recordPerPage;
            $queryString = ["startRecord" => $startRecord,
                "orderColumn" => $this->orderColumn,
                "orderDirection" => $this->orderDirection,
                "userSearch" => $this->userSearch
            ];
            $pageArray[$pageNumber + 1] = $_SERVER['PHP_SELF'] . '?' . http_build_query($queryString);
        }

        return $pageArray;
    }

}
