<?php
     if(isset($_GET['site']))
     {
        switch($_GET['site'])
        {
            case 'main':
                include('pages/main.php');
                break;
                
            case 'poundforpound':
                include('pages/poundforpound.php');
                break;
                
            case 'biggestcheat':
                include('pages/biggestcheat.php');
                break;
                
            case 'matchofthecentury':
                include('pages/matchofthecentury.php');
                break;
                
            case 'contact':
                include('pages/contact.php');
                break;
            default:
               header("HTTP/1.0 404 Not Found");
        }
     }else
     {
         header('Location: index.php?site=main');
     }
    
?>