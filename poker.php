<head></head>
<body>
<?php
 
 //defining the size of the deck
$deckSize = 52;
 
 //populating the deck with 52 numbers(cards)
$cards = array();
for ($i=0; $i < $deckSize; $i++){
    $cards[$i]=$i;
  }
 
 
 //creating the suits, values and hand arrays
$suits = array();
$values = array();
$hand = array();

/* ---- Generating Hand -------*/
$uniqueNumbersRequired = 5;
$aRandomNumber;
$index = 0;
$duplicateIndex;
 
   while ($index < $uniqueNumbersRequired)
    {
      $aRandomNumber = rand(0,51);
      $hand[$index] = $aRandomNumber;
 
      $duplicateIndex = 0;
 
      while ($hand[$duplicateIndex] != $aRandomNumber)
        $duplicateIndex++;
 
      if ($index == $duplicateIndex)
        $index++;
    }
 
/* ---- Sorting the Hand -------*/
$swapped = true;
$tmp = 0;
    while($swapped){
        $swapped = false;
            for($i=1;$i<=4;$i++){      
			if(($hand[$i-1]) > ($hand[$i])) {
                        $tmp = $hand[$i-1];
                        $hand[$i-1] = $hand[$i];
                        $hand[$i] = $tmp;
                        $swapped = true;
 
                    }
 
                }
            }
			
 
 
 /* ---- Detirmining suits and values -------*/
for($n=0; $n < 5;$n++)
{    
if($hand[$n] < 13)  
     {
     $suits[$n]= 0;
     }
     else if($hand[$n] < 26) {
        $suits[$n]= 1;
     }
     else if($hand[$n] < 39)
     {
        $suits[$n] = 2;
    }
    else {
        $suits[$n]= 3;
    }
 
$values[$n] = $hand[$n]%13;
 }
 
 /* ---- Output Hand -------*/
 for($n=0; $n < 5;$n++)
{    
switch ($values[$n])  
      {
        case 0:  echo "Two of ";   break;
        case 1:  echo "Three of "; break;
        case 2:  echo  "Four of ";  break;
        case 3:  echo "Five of ";  break;
        case 4:  echo "Six of ";   break;
        case 5:  echo "Seven of "; break;
        case 6:  echo "Eight of "; break;
        case 7:  echo "Nine of ";  break;
        case 8:  echo "Ten of ";   break;
        case 9:  echo "Jack of ";  break;
        case 10: echo "Queen of "; break;
        case 11: echo "King of ";  break;
        case 12: echo "Ace of ";   break;
      }
switch($suits[$n])
      {
        case 0:  echo "Hearts<br />" ;    break;
        case 1:  echo "Clubs<br />"; break;
        case 2:  echo "Spades<br />";   break;
        case 3:  echo "Diamonds<br />";   break;
      }
      }
 
?> 
 
</body>
 
 
</html>