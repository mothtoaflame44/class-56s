

<?php

    class Parents {
        public function flat()
        {
            echo "22ggagh<br>";
        }

        protected function car()
        {
            echo"BMW<br>";
        }

        public function UseCar()
        {
            $this->car();
        }

        private function diary()
        {
            echo "read diary";

        }

        public function REadthisdiary()
        {
            $this->diary();
        }

    }



    class Child extends Parents{

        public function bike()
        {
            echo "R15-V3<br>";
        }

        public function useParentCar()
        {
            $this->car();
        }

         public function UserParentFlat()
        {
            $this->flat();
         }

    }


    $child = new Child();
    $child->bike();
    $child-> UserParentFlat();
    $parents = new Parents();
    $parents->Usecar();

    $parents->REadthisdiary();
 


?>