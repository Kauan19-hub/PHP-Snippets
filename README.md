**<h2>Full-Stack Development with PHP</h2>**

###

New projects using `PHP`, `HTML`, `Tailwind` and `SQL` where we have a `API` with `GET` and `POST` for product registration, a little
system for add and remove products of the virtual cart, and a registration system for create reservations integrating `Back-End` and `Front-End` 
with recorder **data** and **hora**.

---

**<h2>✅ How to Run?</h2>**

###

**1- Local Environment Setup**

###

You will need a **Local Environment** of development that has `PHP`, `SQL` and a server web. the sw **XAMPP** is the best option for
tool for this, because he already has everything that will be necessary.

###

In case you don't have it yet **XAMPP** installed on your machine, follow these steps:

###

- **Install** the **XAMPP** here: [https://www.xampp.com](https://www.apachefriends.org/pt_br/index.html);

- Install the **XAMPP** and then activate the `Apache` and the `MySQL` in the control panel of **XAMPP**.

###

**2- Data Base**

###

Acess the `PHPMyAdmin`:

###

- Open the browser of **XAMPP** and navigate to `http://localhost/phpmyadmin/`;

###

**3- Create the Data Base**:

- Acess **New** into `PHPMyAdmin`;

- In the field 'name', add a name you want;

- Acess 'CREATE'.

###

**4- Develop the Table You Want**

###

- In the recently created 'Database', access it;

- Create a table with the desired name and with 2 `colunas`:

###

`data` (type `DATE`)<br>
`hora` (type `TIME`)

###

- To create the table, click **Execute**.

###

**5- Command in the Server Directory**

###

- Put the `PHP` in the project's directory of **XAMPP**, add the project you want inside the folder `htdocs`;

###

**6- Run the Command**

###

With the browser open, follow:

###
```
http://localhost/seu_projeto/arquivo.php
```

- Now your complete project should appear there, working the way it was developed.

###

**7- Data base Check**

###

Access `PHPMyAdmin` again and see if the created table contains the inserted data. If everything is correct, the data will be displayed there.

###

**✅- A Tip**

###

In case a `500` error or something similar occurs, check the `Apache` error `log` in **XAMPP**. It is possible that there is a misconfiguration in `PHP` or `MySQL`.
Now, if it is a database connection error, check if the connection details are correct. In the default local **XAMPP** environment, one value may be `root` and another may be empty. For example:

###

`user` -> `root`<br>
`senha` -> `null`

###

- Xampp Documentation: [https://www.apachefrieds.docs](https://www.apachefriends.org/docs/)

###

**Main Languages**

###

<div align="left">
  <img src="https://skillicons.dev/icons?i=php" height="40" alt="php logo" title="PHP" />
  <img width="1" />
  <img src="https://skillicons.dev/icons?i=tailwind" height="40" alt="tailwindcss logo" title="Tailwind" />
  <img width="1" />
  <img src="https://skillicons.dev/icons?i=html" height="40" alt="html5 logo" title="HTML5" />
  <img width="1" />
  <img src="https://skillicons.dev/icons?i=mysql" height="40" alt="mysql logo" title="MySQL" />
</div>
