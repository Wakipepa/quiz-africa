<?php
function quizReport($Questions,$Answers,$counter)
                {
                   
                    foreach($Questions as $QuestionNo => $Value) {
                        // Echo the question
                        echo $Value['Question'].'<br>';
                        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {
                           
                            echo 'You answered: <span class="wronganswerColor">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>';
                            echo 'Correct answer: <span class="correctAnswerColor">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
                        } 
                        else {
                            
                            echo 'You answered: <span class="guesAnswerColor">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>';
                            echo 'You are correct: <span class="correctAnswerColor">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>';
                            $counter++;
                        }
                        echo '<br /><hr>';
                    }
                    include "finalScore.php";
                    finalScore($counter); //=====FUNCTION CALL FOR DISPLAYING FINAL SCORE=====// 

                    
                    echo "<a class='btn btn-success btn-lg' href='quiz.php' role='button'>Try again</a>";
                  
                }