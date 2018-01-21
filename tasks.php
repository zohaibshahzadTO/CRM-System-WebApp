<?php
  /* The first line creates a phpGrid object by passing the SELECT SQL statement,
  its primary key — ID, and then the name of the database table - notes. */
  $dg = new C_DataGrid("SELECT * FROM notes", "ID", "notes");

  /* The second and the final line calls display() function to render the datagrid
  on the screen.*/
  $dg -> display();
 ?>
