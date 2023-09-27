<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['admin_type'] !== 'admin' && $_SESSION['admin_type'] !==  'super'){
		$_SESSION['failure'] = "Você nao tem permissão para excluir ativos, entrar em contato com administrador";
    	header('location: products.php');
        exit;

	}
    $product_id = $del_id;
    echo $del_id;
    $db = getDbInstance();
    $db->where('id', $product_id);
    $status = $db->delete('products');
    
    if ($status) 
    {
        $_SESSION['info'] = "Ativo deletado com sucesso!";
        header('location: products.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Não foi possivel deletar o ativo";
    	header('location: products.php');
        exit;

    }
    
}