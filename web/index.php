<?php

session_start();

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
 }


 $_SESSION['facts'] = '<ul>
                        <li>A goldfish has a 3 second memory span.</li>
                        <li>George Washington died before dinosaurs were discovered.</li>
                        <li>The Star Wars cartoons are better than the movies. (FACT)</li>
                        <li>Saint Nicholas punched a dude at the Council of Nicea.</li>
                    </ul>';

$_SESSION["about"] = '<ul>
                        <li>Running</li>
                        <li>Writing Music</li>
                        <li>Playing Piano</li>
                        <li>Playing Bagpipes</li>
                        <li>Coding</li>
                        <li>Eating Pizza</li>
                        <li>Eating Meat</li>
                    </ul>';


 switch ($action){
    case 'assignments': 
        include 'homepage/assignments.php';
        break;
    default:
        include 'homepage/homepage.php';
        break;
    }
    



$_SESSION["assignmentList"] = '
                        <a href="/wk3/index.php"><li class="drop-selector"><h3>Week 3</h3></li></a>
                        <a href="/wk5-team/index.php"><li class="drop-selector"><h3>Week 5/6 - Team</h3></li></a>
                        <a href="/db-project/index.php"><li class="drop-selector"><h3>Database Project</h3></li></a>

'


?>