<html>
    <link href="Quiz.css" rel="stylesheet" type="text/css"/>
</html>

<?php
// https://stackoverflow.com/questions/19810815/php-table-text-align-center

//// Inside Quiz.php ////

error_reporting(E_ALL);
ini_set("display_errors", 1);


//// Quiz database ////

    $points = 0;
    $possible = 120;
    $total = 0;
    
    echo "<body>";

    if(isset($_POST['submit']))
    {
        //// Answer 1 ////
        echo "<div><h3> Question 1: Which is the largest country containing only one time zone? </h3>";

        if(isset($_POST['a1']))
        {
            echo "WRONG! <br>";
            echo "You answered: Russia <br>";
        }
        elseif(isset($_POST['b1']))
        {
            $points = $points + 20;
            $total++;
            echo "CORRECT! <br>";
            echo "You answered: China <br>";
        }
        elseif(isset($_POST['c1']))
        {
            echo "WRONG! <br>";
            echo "You answered: Nepal <br>";
        }
        elseif(isset($_POST['d1']))
        {
            echo "WRONG! <br>";
            echo "You answered: Turkey <br>";
        }
        
        echo "Correct answer: China <br>";
        echo "<br></div>";

        //// Answer 2 ////
        echo "<div><h3> Question 2: What is always coming, but never arrives? </h3>";

        if(isset($_POST['a2']))
        {
            echo "WRONG! <br>";
            echo "You answered: Your Uber <br>";
        }
        elseif(isset($_POST['b2']))
        {
            echo "WRONG! <br>";
            echo "You answered: Pizza Delivery <br>";
        }
        elseif(isset($_POST['c2']))
        {
            $points = $points + 20;
            $total++;
            echo "CORRECT! <br>";
            echo "You answered: Tomorrow <br>";
        }
        elseif(isset($_POST['d2']))
        {
            echo "WRONG! <br>";
            echo "You answered: Midterm Exam <br>";
        }
        
        echo "Correct answer: Tomorrow <br>";
        echo "<br></div>";

        //// Answer 3 ////
        echo "<div><h3> Question 3: What percentage of people live to the North of the equator? </h3>";

        if(isset($_POST['a3']))
        {
            $points = $points + 20;
            $total++;
            echo "CORRECT! <br>";
            echo "You answered: 90% <br>";
        }
        elseif(isset($_POST['b3']))
        {
            echo "WRONG! <br>";
            echo "You answered: 80% <br>";
        }
        elseif(isset($_POST['c3']))
        {
            echo "WRONG! <br>";
            echo "You answered: 70% <br>";
        }
        elseif(isset($_POST['d3']))
        {
            echo "WRONG! <br>";
            echo "You answered: 60% <br>";
        }
        
        echo "Correct answer: 90% <br>";
        echo "<br></div>";

        //// Answer 4 ////
        echo "<div><h3> Question 4: If an electric train is moving north at 100mph and there is wind blowing to the west at 10mph, which way does the smoke blow? </h3>";

        if(isset($_POST['a4']))
        {
            echo "WRONG! <br>";
            echo "You answered: Southwest <br>";
        }
        elseif(isset($_POST['b4']))
        {
            echo "WRONG! <br>";
            echo "You answered: Northeast <br>";
        }
        elseif(isset($_POST['c4']))
        {
            $points = $points + 20;
            $total++;
            echo "CORRECT! <br>";
            echo "You answered: An electric train has no smoke <br>";
        }
        elseif(isset($_POST['d4']))
        {
            echo "WRONG! <br>";
            echo "You answered: Mostly to the south <br>";
        }
        
        echo "Correct answer: An electric train has no smoke <br>";
        echo "<br></div>";

        //// Answer 5 ////
        echo "<div><h3> Question 5: What breaks and never falls and what falls and never breaks? </h3>";

        if(isset($_POST['a5']))
        {
            echo "WRONG! <br>";
            echo "You answered: Websites and marquees <br>";
        }
        elseif(isset($_POST['b5']))
        {
            echo "WRONG! <br>";
            echo "You answered: Workers and concrete <br>";
        }
        elseif(isset($_POST['c5']))
        {
            echo "WRONG! <br>";
            echo "You answered: Memories and fruitcakes <br>";
        }
        elseif(isset($_POST['d5']))
        {
            $points = $points + 20;
            $total++;
            echo "CORRECT! <br>";
            echo "You answered: Day breaks and night falls <br>";
        }
        
        echo "Correct answer: Day breaks and night falls <br>";
        echo "<br></div>";

        //// Answer 6 ////
        echo "<div><h3> Question 6: Do you know da way? </h3>";

        if(isset($_POST['a6']))
        {
            echo "You dunno da way! Spit on the non-believer! <br>";
            echo "You answered: Yes brudda <br>";
        }
        elseif(isset($_POST['b6']))
        {
            echo "You dunno da way! Spit on the non-believer! <br>";
            echo "You answered: Nah bruh <br>";
        }
        elseif(isset($_POST['c6']))
        {
            echo "You dunno da way! Spit on the non-believer! <br>";
            echo "You answered: What way? <br>";
        }
        elseif(isset($_POST['d6']))
        {
            $points = $points + 20;
            $total++;
            echo "They are da queen! Follow dem! <br>";
            echo "You answered: I am da queen <br>";
        }
        
        echo "Correct answer: I am da queen <br>";
        echo "<br></div><br>";
    

        //// Score ////
        echo "<h3> You answered ", $total ," out of 6 correctly <br>";
        echo "You earned ", $points ," of ", $possible ," points possible <br>";
        echo "Your score for the quiz is ", 100*($points/$possible) ,"% </h3>";
    
    }
    echo "</body>";

?>
