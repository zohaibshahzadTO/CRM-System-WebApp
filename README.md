# Customer Relationship Management (CRM) System

It's a system that manages customer interactions and data throughout the customer life-cycle between the customer and the company across different channels. For this project, we are going to build a custom CRM in PHP and MySQL, which a sales team can use to track customers through the entire sales cycle.

In the end, we want to build this CRM system in such a way that salespeople can do the following:

<ul>
  <li>Access their tasks</li>
  <li>View their Tasks</li>
  <li>Create new tasks for each lead</li>
  <li>Create new opportunities</li>
  <li>Close a sale</li>
</ul>

Moreover, we want Sales Managers to be able to do the following:

<ul>
  <li>Manage all customers</li>
  <li>Manage their sales team</li>
  <li>View current sales activities</li>
</ul>

# Building Blocks of the CRM

Here is a list of the essential components of the CRM:

<b>Leads: initial contacts</b>

<b>Accounts: Information about the companies you do business with</b>

<b>Contact: Information about the people you know and work with. Usually, one account has many contacts</b>

<b>Opportunities: Qualified leads</b>

<b>Activities: Tasks, meetings, phone calls, emails and any other activities that allow you to interact with customers</b>

<b>Sales: Your sales team</b>

<b>Dashboard: CRM dashboards are much more than just eye candy. They should deliver key information at a glance and provide links to drill down for more details.</b>

<b>Login: Salespeople and managers have different roles in the system. Managers have access to reports and sales pipeline information.</b>

# System Requirements

<li><b>PHP 5.3+</b></li>
<li><b>MySQL or MariaDB</b></li>
<li><b>phpGrid</b></li>

# Creating the CRM Database

Our main tables for the CRM database are the following:

<li><b>contact - contains basic customer data</b></li>
<li><b>notes - holds information collection from Contact by sales people.</b></li>
<li><b>users - information about sales people</b></li>

The Contact table contains basic customer information including names, company addresses, project information, and so forth.

The Notes table stores all sales activity information such as meetings and phone calls.

The Users table holds login information about users of the system such as usernames and passwords. Users can also have roles, such as Sales or Manager.

All other tables are lookup tables to join to the three main relational database tables.

- contact_status — contains contact status such as Lead and Opportunity. Each indicates a different stage in a typical sales cycle

- task_status — the task status can be either Pending or Completed

- user_status — a sale person can be Active or Inactive

- todo_type — a type of task either Task or Meeting

- todo_desc — description of a task such as Follow Up Email, Phone Call, and Conference etc.

- roles — a user can be either a Sales Rep or a Manager

# Database Schema Diagram

A database schema is the structure that represents the logical view such as tables, views, or primary and foreign keys of the entire database. We generated this database table diagram via MySQL Workbench. A database schema includes entities and the relationship among them.

It is a good practice to have one primary key for each table in a relational database. A primary key is a unique identifier for each record. It can be the social security number (SSN), vehicle identification number (VIN), or auto-increment number. This is a unique number that is generated when a new record is inserted into a table.

Below is the database diagram of our simple CRM. The key symbol in each table represents the table primary key.




# install.sql

After understanding the database table structure, you can download the "install.sql" script in the db folder in this github repository and use either MySQL Workbench or Sequel Pro to run the SQL script. If you're using MySQL Workbench like I did, first establish a connection to database and create a new database schema (eg. crm_database). Run the "install.sql" script and click on "Data import" to dump the contents of the "install.sql" file into the new database schema (crm_database) you created. After the data dump, now go on the "database" tab on the program and click on "reverse engineer". After reverse engineering the sql script, the program will generate the database table diagram that you saw above as well as the primary and foreign keys of the db.

# phpGrid Setup

Our CRM contains many datagrids. The datagrid is a spreadsheet-like data table that displays rows and columns representing records and fields from the database table. The datagrid gives the end-user ability to read and write to database tables on a webpage. We can use a datagrid tool from phpGrid. We use a tool instead of building them from scratch because developing the datagrid is usually tedious and error-prone. The datagrid library will handle all internal database CRUD (Create, Remove, Update, and Delete) operations for us with better and faster results with little code. To install phpGrid, follow these steps:

1.) Unzip the phpGrid download file.

2.) Upload the phpGrid_lite folder to the phpGrid folder.

3.) Complete the installation by configuring the conf.php file.

Before we begin coding, we must specify the database information in conf.php, the phpGrid configuration file. Here is an example of database connection settings. We have to change the database name in "PHPGRID_DB_NAME" from "sampledb" to "custom_crm".

The following are connection setting within the conf.php file in the phpGrid zip folder we downloaded:

- PHPGRID_DB_HOSTNAME — web server IP or host name
- PHPGRID_DB_USERNAME — database user name
- PHPGRID_DB_PASSWORD — database password
- PHPGRID_DB_NAME — database name of our CRM
- PHPGRID_DB_TYPE — type of database
- PHPGRID_DB_CHARSET — always ‘utf8’ in MySQL


# CRM Main Pages

- Tasks
- Leads
- Opportunities
- Customers / Won

Each page indicates a different stage in a typical sales cycle.
