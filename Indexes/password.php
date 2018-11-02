<?php view::layout('layout')?>
<?php view::begin('content');?>
		<h1>Index of <?php echo urldecode($path);?></h1>
		<table>
			<tr><th valign="top"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWAQMAAAD6jy5FAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAtJREFUCNdjoBEAAABYAAFwhck+AAAAAElFTkSuQmCC" alt="[ICO]"></th><th>Name</th><th>Last modified</th><th>Size</th><th>Description</th></tr>
			<tr><th colspan="5"><hr></th></tr>
<?php if($path != '/'):?>			<tr><td valign="top"><img src="data:image/gif;base64,R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADSxi63P4jEPJqEDNTu6LO3PVpnDdOFnaCkHQGBTcqRRxuWG0v+5LrNUZQ8QPqeMakkaZsFihOpyDajMCoOoJAGNVWkt7QVfzokc+LBAA7" alt="[PARENTDIR]"></td><td><a href="<?php echo get_absolute_path($root.$path.'../');?>">Parent Directory</a></td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr>
<?php endif;?>
			<tr><th colspan="5"><hr></th></tr>
		</table>
		<address><?php echo $_SERVER['SERVER_SOFTWARE'];?> <?php if(PATH_SEPARATOR==':'){echo '(Linux)';}else{echo '(Windows)';} ?> Server at <?php echo $_SERVER['SERVER_NAME'];?> Port <?php echo $_SERVER['SERVER_PORT'];?></address>
		<form action="" method="post">
			<label><br/><b>Enter your password to view the folder.</b></label><br/>
			<input name="password" type="password"/>
			<input type="submit"/>
		</form>
<?php view::end('content');?>