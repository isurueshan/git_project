


<?php
// You are running a classroom and suspect that some of your students are passing around the answers to multiple choice questions disguised as random strings.

// Your task is to write a function that, given a list of words and a string, finds and returns the word in the list that is scrambled up inside the string, if any exists. There will be at most one matching word. The letters don't need to be in order or next to each other. The letters cannot be reused.

// Example:
// words = ['cat', 'baby', 'dog', 'bird', 'car', 'ax']
// string1 = 'tcabnihjs'
// find_embedded_word(words, string1) -> cat (the letters do not have to be in order)

// string2 = 'tbcanihjs'
// find_embedded_word(words, string2) -> cat (the letters do not have to be together)

// string3 = 'baykkjl'
// find_embedded_word(words, string3) -> None / null (the letters cannot be reused)

// string4 = 'bbabylkkj'
// find_embedded_word(words, string4) -> baby

// string5 = 'ccc'
// find_embedded_word(words, string5) -> None / null

// string6 = 'breadmaking'
// find_embedded_word(words, string6) -> bird

// Complexity analysis variables:

// W = number of words in `words`
// S = maximal length of each word or string
  // php code is wrapped in <?php tags
  
//hhhhh
echo "<h1 style=''>Isuru Eshan</h1>";
$words = ["cat", "baby", "dog", "bird", "car", "ax"];

$string2 = "tbcanihjs";
$string3 = "baykkjl";
$string4 = "bbabylkkj";
$string5 = "ccc";
$string6 = "breadmaking";

$string1 = "tcabnihjs";
$words = ["cat", "baby", "dog", "bird", "car", "ax"];

// $lp = str_split($string1);
// print_r($lp);echo "\n";
$i=0;
  foreach($words as $wrds){
    $wrdchnks = str_split($wrds);
    $tr = in_array($string1,$wrdchnks);
    if($tr = true){
echo $words[$i]."<br>";
echo "found cat eshan<br>";
    }else{
      echo "not found";
    }
    $i++;
    
// foreach($lp as $lps){
//   echo $lps."\n";
//     echo $wrds."\n";
//   }
}

// $sz = sizeof($words);
// for($i=0;$i<$sz;$i++){
//   $wrds = $words[$i];
  
//   $strpos = strpos($string1,$wrds);
//   print_r($strpos);
//   print_r(array_chunk($string1));
// }


// $te = array_search($string1, $words);
// $pos = strpos($mystring, $findme);
// print_r($te);



// if (in_array($string1,$words)){
//     echo "Match found"; 
//     return true;
// } else {
//     echo "Match not found";
//     return false;
// }

// $test = strpos("cat","c");
// print_r($test);
?>
