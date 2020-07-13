<?php


$notes="Welcome to India ,Make in India ,Boycott China ";

$array=str_split($notes);
showCsvArray($array); 
echo "<br>addNote <br>";
$newNotes=addNote($notes, "Atamnhibhar Bharat");

showCsvArray($newNotes);
echo "<br> deleteNote <br>";

$delete=array_splice($newNotes,1,1); 




showCsvArray($newNotes);
function addNote($notes,$note){
    $notesArray=explode(",", $notes);
    array_push($notesArray, $note);
   
    return $notesArray;
}

function deleteNote($notes,$location){
   return array_splice($notes,2,1); 
}

function showCsvArray($csvArray){
    foreach($csvArray as $character){
        if($character==','){
            echo $character ."<br>" ;
        }
        else{
            echo $character . "<button>Delete</button>";
        }
    }
}


?>
