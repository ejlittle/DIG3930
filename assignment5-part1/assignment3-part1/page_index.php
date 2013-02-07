<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eric Little - DIG3930 Assignment 3</title>
<style type="text/css">
  @import url("styles/styles.css");
</style>
</head>

<body>

<div id="libform">
	<form name="madlib" method="post" action="http://sulley.dm.ucf.edu/~elittle/DIG3930/assignment5-part1/assignment3-part1/validator.php">
    	<label>1. Noun</label>
			<input name="form1" type="text" value="<? if (isset($_COOKIE['form1'])) {
                                                                print $_COOKIE['form1'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform1']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform1']))
															{
																print "<span class='missing'>Error 002: Invalid value for 1. Noun</span>";
															}
															?><br />
    	<label>2. Thing</label>
			<input name="form2" type="text" value="<? if (isset($_COOKIE['form2'])) {
                                                                print $_COOKIE['form2'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform2']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															} 
															else if(isset($_COOKIE['wrongform2']))
															{
																print "<span class='missing'>Error 002: Invalid value for 2. Thing</span>";
															}?><br />
    	<label>3. Olympic Sport</label>
			<input name="form3" type="text" value="<? if (isset($_COOKIE['form3'])) {
                                                                print $_COOKIE['form3'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform3']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform3']))
															{
																print "<span class='missing'>Error 002: Invalid value for 3. Olympic Sport</span>";
															}?><br />
    	<label>4. Country</label>
			<input name="form4" type="text" value="<? if (isset($_COOKIE['form4'])) {
                                                                print $_COOKIE['form4'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform4']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform4']))
															{
																print "<span class='missing'>Error 002: Invalid value for 4. Country</span>";
															}?><br />
    	<label>5. Thing</label>
			<input name="form5" type="text" value="<? if (isset($_COOKIE['form5'])) {
                                                                print $_COOKIE['form5'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform5']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform5']))
															{
																print "<span class='missing'>Error 002: Invalid value for 5. Thing</span>";
															}?><br />
    	<label>6. Product</label>
			<input name="form6" type="text" value="<? if (isset($_COOKIE['form6'])) {
                                                                print $_COOKIE['form6'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform6']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform6']))
															{
																print "<span class='missing'>Error 002: Invalid value for 6. Product</span>";
															}?><br />
    	<label>7. People</label>
			<input name="form7" type="text" value="<? if (isset($_COOKIE['form7'])) {
                                                                print $_COOKIE['form7'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform7']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform7']))
															{
																print "<span class='missing'>Error 002: Invalid value for 7. People</span>";
															}?><br />
    	<label>8. Amount of Money</label>
			<input name="form8" type="text" value="<? if (isset($_COOKIE['form8'])) {
                                                                print $_COOKIE['form8'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform8']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform8']))
															{
																print "<span class='missing'>Error 002: Invalid value for 8. Amount of Money</span>";
															}?><br />
    	<label>9. Product</label>
			<input name="form9" type="text" value="<? if (isset($_COOKIE['form9'])) {
                                                                print $_COOKIE['form9'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform9']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform9']))
															{
																print "<span class='missing'>Error 002: Invalid value for 9. Product</span>";
															}?><br />
    	<label>10. Product</label>
			<input name="form10" type="text" value="<? if (isset($_COOKIE['form10'])) {
                                                                print $_COOKIE['form10'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform10']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform10']))
															{
																print "<span class='missing'>Error 002: Invalid value for 10. Product</span>";
															}?><br />
    	<label>11. People</label>
			<input name="form11" type="text" value="<? if (isset($_COOKIE['form11'])) {
                                                                print $_COOKIE['form11'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform11']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform11']))
															{
																print "<span class='missing'>Error 002: Invalid value for 11. People</span>";
															}?><br />
    	<label>12. Name of Group</label>
			<input name="form12" type="text" value="<? if (isset($_COOKIE['form12'])) {
                                                                print $_COOKIE['form12'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform12']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform12']))
															{
																print "<span class='missing'>Error 002: Invalid value for 12. Name of Group</span>";
															}?><br />
    	<label>13. Product</label>
			<input name="form13" type="text" value="<? if (isset($_COOKIE['form13'])) {
                                                                print $_COOKIE['form13'];
                                                            }
                                                        ?>" /><? if(isset($_COOKIE['emptyform13']))
															{
																print "<span class='missing'>Error 001: Field left empty!</span>";
															}
															else if(isset($_COOKIE['wrongform13']))
															{
																print "<span class='missing'>Error 002: Invalid value for 13. Product</span>";
															}?><br />
                                                            

			<input name="submit" type="submit" value="SUBMIT!" />
  </form>
</div>

</body>
</html>