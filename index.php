<?php
include_once('../util/db.php');
include_once('classes/adminsessioncheck.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Welcome to Admin</title>
		<link rel="shortcut icon" href="../ico.png">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>

        <?php include_once 'includes/header.php'; ?>

        <!-- Container -->
        <div id="container">
            <div class="shell">

                <!-- Small Nav -->
                <div class="small-nav">
                    Dashboard
                </div>
                <!-- End Small Nav -->

                <!-- Message OK -->		
                <!-- <div class="msg msg-ok">
                        <p><strong>Your file was uploaded succesifully!</strong></p>
                        <a href="#" class="close">close</a>
                </div> -->
                <!-- End Message OK -->		

                <!-- Message Error -->
                <!-- <div class="msg msg-error">
                        <p><strong>You must select a file to upload first!</strong></p>
                        <a href="#" class="close">close</a>
                </div> -->
                <!-- End Message Error -->
                <br />
                <!-- Main -->
                <div id="main">
                    <div class="cl">&nbsp;</div>

                    <!-- Content -->
                    <div id="content" style="width:100%">

                        <!-- Box -->
                        <div class="box">
                            <!-- Box Head -->
                            <div class="box-head">
                                <h2 class="left">Dashboard</h2>
                            </div>
                            <!-- End Box Head -->	

                            <!-- Table -->
                            <div class="dashboard" align="center">
                                <table cellpadding="0" cellspacing="0" width="90%" border="0">
                                    <tr>
									<td align='center'><h2>Welcome To Admin</h2></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Table -->

                        </div>
                        <!-- End Box -->

                    </div>
                    <!-- End Content -->

                    <div class="cl">&nbsp;</div>			
                </div>
                <!-- Main -->
            </div>
        </div>
        <!-- End Container -->
<?php include_once('includes/footer.php'); ?>
        <?php include_once('includes/footer.php'); ?>

    </body>
</html>
