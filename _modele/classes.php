<?php

class Utilisateur
{
	private $id;
	private $pseudo;
	private $mdp;
  private $mdp2;
  private $mail;

	// Constructeurs par arguments
	public static function construct_args($new_pseudo, $new_mdp)
	{
		$obj = new Utilisateur();

		$obj->pseudo = $new_pseudo;
		$obj->mdp = md5($new_mdp);

		return $obj;
	}

	// Constructeur par array
	public static function construct_array($new)
	{
		$obj = new Utilisateur();

		if (isset($new["id"]))  $obj->id = $new["id"];
		if (isset($new["pseudo"]))  $obj->pseudo = $new["pseudo"];
		if (isset($new["mdp"]))  $obj->mdp = $new["mdp"];
    if (isset($new["mdp2"]))  $obj->mdp2 = $new["mdp2"];
    if (isset($new["mail"]))  $obj->mail = $new["mail"];

		return $obj;
	}

	public function __get($property)
	{
    	if (property_exists($this, $property))
    	{
      		return $this->$property;
    	}
  	}

  	public function __set($property, $value)
  	{
    	if (property_exists($this, $property))
    	{
    		if ($property === "mdp")
    			$this->$property = md5($value);
    		else
	      		$this->$property = $value;
   	 	}

   	 	return $this;
   	}

   	public function aff()
   	{
   		?> 
   			<table>
   				<tr>
   					<td>id</td>
   					<td><?=$this->__get("id")?></td>
   				</tr>
   				<tr>
   					<td>Pseudo</td>
   					<td><?=$this->__get("pseudo")?></td>
   				</tr>
   				<tr>
   					<td>Mot de passe</td>
   					<td><?=$this->__get("mdp")?></td>
   				</tr>
          <tr>
            <td>mdp2</td>
            <td><?=$this->__get("mdp2")?></td>
          </tr>
          <tr>
            <td>mail</td>
            <td><?=$this->__get("mail")?></td>
          </tr>
   			</table>
   		<?php
   	}
};


?>