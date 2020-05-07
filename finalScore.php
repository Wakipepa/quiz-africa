<?php
function finalScore($counter)
                 {
                    if ($counter < 10) {
                        echo "<h1 class=\"text-center\">YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2 class=\"text-center\"PLEASE TRY AGAIN TO IMPROVE YOUR SCORE</h2>";
                        echo "<p class=\"text-left\">Oh dear. Africa is an amazing place and, you must have heard, it's rising. Perhaps time to learn a bit more about it? Try again</p>";
                    } else if ($counter <= 15) {
                        echo "<h1 class=\"text-center\">YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2 class=\"text-center\">THE SCORE WAS AVERAGE</h2>";
                    } else {
                        echo "<h1 class=\"text-center\">YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2 class=\"text-center\">CONGRATULATION FOR MAKING AFRICA PROUD</h2>";
                    }
                 }