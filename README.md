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
