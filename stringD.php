<?php
class Strings{
    public $haystack;
    public $needle;

    public $value;
    public $val;

    public function search($haystack, $needle){
        $this -> haystack = $haystack;
        $this -> needle = $needle;
            $haystackLength = strlen($haystack);
            $needleLength = strlen($needle);
        
            for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
                $match = true;
                for ($j = 0; $j < $needleLength; $j++) {
                    if ($haystack[$i + $j] !== $needle[$j]) {
                        $match = false;
                        break;
                    }
                }
        
                if ($match) {
                    return $i; // Возвращаем позицию, если подстрока найдена
                }
            }
        
            return false; // Возвращаем false, если подстрока не найдена
        }

        public function long($value){
            $this -> value = $value;
            $length = 0;
        $i = 0;

        while (isset($this->value[$i])) {
            $length++;
            $i++;
        }

        return $length;
    
        }

        public function copy($haystack) {
            $this -> haystack = $haystack;
    $length = 0;
    $copy = '';

    // Подсчет длины исходной строки
    while (isset($haystack[$length])) {
        $length++;
    }

    // Копирование символов из исходной строки в новую строку
    for ($i = 0; $i < $length; $i++) {
        $copy .= $haystack[$i];
    }

    return $copy;
}   

public function replacement($haystack){
    $this -> haystack = $haystack;
$a = str_replace('Валентин','Андрей',$haystack);
echo $a;
}

public function delete ($haystack){
    $this -> haystack = $haystack;
    $newString = str_replace('Валентин', "", $haystack);
    echo $newString;
}
    }
?>