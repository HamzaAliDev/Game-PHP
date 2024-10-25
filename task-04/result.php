<!DOCTYPE html>

<head>
    <title>Result</title>
</head>

<body>
    <?php
    if (isset($_GET["choice"])) {

        $userChoice = $_GET['choice'];

        // Array of possible choices for the computer
        $choices = ['rock', 'paper', 'scissors'];

        // Randomly select a choice 
        $computerChoice = $choices[array_rand($choices)];

        // Determine the result
        if ($userChoice === $computerChoice) {
            $result = "It's a tie!";
        } elseif (
            ($userChoice === 'rock' && $computerChoice === 'scissors') ||
            ($userChoice === 'paper' && $computerChoice === 'rock') ||
            ($userChoice === 'scissors' && $computerChoice === 'paper')
        ) {
            $result = "You win!";
        } else {
            $result = "Computer wins!";
        }

        // Display the result
        echo "<h1>Result</h1>";
        echo "<p>You chose: $userChoice</p>";
        echo "<p>Computer chose: $computerChoice</p>";
        echo "<p>$result</p>";

    } else {
        echo "<h1>Select the option from menu</h1>";
    }

    ?>
</body>

</html>