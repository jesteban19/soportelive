<?php
/*
	Framework NeoApp v.000.1
	esteban.programador@gmail.com
	Hash.php
*/

class Hash
{
	public static function getHash($algoritmo,$data,$key)
	{
		$hash=hash_init($algoritmo);
		hash_update($hash,$data);

		return hash_final($hash);
	}
}

?>