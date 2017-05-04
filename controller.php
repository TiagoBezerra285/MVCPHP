<?php

	require "model/UsuarioModel.php";
	//require "view/View.php";

class HomeController
{
    public function Index()
    {
        include "view/Index.php";
    }

    public function Login()
    {
    	include "view/Login.php";
    }

    public function Painel()
    {
    	$model = new UsuarioModel();
    	$usuario = $model->UsuarioLogado();
    	include "view/Painel.php";
    }
}