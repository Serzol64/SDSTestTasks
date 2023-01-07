<?php
class EvenNumber{
	public $numbers = [];
	
	public function ShowEvenNumbers(){ for($i = 0; $i < count($this->numbers); $i++){ if(($this->numbers[$i] % 2) == 0){ echo $this->numbers[$i] . ' '; } } }
}

$response = new EvenNumber();
$response->numbers = [10,11,12,13,14,15,16,17,18,19];

echo $response->ShowEvenNumbers();
?>
