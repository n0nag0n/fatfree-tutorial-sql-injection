<?php

class User_Controller {
	public function login(Base $fw, array $args = []): void {
		echo '<pre>';
		$email = $fw->GET['email']; // $_GET['email']
		$field_name = $fw->GET['field_name'] === 'email' ? 'email' : 'username';
		// if($field_name !== 'email' && $field_name !== 'username') {
		// 	die('You are a crook!');
		// }
		$sql = "SELECT * FROM users WHERE `{$field_name}` = :email AND role = :role";
		var_dump($fw->DB->exec($sql, [ ':email' => $email, ':role' => 'Admin' ]));
		var_dump($sql);
		var_dump($fw->DB->log());
		echo '</pre>';
	}
}