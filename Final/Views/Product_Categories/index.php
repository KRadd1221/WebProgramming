<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model = Product_Categories::Get($_REQUEST['id']);
                $view = 'details.php';
                $title = "Details for: $model[Name]";
                break;
        
        case 'new':
                $model = Product_Categories::Blank();
                $view = 'edit.php';
                $title = 'Create New Product Category';
                break;
                
        case 'save':
                $errors = Product_Categories::Validate($_REQUEST);
        if(!$errors){
                 $errors = Product_Categories::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
                $title = "Edit: $model[Name]";
                break;
                
        case 'edit':
                $model = Product_Categories::Get($_REQUEST['id']);
                $view = 'edit.php';
                $title = "Edit: $model[Name]";
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                $errors = Product_Categories::Delete($_REQUEST['id']);            
                if(!$errors){
                    header("Location: ?");
                    die(); 
                }
                }
                $model = Product_Categories::Get($_REQUEST['id']);
                $view = 'delete.php';
                $title = "Delete: $model[Name]";
                break;
                
        default:
                $model = Product_Categories::Get();
                $view = 'list.php';
                $title = 'Name';
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