<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['admin_type'] !== 'admin' && $_SESSION['admin_type'] !==  'super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: product.php');
        exit;

	}
    $product_id = $del_id;
    echo $del_id;
    $db = getDbInstance();
    $db->where('id', $product_id);
    $status = $db->delete('products');
    
    if ($status) 
    {
        $_SESSION['info'] = "Product deleted successfully!";
        header('location: product.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete customer";
    	header('location: product.php');
        exit;

    }
    
}