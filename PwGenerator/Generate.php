<?php
class Generate
{

    public $specialchars;
    private $letterrange;

    const FIRSTLETTER = "A";
    const LASTLETTER = "Z";

    public $hashes;

    function __construct()
    {

        $this->specialchars = array('(', ')', '[', ']', '{', '}', '$', '_', '€', '#');

        $this->letterrange = count(range(self::FIRSTLETTER, self::LASTLETTER)) - 1;
        $this->hashes = array();
    }

    private function generateNumber($value = 'number')
    {
        if ($value == 'letter')
            return rand(0, $this->letterrange);
        elseif ($value == 'special') {
            return rand(0, count($this->specialchars) - 1);
        } else {
            return rand(0, 9);
        }
    }

    public function passwordCreate($special = 0, $numbers = 0, $uppercase = 0, $lowercase = 0)
    {
        $password = "";
        for ($i = 0; $i < $special; $i++) {
            $password .= $this->createsSpecialChar();
        }
        for ($i = 0; $i < $numbers; $i++) {
            $password .= $this->generateNumber();
        }
        for ($i = 0; $i < $uppercase; $i++) {
            $password .= $this->createsLetter();
        }
        for ($i = 0; $i < $lowercase; $i++) {
            $password .= strtolower($this->createsLetter());
        }

        //return $this->utf8_str_shuffle($password);
        if ($this->checkUnicity($password)) {
            echo "coucou2";
            return $this->utf8_str_shuffle($password);
        } else {
            echo "coucou3" . $password;
            $this->passwordCreate($special, $numbers, $uppercase, $lowercase);
        };
    }

    private function createsSpecialChar()
    {
        $val = $this->generateNumber('special');
        return $this->specialchars[$val];
    }

    private function createsLetter()
    {
        return range(self::FIRSTLETTER, self::LASTLETTER)[$this->generateNumber('letter')];
    }
    public function utf8_str_shuffle(string $str)
    {
        // Convertit la chaîne en tableau de caractères
        $array = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
        // Mélange le tableau
        shuffle($array);
        // Reconvertit le tableau en chaîne
        return implode('', $array);
    }

    private function checkUnicity($hash)
    {

        $unicity = false;
        for ($i = 0; $i < count($this->hashes); $i++) {

            if (password_verify($hash, $this->hashes[$i])) {
                $unicity = true;
                echo "coucou";
                password_hash($hash, PASSWORD_DEFAULT) . array_push($this->hashes);
            }
        }

        return $unicity;
    }
}
