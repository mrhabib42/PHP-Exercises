<?php


// <!-- Palindrome -->
if (isset($_POST["userInput"])) {
    $userInput = $_POST["userInput"];
    $userInput = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $userInput)); // Convert to lowercase and remove non-alphanumeric characters
    $reversedInput = "";

    for ($i = strlen($userInput) - 1; $i >= 0; $i--) {
        $reversedInput .= $userInput[$i];
    }

    if ($userInput == $reversedInput) {
        echo "<p>$userInput is a palindrome!</p>";
    } else {
        echo "<p>$userInput is not a palindrome.</p>";
    }
}
// <!-- Palindrome -->



// Factorial

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $userInput = $_POST["userInput"];
    
//     // Validate that the input is a non-negative integer
//     if (is_numeric($userInput) && $userInput >= 0 && floor($userInput) == $userInput) {
//         $factorial = 1;
        
//         // Calculate factorial
//         for ($i = 1; $i <= $userInput; $i++) {
//             $factorial *= $i;
//         }
        
//         echo "<p>The factorial of $userInput is $factorial.</p>";
//     } else {
//         echo "<p>Please enter a non-negative integer.</p>";
//     }
// }

// Factorial

// Reversed String

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $userInput = $_POST["userInput"];
    
//     // Reverse the string without using a separate method
//     $reversedString = '';
//     for ($i = strlen($userInput) - 1; $i >= 0; $i--) {
//         $reversedString .= $userInput[$i];
//     }
    
//     echo "<p>Reversed String: $reversedString</p>";
// }

// Reversed String


// prime number

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $userInput = $_POST["userInput"];

//     // Validate that the input is a positive integer
//     if (is_numeric($userInput) && $userInput > 1 && floor($userInput) == $userInput) {
//         $isPrime = true;

//         // Check if the number is prime
//         for ($i = 2; $i <= sqrt($userInput); $i++) {
//             if ($userInput % $i == 0) {
//                 $isPrime = false;
//                 break;
//             }
//         }

//         if ($isPrime) {
//             echo "<p>$userInput is a prime number!</p>";
//         } else {
//             echo "<p>$userInput is not a prime number.</p>";
//         }
//     } else {
//         echo "<p>Please enter a positive integer greater than 1.</p>";
//     }
// }

// prime number

// Armstrong number

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $userInput = $_POST["userInput"];

//     // Validate that the input is a positive integer
//     if (is_numeric($userInput) && $userInput > 0 && floor($userInput) == $userInput) {
//         $originalNumber = $userInput;
//         $numDigits = strlen($userInput);
//         $sum = 0;

//         // Calculate sum of each digit raised to the power of the number of digits
//         while ($userInput > 0) {
//             $digit = $userInput % 10;
//             $sum += pow($digit, $numDigits);
//             $userInput = (int)($userInput / 10);
//         }

//         // Check if the number is an Armstrong number
//         if ($sum == $originalNumber) {
//             echo "<p>$originalNumber is an Armstrong number!</p>";
//         } else {
//             echo "<p>$originalNumber is not an Armstrong number.</p>";
//         }
//     } else {
//         echo "<p>Please enter a positive integer greater than 0.</p>";
//     }
// }

// Armstrong number

// sum of digits
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $userInput = $_POST["userInput"];

//     // Validate that the input is a non-negative integer
//     if (is_numeric($userInput) && $userInput >= 0 && floor($userInput) == $userInput) {
//         $originalNumber = $userInput;
//         $sum = 0;

//         // Calculate sum of digits
//         while ($userInput > 0) {
//             $digit = $userInput % 10;
//             $sum += $digit;
//             $userInput = (int)($userInput / 10);
//         }

//         echo "<p>The sum of digits of $originalNumber is $sum.</p>";
//     } else {
//         echo "<p>Please enter a non-negative integer.</p>";
//     }
// }
// sum of digits

// pyramid pattern

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = $_POST["rows"];

    if (is_numeric($rows) && $rows > 0 && floor($rows) == $rows) {
        echo "<div class='pyramid'>";
        echo "<div class='pyramid'>";
        // Loop to print the right-aligned pyramid pattern
        for ($i = 1; $i <= $rows; $i++) {
            echo str_repeat("&nbsp;", $rows - $i);
            echo str_repeat("* ", $i);
            echo "<br>";
        }
        echo "</div>";
    } else {
        echo "<p>Please enter a positive integer greater than 0.</p>";
    }
}
// pyramid pattern
