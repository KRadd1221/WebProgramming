<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model = Addresses::Get($_REQUEST['id']);
                $view = 'details.php';
                $title = "Details: $model[id]";
                break;
        
        case 'new':
                $model = Addresses::Blank();
                $view = 'edit.php';
                $title = 'Add New Address';
                break;
                
        case 'save':
                $errors = Addresses::Validate($_REQUEST);
        if(!$errors){
                 $errors = Addresses::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
                $title = "Edit Address: $model[id]";
                break;
                
        case 'edit':
                $model = Addresses::Get($_REQUEST['id']);
                $view = 'edit.php';
                $title = "Edit Address: $model[id]";
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                $errors = Addresses::Delete($_REQUEST['id']);            
                if(!$errors){
                    header("Location: ?");
                    die(); 
                }
                }
                $model = Addresses::Get($_REQUEST['id']);
                $view = 'delete.php';
                $title = "Delete Address For : $model[id]";
                break;
                
        default:
                $model = Addresses::Get();
                $view = 'list.php';
                $title = 'Addresses';
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