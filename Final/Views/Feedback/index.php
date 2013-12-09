<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model = Feedback::Get($_REQUEST['id']);
                $view = 'details.php';
                $title = "Feedback Details For user: $model[User]";
                break;
        
        case 'new':
                $model = Feedback::Blank();
                $view = 'edit.php';
                $title = 'Add Feedback';
                break;
                
        case 'save':
                $errors = Feedback::Validate($_REQUEST);
        if(!$errors){
                 $errors = Feedback::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
                $title = "Edit Feedback For user: $model[User]";
                break;
                
        case 'edit':
                $model = Feedback::Get($_REQUEST['id']);
                $view = 'edit.php';
                $title = "Edit Feedback For user: $model[User]";
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                $errors = Feedback::Delete($_REQUEST['id']);            
                if(!$errors){
                    header("Location: ?");
                    die(); 
                }
                }
                $model = Feedback::Get($_REQUEST['id']);
                $view = 'delete.php';
                $title = "Delete Comments from User: $model[User]";
                break;
                
        default:
                $model = Feedback::Get();
                $view = 'list.php';
                $title = 'Feedback';
                break;
}

switch ($format) {
        case 'dialog':
                include '../Shared/_DialogLayout.php';
                break;
        
        default:
                include '../Shared/_Layout.php';
                break;
}