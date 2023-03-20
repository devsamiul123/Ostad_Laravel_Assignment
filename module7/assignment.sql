-- employees: id, name, age, salary, department_id
-- departments: id, name, manager

-- employees table

-- a. select all columns and rows from the employees table.
SELECT * FROM employees;

-- b. select only the name and salary columns of all employees with a salary greater than 50000.
SELECT name, salary FROM employees WHERE salary > 50000;

-- c. calculate the average salary of all employees.
SELECT AVG(salary) FROM employees;

-- d. count the number of employees who work in the "Marketing" department.
SELECT COUNT(id) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = "Marketing");

-- e. update the salary column of the employee with an id of 1001 to 60000.
UPDATE employees SET salary = 500000 WHERE id >= 1001 AND id <= 60000;

-- f. delete all employees whose salary is less than 30000.
DELETE FROM employees WHERE salary < 30000;



-- departments table

-- a. select all columns and rows from the departments table.
SELECT * FROM departments;

-- b. select only the name and manager columns of the "Finance" department.
SELECT name, manager FROM departments WHERE name = "Finance";

-- c. calculate the total number of employees in each department.
SELECT d.name AS dept_name, COUNT(e.id) AS num_employees
FROM employees e
LEFT JOIN departments d on e.department_id = d.id
GROUP BY department_id;

-- d. insert a new department called "Research" with a manager named "John Doe".
INSERT INTO departments (name, manager) VALUES ("Research", "John Doe");

