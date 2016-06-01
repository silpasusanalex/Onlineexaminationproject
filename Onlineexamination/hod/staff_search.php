<?php  include('hodheader.php'); ?>

<form name="form1" method="post" action="viewstaff.php">
  <table width="230" border="1">
    <tr>
      <td width="64">Staff Id</td>
      <td width="150"><label>
        <input type="text" name="txtadmn" id="textfield">
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="button" id="button" value="Search">
          </div>
      </label></td>
    </tr>
  </table>
</form>
<?php  include('hodfooter.php'); ?>
