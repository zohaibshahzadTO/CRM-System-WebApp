<?php
  $dg = new C_DataGrid("SELECT * FROM contact", "id", "contact");
  $dg -> set_query_filter("Status = 1 && sales_rep = 1"); // Display only leads, Status = 1 and only for current sales person

  // the detail grid displays notes about a lead

  $sdg = new C_DataGrid("SELECT * FROM notes", "id", "notes");
  $sdg = set_query_filter("sales_rep = 1");
  $sdg->enable_edit();

  $dg -> set_masterdetail($sdg, 'Contact', 'id');
  $dg -> display();
 ?>
