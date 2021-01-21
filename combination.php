<?php 
if(isset($_POST['findMatches'])){
    $teams = [];
    for($i=0; $i<$_POST['n_team']; $i++){
        array_push($teams, $_POST['team_names'][$i]);
    }
}
$matches = [];
$combination = factorial(sizeof($teams))/ (factorial(2)*factorial(sizeof($teams)-2));

function findCombination($teams){
    shuffle($teams);
    $pos1 = $teams[array_rand($teams)];
    $pos2 = $teams[array_rand($teams)];
    while($pos2===$pos1){                           //while both teams selected randomly is the same
        $pos2 = $teams[array_rand($teams)];
    }
    /*Selected 2 teams as a match*/

    global $matches;
    $match = $pos1." vs ".$pos2;
    $pseudo = $pos2." vs ".$pos1;
    if(!in_array($match, $matches)) {
        if(!in_array($pseudo, $matches)){
            array_push($matches, $match);
        }
    }
    /*Arranged a match between the selected and put the combo in an array*/
}
if(sizeof($teams)>2){                                 //if more than 2 teams arrange tournament
    do{
        findCombination($teams);
    }while(sizeof($matches)<$combination);
}else{                                             //otherwise deny
    echo "Competitor must be at least 2";
}

function factorial($n){
    $factorial=1;
    for($i=$n; $i>0; $i--){
        $factorial *= $i;
    }
    return $factorial;
}
/*returns combination number of possible matches */


?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php' ?>
<body>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Matches generated</th>
        </tr>
        </thead>
        <?php
            $count=0;
            foreach($matches as $match){
                echo "
                <tr>
                    <td>".++$count."</td>
                    <td>".$match."</td>
                </tr>";
            }
            /*Combination of all possible matches*/
        ?>
    </table>
    <button type="button" class="btn btn-dark back" onclick="window.history.back()">&larr; Back</button>
</body>
</html>