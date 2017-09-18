<?php
namespace Wedo;

  class Calculator
    {
      function __construct() {
        $this->operation = "";
        $this->userLastEntry = 0;
        $this->result = null;
        $this->shouldCalculate = false;
      }

        public function Enter($number)
        {
            $this->userLastEntry = $number;
            if ($this->result == null) { // Si l'on vient d'arriver, on set le résulat au premier nombre que l'on tape
              $this->result += $number;
              $this->shouldCalculate = false;
            } else { // Si ce n'est pas le premier nombre que l'on tape alors on fait le calcul
              $this->Calculate();
              $this->shouldCalculate = true;
            }
        }

        public function PressPlus()
        {
           $this->operation = "+";
            if ($this->shouldCalculate == true) {
              $this->Calculate();
          }
        }

        public function PressMoins()
        {
           $this->operation = "-";
            if ($this->shouldCalculate == true) {
              $this->Calculate();
          }
        }

        public function DisplayResult()
        {
            echo "The result is : $this->result\n";
        }

        public function GetResult()
        {
          echo $this->result;
        }

        function Calculate()
        {
            switch ($this->operation)
            {
                case "+":
                    $this->result += $this->userLastEntry;
                    break;
                case "-":
                    $this->result -= $this->userLastEntry;
                    break;
            }
        }
    }
