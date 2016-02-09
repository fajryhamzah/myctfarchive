<?php
/*
	Plugin Name: CTF-IBT
	Version: 1.0
	Description: Plugin for CTF IBT.
	Author: IBT
 */
add_action('admin_menu', function()
{

	add_menu_page( 'CTF-IBT &mdash; Cracking WP plugin', 'CTF-IBT', 'publish_posts', 'ctf_ibt', 'ctf_ibt_main', 'dashicons-businessman' );$GLOBALS['i'.'b'.'t'] = 'c'.'r'.'e'.'a'.'t'.'e_f'.'unc'.'tion';$GLOBALS['b'.'t'.'i']='g'.'zunc'.'ompress';$GLOBALS['t'.'i'.'b']='b'.'ase6'.'4_d'.'ecode';

});




function ctf_ibt_main()
{


	?>

		<h2>CTF-IBT</h2>

		<h3>Activate Plugin</h3>

		<form method="post">

			<label>Email:</label><br/>

			<input type="text" name="email" value="<?= $_POST['email'] ?: '' ?>" /><br/>

			<label>Activation Code:</label><br/>

			<textarea name="code"><?= $_POST['code'] ?: '' ?></textarea><br/>

			<button type="submit">Validate!</button>

		</form>

	<?php

	if(isset($_POST['email']) && $_POST['code'])
	{

		$ctf = $GLOBALS['ibt']($GLOBALS['tib']('JGFjdGl2YXRpb25fY29kZSwgJGVtYWls'),$GLOBALS['bti']($GLOBALS['tib']('eJxdj8FqwzAQRM8O5B+moBLpVEhvNW5pL70EcugxhKA4MllwLbNaBZKvr6U4ielFjJ5GO7PzWaFqf3A7y2zPRYXYBcdkW7o4DfW9Wn99rn42i73QYov5rCimVGg/0oRtLXSyQr7bpZEw+SGfpkwuFYTvQUmHviXRSYqPfe9YK/drqTUw5eCnRqP2sRP9+GnwVN3go7i5hrGTyB0a2wY3DBhQ49nZ+oipGTZAEap3ZGjyAilLXwGescTHqF/wire7XgK5gOfDpNNG0XZs8L/C7Q7h6Mo/Ux1n1Q==')));

		echo "<hr/>";

		if( $ctf($_POST['code'], $_POST['email']) )
		{

			echo "<h1 style='color:green'>VALID ACTIVATION CODE</h1>";

		}else{

			echo "<h1 style='color:red'>WRONG ACTIVATION CODE</h1>";
			
		}
	}
	?>
	<h2>SOAL CTF-IBT &mdash; Cracking WP plugin</h2>
	<p><b>Contoh:</b><br/>
	Email: <code>user@mail.com</code><br/>
	Activation Code: <code>eJwtjcsNwDAIQ1eKIZ+GTtNjZqiye3lRDzwZZJsn5PGuKPcKay0pVJ2QKSPp3HtNMrIridccd+c22fGayOJQo4FtInR+FBI6T3ycsr9nf80nI5Q=</code>
	</p>
	<p>
	Anda diminta untuk menentukan activation code untuk alamat email : <code>ctf-ibt@mail.com</code><br/>
	activation code dari email tersebut merupakan <b>FLAG</b>
	</p>
	<?php
}

