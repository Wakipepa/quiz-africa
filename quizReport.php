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
                   echo" <br>";
                   echo" <br>";
                   echo  "<a href='https://www.facebook.com/sharer/sharer.php?u=URLENCODED_URL&t=TITLE'
                   onclick='javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;'
                   target='_blank' title='Share on Facebook'><p>Challenge your friends</p></a> " ; 
                  
                }