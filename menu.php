<div id="menu">
  <ul>
    <!-- the usage of $_GET['currentPage']. Each page will set a value which
        will highlight the name of the current page on the top menu bar.-->
    <li><a href="tasks.php" <?php if($_GET['currentPage'] == 'tasks') echo 'class="active"'; ?>>Tasks</a></li>
    <li><a href="leads.php" <?php if($_GET['currentPage'] == 'leads') echo 'class="active"'; ?>>Leads</a></li>
    <li><a href="opportunities.php" <?php if($_GET['currentPage'] == 'opportunities') echo 'class="active"'; ?>>Opportunities</a></li>
    <li><a href="customerwon.php" <?php if($_GET['currentPage'] == 'customerwon') echo 'class="active"'; ?>>Customers/Won</a></li>
  </ul>
</div>
