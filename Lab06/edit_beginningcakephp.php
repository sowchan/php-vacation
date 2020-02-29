<!DOCTYPE html>
<html>
    <head>
        <!--
            Author: your name
            Date:   today's date
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Beginning CakePHP</title>
        <link type="text/css" rel="stylesheet" href="www/css/bookstorestyle.css" />
    </head>

    <body>
        <div id="wrapper">
            <!-- navigation bar -->
            <div id="navbar">
                <a href="index.php">Home</a>  || <a href="books.php">List Books</a> ||
            </div>

            <!-- Logo image and banner text -->
            <table id="banner">
                <tr>
                    <td>
                        <img src="www/img/bookstore.gif" alt="Bookstore">
                    </td>
                    <td>
                        <div id="maintitle">PHP Online Bookstore</div>
                        <div id="subtitle">Learn how to build an online bookstore <br>with PHP and MySQL</div>
                    </td>
                    <td>
                        <div id="shoppingcart">
                            <a href="showcart.php">
                                <img src='www/img/shoppingcart_full.gif' alt='Shopping cart' style='width: 50px; border: none'><br>
                                3 item(s)
                            </a>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Main body of content -->
            <div id="mainbody">
                <h2>Beginning CakePHP</h2>

				<table class="bookdetails">
					<tr>
						<td style="width: 180px">
							<img src="www/img/books/cakephp.jpg" alt="Beginning cake PHP" title="Beginning cake PHP" width="150" />
						</td>
						<td style="width: 80px">
							<h4>Title:</h4>
							<h4>Author</h4>
							<h4>ISBN:</h4>
							<h4>Year:</h4>
							<h4>Pages:</h4>
							<h4>Price</h4>
						</td>
						<td>
							<!-- textboxes to display book details -->
							<p><input type="" name="title" value="" size="40" /></p>
							<p><input type="" name="author" value="" size="40" /></p>
							<p><input type="" name="isbn" value="" /></p>
							<p><input type="" name="year" value="" /></p>
							<p><input type="" name="pages" value="" /></p>
							<p><input type="" name="price" value="" /></p>
						</td>
					</tr>
				</table>
            </div>
            <!-- page footer for copyright information -->
            <div id="footer">
                <hr>
                &copy; PHP Online Bookstore. All Rights Reserved.
            </div>
        </div>
    </body>
</html>