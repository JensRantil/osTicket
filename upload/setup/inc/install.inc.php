<?php
if(!defined('SETUPINC')) die('Kwaheri wafiki!');

$info=($errors && $_POST)?Format::input($_POST):array(); //use post data.
   
if(!isset($info['title'])) {
    $info['title']='osTicket :: Support Ticket System';
}
if(!isset($info['dbhost'])) {
    $info['dbhost']='localhost';
}
if(!isset($info['prefix'])) {
    $info['prefix']='ost_';
}


?>
<div style="padding:3px; padding-top:1px; padding-bottom:5px;">
&nbsp;All fields are required.
<form action=install.php method=post name=setup>
<table width="100%" cellspacing="0" cellpadding="2" class="setup">
    <tr class="title"><td colspan=2>osTicket web path and title</td></tr>
    <tr class="subtitle"><td colspan=2>Url to osTicket installation on your server and the title.</td></tr>
    <tr><td width=150>HelpDesk URL:</td><td><b><?=URL?></b></td></tr>
    <tr>
        <td>HelpDesk Title:</td><td><input type=text name=title size=40 value="<?=$info['title']?>">
            &nbsp;<font class="error"><?=$errors['title']?></font></td>
    </tr>
    <tr class="title"><td colspan=2>System email</td></tr>
    <tr class="subtitle"><td colspan=2>Default system email (e.g support@yourdomain.com) You can change or add more emails later.</td></tr>
    <tr><td>Default Email:</td><td><input type=text name=sysemail size=40 value="<?=$info['sysemail']?>">
            &nbsp;<font class="error"><?=$errors['sysemail']?></font></td>
    </tr> 
    <tr class="title"><td colspan=2>Admin user</td></tr>
    <tr class="subtitle"><td colspan=2>Min of six characters for the password. You can change or add more users later.</td></tr>
    <tr>
        <td colspan=2>
         <table border=0 cellspacing=0 cellpadding=2 class="clean">
            <tr><td width=150>Username:</td>
                <td><input type=text name=username size=20 value="<?=$info['username']?>">
                    &nbsp;<font class="error"><?=$errors['username']?></font></td></tr>
            <tr><td>Password:</td>
                <td><input type=password name=password size=20 value="<?=$info['password']?>">
                    &nbsp;<font class="error"><?=$errors['password']?></font></td></tr>
            <tr><td>Password (again):</td>
                <td><input type=password name=password2 size=20 value="<?=$info['password2']?>">
                    &nbsp;<font class="error"><?=$errors['password2']?></font></td>
            </tr>
            <tr><td>Email:</td><td><input type=text name=email size=40 value="<?=$info['email']?>">
                    &nbsp;<font class="error"><?=$errors['email']?></font></td></tr>
         </table>
        </td>
    </tr>
    <tr class="title"><td colspan=2>Database</td></tr>
    <tr class="subtitle"><td colspan=2>MySQL (version 4.4+) is the only database supported at the moment.</td></tr>
    <tr>
        <td colspan=2><span class="error"><b><?=$errors['mysql']?></b></span>
         <table cellspacing=1 cellpadding=2 border=0>
            <tr><td width=150>MySQL Table Prefix:</td><td><input type=text name=prefix size=20 value="<?=$info['prefix']?>" >
                    <font class="error"><?=$errors['prefix']?></font></td></tr>
            <tr><td>MySQL Hostname:</td><td><input type=text name=dbhost size=20 value="<?=$info['dbhost']?>" >
                    <font class="error"><?=$errors['dbhost']?></font></td></tr>
            <tr><td>MySQL Database:</td><td><input type=text name=dbname size=20 value="<?=$info['dbname']?>">
                    <font class="error"><?=$errors['dbname']?></font></td></tr>
            <tr><td>MySQL Username:</td><td><input type=text name=dbuser size=20 value="<?=$info['dbuser']?>">
                    <font class="error"><?=$errors['dbuser']?></font></td></tr>
            <tr><td>MySQL Password:</td><td><input type=password name=dbpass size=20 value="<?=$info['dbpass']?>">
                    <font class="error"><?=$errors['dbpass']?></font></td></tr>
         </table>
        </td>
    </tr>
</table>
<div align="center">
    <input class="button" type=submit value="Install">
    <input class="button" type=reset name=reset value="Reset">
</div>
</form>
</div>
