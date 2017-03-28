<html>
<form method="POST" action="<?php echo base_url();?>index.php/login/loginform">
    <table border="1" align="center">
        <caption>Login Form</caption>
        <tr><td>Email</td><td><input type="email" name="email"  required/></td></tr><br/>
        <tr><td>Password</td><td><input type="password" name="password"  required/></td></tr><br/>
        <tr align='center'><td  colspan="2"><input type="submit" name="login" value="LOG IN"/></td></tr>
        <td colspan="2"><div align="center"><a href="<?php echo base_url();?>index.php/admin/admin/index">New User</a></div></td>
    </table>
    </form>
</html>
