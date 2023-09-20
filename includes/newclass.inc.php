
<h4> h4 tag </h4>

<?php
    echo "some text";
    echo "another text";

    class person {
        private $personcode;
        public $name;
        public $gender;

        public function setName($inputname){
            //return "do nothing for now";
            $this->name = $inputname;
        }

        public function getName() {
            return $this->Name;
        }

    }

    //Izvidot divas klases: Employee un Manager

    class Employee{
    public $name;
    public $role;
    public $access;

    public function setAccess($inputAccess){
        $this->access = $inputAccess;
    }

    public function getAccess(){
        return $this->$Access;
    }

    }

    class Employee{
        public name;
        public role;
        public access;
        public manager_role;

    }
?>