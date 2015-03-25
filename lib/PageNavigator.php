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
        $orderArrow = "";
        $linkArray = array();

        if ($this->orderDirection === "DESC") {
            $orderArrow = $this->arrowDesc;
            $this->orderDirection = "ASC";
        } else {
            $orderArrow = $this->arrowAsc;
            $this->orderDirection = "DESC";
        }

        foreach ($this->columns as $key => $value) {

            if ($key === $this->orderColumn) {
                $linkText = $orderArrow . $value;
            } else {
                $linkText = $value;
            }

            $data = ["orderColumn" => $key,
                "orderDirection" => $this->orderDirection,
                "userSearch" => $this->userSearch
            ];

            $linkArray[$linkText] = $_SERVER['PHP_SELF'] . '?' . http_build_query($data);
        }

        return $linkArray;
    }

    public function getPageLink()
    {
        $pageArray = array();
        $pageCount = ceil($this->countRecord / $this->recordPerPage);

        for ($i = 0; $i < $pageCount; $i++) {
            $startRecord = $i * $this->recordPerPage;
            $data = ["startRecord" => $startRecord,
                "orderColumn" => $this->orderColumn,
                "orderDirection" => $this->orderDirection,
                "userSearch" => $this->userSearch
            ];
            $pageArray[$i + 1] = $_SERVER['PHP_SELF'] . '?' . http_build_query($data);
        }

        return $pageArray;
    }

}
