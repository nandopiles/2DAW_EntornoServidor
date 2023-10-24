<?php
include("./Cell.php");

class Table
{
    private $rows;
    private $columns;

    public function __construct($rows, $columns)
    {
        $this->rows = $rows;
        $this->columns = $columns;
    }

    /**
     * Create the Cell type's Object and prints it
     *
     * @return void
     */
    public function createCells()
    {
        for ($i = 0; $i < $this->getRows(); $i++) {
            $arrayRow = []; //array of each row. It'll be reset in each iteration
            for ($j = 0; $j < $this->getColumns(); $j++) {
                switch ($j) {
                    case 0:
                        $colorFont = "orange";
                        $colorBackground = "grey";
                        break;
                    case 1:
                        $colorFont = "yellow";
                        $colorBackground = "blue";
                        break;
                    case 2:
                        $colorFont = "green";
                        $colorBackground = "red";
                        break;
                }
                $cell = new Cell("X ", $colorFont, $colorBackground);
                $arrayRow[$j] = $cell;
                echo $arrayRow[$j]->printCell();
            }
            echo "<br>";
        }
    }


    /**
     * Prints a Table but choosing a specific position to change its formatting 
     *
     * @param  int $rowSelected
     * @param  int $columnSelected
     * @param  String $color
     * @param  String $font
     * @return void
     */
    public function printSpecificField($rowSelected, $columnSelected, $color, $font)
    {
        $tableStructure = "<table>";

        for ($i = 0; $i < $this->getRows(); $i++) {
            $tableStructure .= "<tr>";
            for ($j = 0; $j < $this->getColumns(); $j++) {
                if ($i === $rowSelected && $j === $columnSelected)
                    $tableStructure .= "<td style= \"color:{$color}; font-family: {$font}\">X</td>";
                else
                    $tableStructure .= "<td>X</td>";
            }
            $tableStructure .= "</tr>";
        }
        $tableStructure .= "</table>";

        print($tableStructure);
    }

    /**
     * Get the value of rows
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set the value of rows
     *
     * @return  self
     */
    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Get the value of columns
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set the value of columns
     *
     * @return  self
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;

        return $this;
    }
}
