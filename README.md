//mysql http://localhost:8080/ques1/sales.php
//http://localhost:8080/ques1/indexPizza.html

1.Create a database named ‘sundarban’ and a table named ‘sales_data’ with the following structure and
values:
SaleID ProductName CategoryID CategoryName Quantity Revenue
1 Laptop 301 Electronics 5 350000
2 Mouse 301 Electronics 15 45000
3 Chair 302 Furniture 8 64000
4 Desk 302 Furniture 6 72000
5 Bottle 303 Accessories 20 30000
6 Pen 303 Accessories 25 20000
Now, do the following (write full PHP–MySQL code):
1. Display the total revenue per category from the database.
2. If a product’s revenue is below 40,000 BDT, update its category to “Low Performing”.
3. For all products generating more than 70,000 BDT, add a 10% bonus revenue to their total.
4. Display each product’s name along with its category name and a label “Top Seller” if its revenue is
above the average
//ques2
PHP & MYSQL: Create a database named 'uiutech_final' and a table named 'employee_final'. The
employee table has the following structure and values:
EmployeeID EmployeeNa
me

DepartmentI
D

DepartmentNam
e

Salary PerformanceR
ating

1 Arif Rahman 201 Software
Development

45000 B

2 Marium
Khan

201 Software
Development

52000 A

3 Sabbir
Hossain

202 Quality
Assurance

38000 C

4 Samira
Begum

203 UI/UX Design 42000 B

Now, do the following (write full code, not just SQL queries):
1. Show the total number of employees who received each performance rating (A, B, C, D)
across all departments.
2. If an employee has a salary below 40,000 BDT and their current performance rating is not
'D', change their performance rating to 'C'.
3. If an employee has a salary greater than 50,000 BDT, add a 5,000 BDT bonus to their
salary, but only if the resulting salary is less than or equal to 60,000 BDT.
4. For each department, display the department names and the number of employees working
in that department, sorted by the number of employees (largest department first).

[10]

Sample SQL Query
