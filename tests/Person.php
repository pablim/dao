<?php
namespace pablovf\model\tests;

use pablovf\model\Domain;

class Person extends Domain {

	public $codigo;
	public $nome;
	public $email;
	public $cpf;
	

	function __toString() {
		return $this->nome;
	}

	static function properties() {
		return [
			"codigo" => [
				"name"=>"codigo","increment"=>"yes","visible"=>"no",
				"key"=>"yes","null"=>"no","type"=>"integer"],
			"idade" => [
				"acess"=>"public","null"=>"no","type"=>"integer",
				"name"=>"idade","size"=>"3"],
			"cpf" => [
				"acess"=>"public","name"=>"cpf","label"=>"CPF","null"=>"no",
				"type"=>"string","size"=>"15"],
			"nome" => [
				"acess"=>"public","name"=>"nome","toString"=>"true",
				"null"=>"no","type"=>"string","size"=>"30"],
			"email" => [
				"acess"=>"public","name"=>"email","toString"=>"true",
				"null"=>"no","type"=>"string","size"=>"100"],
		];
	}

}
