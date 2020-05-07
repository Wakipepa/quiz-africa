
		
        <?php 
        include "header.php";
        include "arrays_of_questions.php";

                if (isset($_POST['answers'])) {

                    $Answers = $_POST['answers'];  //===========GET SUBMITTED ANSWERS==================//     
                    $counter = 0;  //=============COUNTING CORRECT ANSWERS AS FROM ZERO================//     
                    echo "<h1 id=\"reportHeading\">YOUR QUIZ REPORT </h1>";
                    include "quizReport.php";
                     quizReport($Questions,$Answers,$counter); //=====FUNCTION GIVING FINAL REPORT=====// 
                   
                }
                else {
                ?>

                 <!--================= RADIO BUTTON FORM L0OPING ARRAY OF QUESTIONS ===========================-->
                 
                 <form  class=" h-200" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                              
                            <?php foreach ($Questions as $QuestionNo => $Value){ ?>     
                                             
                                <h5 id="questionsInBlack"><?php echo $Value['Question']; ?></h5>
                                <?php                               
                                    foreach ($Value['Answers'] as $Letter => $Answer){
                                    $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;                               
                                ?>
                                <div id="line" class="wow bounceInRight">
                                    <input " type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>"required/>
                                    <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>                              
                                </div>                             
                                <?php } ?>
                                <hr>                      
                            <?php } ?>                    
                            <input class="btn btn-success btn-lg" type="submit" value="SUBMIT" /> 
          
                    </form> <!-- END OF FORM -->
                <?php 
                }
                ?>
<?php include "footer.php";?>
