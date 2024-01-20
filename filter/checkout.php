<?php
function generateUniqueCode() {
    $currentID = 1; // Replace this with the starting ID from your database or storage

    // Assuming you have a mechanism to fetch the current ID from storage
    // $currentID = fetchCurrentID(); 

    $uniqueCode = str_pad($currentID, 5, '0', STR_PAD_LEFT); // Ensure the code is 5 digits, padding with zeroes if necessary

    // Update the current ID for the next code
    // Assuming you have a mechanism to update the current ID in your storage
    // updateCurrentID($currentID + 1);

    return $uniqueCode;
}

// Example usage:
for ($i = 0; $i < 10; $i++) { // Generate 10 unique codes
    echo generateUniqueCode() . "<br>";
}
?>