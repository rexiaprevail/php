<?php
// Nathan Hernandez
// Assignment #2 — COMP 1006

$userJob = array(); 
$userJob[0] = readline("Diploma:  "); 
$userJob[1] = readline("Years of experience?"); 
$userJob[2] = readline("What'/s your graduation date?"); 
$userJob[3] = readline("What language are you proficient in?"); 

print $userJob[0];
print $userJob[1];
print $userJob[2];
print $userJob[3];




$eligibilityCriteria = array(); 
$eligibilityCriteria[0] = 'CMPG'; 
$eligibilityCriteria[1] = '15'; 
$eligibilityCriteria[2] = '2024';
$eligibilityCriteria[3] = 'PHP';

$verificationChannel = 0; 
for ($i = 0; $i <= 3; $i++) { 
 if ($eligibilityCriteria[$i] === $userJob[$i]) {
     $verificationChannel++; 
 }
}

/* 
The logic for this is simple, instead of going through 
every iteration instantly and then determining if the array
is equal enough to the qualificiations. It goes through every iteration and allows for individual verification.

At the end, if all qualifications are met, which means the verificationChannel is equal to 4, they will be asked to continue the interview. However, no matter what, if that variable isn't 4, it'll print a different message.
*/

if ($verificationChannel === 4) {
print "You are eligible, your interview is in 1 week!";
} else { 
print "We decided to move on with other candidates.";
}


?>
