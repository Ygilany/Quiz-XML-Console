<pre><?php
$xml = simplexml_load_file('test1.xml');

$group = $xml->group;
$question = $xml->group->question;
$answer = $xml->group->question->answer;

for ($g = 0; $g < count($group); $g++) {
	echo "------------------------------------------------------------------------------------------<br />";
    echo $group[$g]->attributes()->id . '<br />';
    echo "------------------------------------------------------------------------------------------<br /><br />";
for ($q = 0; $q < count($question); $q++) {
    echo $group[$g]->attributes()->id . $question[$q]->type . str_pad($question[$q]->id, 2, '0', STR_PAD_LEFT) . '<br />';
    echo $question[$q]->text . '<br />';
for ($a = 0; $a < count($answer); $a++) {
	
    echo $answer[$a];
	if ($answer[$a]->attributes()->correct == "true") {
		echo " <<<br />";
	} else {
		echo "<br />";
	}
} echo "<br />";
}
}

?></pre>