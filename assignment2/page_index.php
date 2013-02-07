<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little - DIG3930 Assignment 2</title>
<style type="text/css">
  @import url("styles/styles.css");
</style>
</head>

<body>
<div id="libform">
	<form name="madlib" method="post" action="madlib.php">
    	<label>1. Noun</label>
			<input name="form1" type="text" value="<? if (isset($_COOKIE['form1'])) {
                                                                print $_COOKIE['form1'];
                                                            }
                                                        ?>" /><br />
    	<label>2. Thing</label>
			<input name="form2" type="text" value="<? if (isset($_COOKIE['form2'])) {
                                                                print $_COOKIE['form2'];
                                                            }
                                                        ?>" /><br />
    	<label>3. Olympic Sport</label>
			<input name="form3" type="text" value="<? if (isset($_COOKIE['form3'])) {
                                                                print $_COOKIE['form3'];
                                                            }
                                                        ?>" /><br />
    	<label>4. Country</label>
			<input name="form4" type="text" value="<? if (isset($_COOKIE['form4'])) {
                                                                print $_COOKIE['form4'];
                                                            }
                                                        ?>" /><br />
    	<label>5. Thing</label>
			<input name="form5" type="text" value="<? if (isset($_COOKIE['form5'])) {
                                                                print $_COOKIE['form5'];
                                                            }
                                                        ?>" /><br />
    	<label>6. Product</label>
			<input name="form6" type="text" value="<? if (isset($_COOKIE['form6'])) {
                                                                print $_COOKIE['form6'];
                                                            }
                                                        ?>" /><br />
    	<label>7. People</label>
			<input name="form7" type="text" value="<? if (isset($_COOKIE['form7'])) {
                                                                print $_COOKIE['form7'];
                                                            }
                                                        ?>" /><br />
    	<label>8. Amount of Money</label>
			<input name="form8" type="text" value="<? if (isset($_COOKIE['form8'])) {
                                                                print $_COOKIE['form8'];
                                                            }
                                                        ?>" /><br />
    	<label>9. Product</label>
			<input name="form9" type="text" value="<? if (isset($_COOKIE['form9'])) {
                                                                print $_COOKIE['form9'];
                                                            }
                                                        ?>" /><br />
    	<label>10. Product</label>
			<input name="form10" type="text" value="<? if (isset($_COOKIE['form10'])) {
                                                                print $_COOKIE['form10'];
                                                            }
                                                        ?>" /><br />
    	<label>11. People</label>
			<input name="form11" type="text" value="<? if (isset($_COOKIE['form11'])) {
                                                                print $_COOKIE['form11'];
                                                            }
                                                        ?>" /><br />
    	<label>12. Name of Group</label>
			<input name="form12" type="text" value="<? if (isset($_COOKIE['form12'])) {
                                                                print $_COOKIE['form12'];
                                                            }
                                                        ?>" /><br />
    	<label>13. Product</label>
			<input name="form13" type="text" value="<? if (isset($_COOKIE['form13'])) {
                                                                print $_COOKIE['form13'];
                                                            }
                                                        ?>" /><br />
			<input name="submit" type="submit" value="SUBMIT" />
  </form>
</div>

</body>
</html>
