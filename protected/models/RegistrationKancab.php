<?php

class RegistrationKancab extends CFormModel {
// attributes
// for bio
public $author_name;
public $id_office;
public $email;
public $username;
public $password;
public $repassword;
// applied rules for validation
public function rules() {
    return array(
    // safe attributes are assigned-able in all scenario types
        array('author_name, id_office, email 
        username, password, repassword', 'safe'),
    );
}
// sets attribute labels for view labeling
public function attributeLabels() {
return array(
'author_name' => 'Auhor Name',
'id_office' => 'Office',
'email' => 'Email',
'username' => 'Username',
'password' => 'Password',
'repassword' => 'Retype password',
);
}
}
?>