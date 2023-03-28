
<form method=post action=update_process.php>
  이름:<input type=text name=myname><BR>
  나이:<input type=text name=myage><BR>
  성별:<input type=text name=mygender><BR>
  키:<input type=text name=myheight><BR>
  <input type=hidden name = mynum value = <?php echo $_GET['num']; ?>>
  <input type=submit value=확인>
</form>
