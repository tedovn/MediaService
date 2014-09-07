<?php
$page = 'service';
$pageTitle = 'Услуги';
require('includes/header.php');
?>
    <link rel="stylesheet" href="layout-css.css" type="text/css">
    <div class="container wrapper ">
        <div class="col-lg-2">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">

                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Shortcuts</a>
                    </li>
                    <li>
                        <a href="#">Overview</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
        </div>
        <div class="col-lg-10">
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Simple Sidebar</h1>

                            <p>This template has a responsive menu toggling system. The menu will appear collapsed on
                                smaller screens, and will appear non-collapsed on larger screens. When toggled using the
                                button below, the menu will appear/disappear. On small screens, the page content will be
                                pushed off canvas.</p>

                            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum excepturi exercitationem
                                facere fuga itaque obcaecati provident, quasi recusandae saepe similique! Ad aliquam
                                culpa, earum modi natus quam quod sit tempora.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam consequuntur
                                cupiditate doloremque expedita fuga fugiat fugit iure modi molestiae nisi, nostrum
                                provident recusandae reiciendis sapiente soluta ut veritatis! Iusto!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>
<?php
require('includes/footer.php');
?>