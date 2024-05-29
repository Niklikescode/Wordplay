<!DOCTYPE html>
<html>

<head>
    <title>Wordplay</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- convert the characters to lowercase and remove non-alphanumeric characters.
reverse the string and check if it's the same as the original string.
     Remove the results string for each checker to only display once a string has been entered and checked -->

    <h1>Palindrome Checker</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="word">Enter a word:</label>
        <input type="text" name="word" id="word" required>
        <button type="submit">Check</button>
    </form>

    <?php

    function isPalindrome(string $word): bool
    {
        // Normalise the string: convert to lowercase
        $normalizedWord = strtolower($word);

        // Remove non-alphanumeric characters
        $normalizedWord = preg_replace("/[^A-Za-z0-9]/", '', $normalizedWord);

        // Reverse the normalised string
        $reversedWord = strrev($normalizedWord);

        // Compare the normalised string with its reverse
        return $normalizedWord === $reversedWord;
    }

    // Check if the form has been submitted and the string is set in the POST request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['word'])) {
            $word = $_POST['word'];

            if (isPalindrome($word)) {
                $message = "The word '$word' is a palindrome!";
            } else {
                $message = "The word '$word' is not a palindrome.";
            }
            // } else {
            //     $message3 = "Please enter a sentence.";
        }
    }
    ?>
    <!-- Display the message if the word is a palindrome or not -->
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>







    <!-- Normalise the strings and convert to lowercase to compare the two strings and display the result. 
    Work out how to compare two strings within the form and display the result -->
    <h1>Anagram Checker</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="word1">Enter the first word:</label>
        <input type="text" name="word1" id="word1" required>
        <label for="word2">Enter the second word:</label>
        <input type="text" name="word2" id="word2" required>
        <button type="submit">Check</button>
    </form>

    <?php
    function isAnagram(string $word, string $comparison): bool
    {
        // Normalise the strings: convert to lowercase
        $normalizedWord = strtolower($word);
        $normalizedComparison = strtolower($comparison);

        // remove non-alphanumeric characters
        $normalizedWord = preg_replace("/[^A-Za-z0-9]/", '', $normalizedWord);
        $normalizedComparison = preg_replace("/[^A-Za-z0-9]/", '', $normalizedComparison);

        // Sort the characters of both strings
        $sortedWord = str_split($normalizedWord);
        $sortedComparison = str_split($normalizedComparison);
        sort($sortedWord);
        sort($sortedComparison);

        // Compare the sorted versions of the strings
        return $sortedWord === $sortedComparison;
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['word1']) && isset($_POST['word2'])) {
            $word1 = $_POST['word1'];
            $word2 = $_POST['word2'];

            if (isAnagram($word1, $word2)) {
                $message2 = "The words '$word1' and '$word2' are anagrams!";
            } else {
                $message2 = "The words '$word1' and '$word2' are not anagrams.";
            }
        }
    }
    ?>

    <?php if (isset($message2)) : ?>
        <p><?php echo $message2; ?></p>
    <?php endif;

    ?>







    <!-- Normalise the strings and convert to lowercase to and check unique characters to compare to the alphabet and display the result.
  steps: preg_replace to remove non-alphanumeric characters, str_split to split the string into an array, array_unique to remove duplicate characters, sort to sort the characters in the array, and compare the sorted array with the alphabet array.
   Work out how to compare a sentence to the alphabet and display the result -->

    <h1>Pangram Checker</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="word">Enter a sentence:</label>
        <input type="text" name="word" id="word" required>
        <button type="submit">Check</button>
    </form>

    <?php
    function isPangram(string $phrase): bool
    {
        $alphabet = range('a', 'z');
        $normalizedPhrase = strtolower($phrase);
        $normalizedPhrase = preg_replace("/[^A-Za-z]/", '', $normalizedPhrase);
        $uniqueCharacters = array_unique(str_split($normalizedPhrase));
        sort($uniqueCharacters);
        return $uniqueCharacters === $alphabet;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['word'])) {
            $word = $_POST['word'];

            if (isPangram($word)) {
                $message3 = "The sentence '$word' is a pangram!";
            } else {
                $message3 = "The sentence '$word' is not a pangram.";
            }
            // } else {
            //     $message3 = "Please enter a sentence.";
        }
    }
    ?>

    <?php if (isset($message3)) : ?>
        <p><?php echo $message3; ?></p>
    <?php endif; ?>
</body>

</html>