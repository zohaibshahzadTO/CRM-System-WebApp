<?php
  $dg = new C_DataGrid("SELECT * FROM contact", "id", "contact");
  $dg -> set_query_filter("Status = 2 && sales_rep = 1");

  $sdg = new C_DataGrid("SELECT * FROM notes", "id", "notes");
  $sdg -> set_query_filter("Sales_rep = 1");
  $sdg -> enable_edit();

  $dg -> set_masterdetail($sdg, 'Contact', 'id');
  $dg -> display();
 ?>
