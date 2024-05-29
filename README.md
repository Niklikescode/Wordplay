
# Wordplay

This is a simple tool to check if words or characters are either Palindromes, Anagrams or Pangrams.



## Features 📱

- Input fields to enter text
- Check buttons
- Results reveal 

## Installation 🛠️

- Install PHP - https://www.php.net/downloads.php
- Install XAMPP (PHP development environment) and enable Apache on the control panel -
    https://www.apachefriends.org/
- Ensure Environment Variables are configured (Windows) -
    https://dinocajic.medium.com/add-xampp-php-to-environment-variables-in-windows-10-af20a765b0ce

- Clone the repository - https://github.com/Niklikescode/Wordplay.git

- Ensure the Project Folder is saved to c://xampp/htdocs


- Run the application in your browser local host. Example -  http://localhost/jadutask/game.php

## Challenges 🤔
I have never used PHP before, so for this particular task I had to learn enough to understand the basic construct of the language first and foremost, noticing similarities in syntax patterns from Javascript.

There were also necessary initial installation steps (as mentioned above) in order to use PHP that I learned (mostly by error) as I went along.

An issue I faced was the application was not updating with the results each and every time you input a new word. Upon looking into this issue further, I realised that I didn't include the POST method in the form to send data to the server, as well as including the action attribute to process the data on the same page that the form is on (the same PHP file).

There is a bug I'm currently trying to fix - when you enter a word into the Palindrome Checker, it shows the result in the Pangram Checker when it shouldn't.

## Resources 🧠
- PHP Official Documentation
- W3 Schools
- Stack Overflow, ChatGPT and Copilot (when stuck)
- Various Youtube Tutorials and Google
