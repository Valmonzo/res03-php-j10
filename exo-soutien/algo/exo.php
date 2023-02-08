<?php

//Exo 1

function getRandomNumbersArray() : array
{
    $nbTab = range(-1000, 1000);
    shuffle($nbTab);

    return $nbTab;
}

$numbers = getRandomNumbersArray();

function sortNumbers(array $numbers, bool $desc = false) : array
{
    if($desc === false){
        for($j = 0; $j < count($numbers); $j ++) {
            for($i = 0; $i < count($numbers)-1; $i ++){

                if($numbers[$i] > $numbers[$i+1]) {
                    $min = $numbers[$i+1];
                    $numbers[$i+1]=$numbers[$i];
                    $numbers[$i]= $min;
                }
            }
        }
    }
    else if($desc === true){
        for($j = 0; $j < count($numbers); $j ++) {
            for($i = 0; $i < count($numbers)-1; $i ++){

                if($numbers[$i] < $numbers[$i+1]) {
                    $max = $numbers[$i+1];
                    $numbers[$i+1]=$numbers[$i];
                    $numbers[$i]= $max;
                }
            }
        }
    }


    return $numbers;
}

//var_dump(sortNumbers($numbers));
//var_dump(sortNumbers($numbers, $desc = true));




//Exo 2


function maFonctionDePuissanceDeSuperMatheu($nb1 , $nb2) : int
{
    if($nb1 === 0 && $nb2 === 0){
        echo  "Toi et moi on est pas d'accord je suis de l'école du 1 et toi surement du 0!";
    }
    else
    {
        $result = 1;
        for($i = 0; $i < $nb2 ; $i++)
        {
            $result = $result * $nb1;
        }

        return $result;
    }



}

//var_dump(maFonctionDePuissanceDeSuperMatheu(0, 5));


//Exo 3

function findOne(array $map) : array
{
    $oneXY = [];
    for($x=0; $x < count($map); $x++){
        for($y=0; $y < count($map[$x]); $y++)
        {
          if($map[$x][$y] === "1")
          {
              $xDu1 = $x;
              $yDu1 = $y;
              $oneXY[] = $xDu1;
              $oneXY[] = $yDu1;

          }
        }

    }

    return $oneXY;
}

function findTwo(array $map) : array
{
    $twoXY = [];
    for($x=0; $x < count($map); $x++){
        for($y=0; $y < count($map[$x]); $y++)
        {
          if($map[$x][$y] === "2")
          {
              $xDu2 = $x;
              $yDu2 = $y;
              $twoXY[] = $xDu2;
              $twoXY[] = $yDu2;

          }
        }

    }

    return $twoXY;
}


function PathFinder(array $map) : int
{
    $start = findOne($map);
    $end = findTwo($map);
    $count = 0;
    $x = 0;
    $y = 1;
    while($start !== $end)
    {
        while($start[$x] <= $end[0])
    {
        if($start[$y] <= $end[1])
        {
            $x++;
            $y++;
            $count = $count +2;
        }
        else
        {
            $x++;
            $count++;
        }
    }
    }
    

    return $count;
}




$map1 = [
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "1", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "2", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"],
	["0", "0", "0", "0", "0", "0", "0", "0", "0", "0"]
];



var_dump(PathFinder($map1));



// Exo 4

function jeDiviseCommeUnSigma(int $nb1, int $nb2) : ?int
{
    $result = 0;
    if($nb2 === 0)
    {
        echo "On ne peut pas diviser par 0";
        return null;
    }
    else
    {
     while($nb1 >= $nb2)
     {
        $nb1 = $nb1 - $nb2;

        $result++;
     }

     return $result;
    }
}


var_dump(jeDiviseCommeUnSigma(10, 0));


// jeDiviseCommeUnSigma(3, 1);


?>