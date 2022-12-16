-- 1 // create table countries
Create tables countries (
  country_id int,
  country_name varchar(255),
  region_id int
);

-- 2// tạo 1 table countries với table có sẵn
Create tables IF NOT EXISTS countries (
  country_id int,
  country_name varchar(255),
  region_id int
);
-- //3 Write a SQL statement to create the structure of a table dup_countries similar to countries.


-- cach 1
Create table dup_countries (
  country_id int,
  country_name varchar(255),
  region_id int
);
-- cach 2
CREATE TABLE IF NOT EXISTS dup_countries
LIKE countries;
-- //4. Write a SQL statement to create a duplicate copy of countries table including structure and data by name dup_countries.


CREATE TABLE IF NOT EXISTS dup_countries
AS SELECT * FROM  countries;
-- 5. Write a SQL statement to create a table countries set a constraint NULL.
Create tables countries (
  country_id int,
  country_name varchar(255) NOT NULL,
  region_id int NOT NULL
);

-- 6. Write a SQL statement to create a table named jobs including columns job_id, job_title, min_salary,
--  max_salary and check whether the max_salary amount exceeding the upper limit 25000.
Create tables jobs (
  job_id int,
  job_title varchar(255) NOT NULL,
  min_salary int NOT NULL
  max_salary int NOT NULL
  CHECK(max_salary =< 25000)
);
--7. Write a SQL statement to create a table named countries including columns country_id, country_name and region_id and make sure that no countries except Italy, India and China will be entered in the table.
Create tables countries (
  country_id int,
  country_name varchar(255) NOT NULL,
  region_id int NOT NULL
  CHECK(country_name IN(' Italy', 'India', 'China'))
);
-- 8. Write a SQL statement to create a table named job_histry including columns employee_id, start_date, end_date, job_id and department_id and make sure that the value against column end_date will be entered at the time of insertion to the format like '--/--/----'.

Create tables job_histry (
  employee_id int,
  start_date date(255) NOT NULL,
  end_date date NOT NULL
  CHECK(END_DATE LIKE '--/--/----'),
  job_id int NOT NULL,
  department_id INT NOT NULL
);
-- 9. Write a SQL statement to create a table named countries including columns country_id,country_name and region_id and make sure that no duplicate data against column country_id will be allowed at the time of insertion.
Create tables IF NOT EXISTS countries (
  country_id int,
  country_name varchar(255) NOT NULL,
  region_id int NOT NULL
  UNIQUE (country_id)
);
-- 10. Write a SQL statement to create a table named jobs including columns job_id, job_title, min_salary and max_salary, and make sure that, the default value for job_title is blank and min_salary is 8000 and max_salary is NULL will be entered automatically at the time of insertion if no value assigned for the specified columns.
Create tables jobs (
  job_id int NOT NULL UNIQUE,
  job_title varchar(255) NOT NULL DEFAULT '',
  min_salary int DEFAULT 8000,
  max_salary int DEFAULT NULL
);
-- 11. Write a SQL statement to create a table named countries including columns country_id, country_name and region_id and make sure that the country_id column will be a key field which will not contain any duplicate data at the time of insertion.
Create tables IF NOT EXISTS countries (
  country_id int UNIQUE PRIMARY KEY NOT NULL,
  country_name varchar(255) NOT NULL,
  region_id int NOT NULL
);

-- 12. Write a SQL statement to create a table countries including columns country_id, country_name and region_id and make sure that the column country_id will be unique and store an auto incremented value.

Create tables IF NOT EXISTS countries (
  country_id int UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,
  country_name varchar(255) NOT NULL,
  region_id int NOT NULL
);
DESC countries;
-- 14. Write a SQL statement to create a table job_history including columns employee_id, start_date, end_date, job_id and department_id and make sure that, the employee_id column does not contain any duplicate value at the time of insertion and the foreign key column job_id contain only those values which are exists in the jobs table.

Create tables jobs (
  job_id int NOT NULL UNIQUE,
  employee_id int NOT NULL UNIQUE PRIMARY KEY,
  job_title varchar(255) NOT NULL DEFAULT '',
  min_salary int DEFAULT 8000,
  max_salary int DEFAULT NULL
  FOREIGN KEY (job_id) REFERENCES jobs(job_id)
);
ENGINE=InnoDB;

-- 15. Write a SQL statement to create a table employees including columns employee_id, first_name, last_name, email, phone_number hire_date, job_id, salary, commission, manager_id and department_id and make sure that, the employee_id column does not contain any duplicate value at the time of insertion and the foreign key columns combined by department_id and manager_id columns contain only those unique combination values, which combinations are exists in the departments table.

Create table employees (
  employee_id PRIMARY KEY NOT NULL,
  first_name varchar(255) DEFAULT NULL
  last_name varchar(255) NOT NULL
  email varchar(255) NOT NULL
  phone_number varchar(255) DEFAULT NULL
  hire_date date NOT NULL
  job_id int NOT NULL
  salary INT DEFAULT NULL
  commission varchar(255) DEFAULT NULL
  manager_id int DEFAULT NULL
  department_id int DEFAULT NULL
  FOREIGN KEY (manager_id,department_id)
  REFERENCES  departments(manager_id,department_id)
)ENGINE=InnoDB;

-- 16. Write a SQL statement to create a table employees including columns employee_id, first_name, last_name, email, phone_number hire_date, job_id, salary, commission, manager_id and department_id and make sure that, the employee_id column does not contain any duplicate value at the time of insertion, and the foreign key column department_id, reference by the column department_id of departments table, can contain only those values which are exists in the departments table and another foreign key column job_id, referenced by the column job_id of jobs table, can contain only those values which are exists in the jobs table. The InnoDB Engine have been used to create the tables.
Create table IF NOT EXISTS employees (
 employee_id PRIMARY KEY NOT NULL,
  first_name varchar(255) DEFAULT NULL
  last_name varchar(255) NOT NULL
  email varchar(255) NOT NULL
  phone_number varchar(255) DEFAULT NULL
  hire_date date NOT NULL
  job_id int NOT NULL
  salary INT DEFAULT NULL
  commission varchar(255) DEFAULT NULL
  manager_id int DEFAULT NULL
  department_id int DEFAULT NULL
  FOREIGN KEY (department_id)
  REFERENCES  departments(department_id)
  FOREIGN KEY (job_id)
  REFERENCES  jobs(job_id)
)ENGINE=InnoDB;
-- Write a SQL statement to create a table employees including columns employee_id, first_name, last_name, job_id, salary and make sure that, the employee_id column does not contain any duplicate value at the time of insertion, and the foreign key column job_id, referenced by the column job_id of jobs table, can contain only those values which are exists in the jobs table. The InnoDB Engine have been used to create the tables. The specialty of the statement is that, The ON UPDATE CASCADE action allows you to perform cross-table update and ON DELETE RESTRICT action reject the deletion. The default action is ON DELETE RESTRICT.
Create table IF NOT EXISTS employees (
  employee_id PRIMARY KEY NOT NULL,
  first_name varchar(255) DEFAULT NULL
  last_name varchar(255) NOT NULL
  email varchar(255) NOT NULL
  phone_number varchar(255) DEFAULT NULL
  hire_date date NOT NULL
  job_id int NOT NULL
  salary INT DEFAULT NULL
  commission varchar(255) DEFAULT NULL
  manager_id int DEFAULT NULL
  department_id int DEFAULT NULL
  FOREIGN KEY (department_id)
  REFERENCES  departments(department_id)
  FOREIGN KEY (job_id)
  REFERENCES  jobs(job_id)
)ENGINE=InnoDB;
DESC employees;