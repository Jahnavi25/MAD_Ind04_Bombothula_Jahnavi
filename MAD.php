Last login: Sun Apr 21 20:44:41 on ttys000
jahnavibombothula@jahnavis-mbp ~ % ssh jbombot@csx2.cs.okstate.edu
jbombot@csx2.cs.okstate.edu's password: 
                              STATEMENT OF POLICY:
Department computing policies are available on the web:
		   https://cs.okstate.edu/it/it_policies.html

Please review the Department Servers section for information about CSX
uptime and accounts, and the Appropriate Use Policy for expectations of users.
===============================================================================
                         VPN FOR OFF-CAMPUS CONNECTING
Need to connect from off-campus? You'll need to use the campus VPN. You can
find out about this and more in our logging on tutorial:
                    http://cs.okstate.edu/it/loggingon.html
===============================================================================
     To send requests, problem reports, etc: http://sysmgr.cs.okstate.edu/
===============================================================================
Last login: Thu Apr  4 20:49:11 2024 from 10.200.219.239
jbombot@csx2:~$ mysql -u jbombot -p
Enter password: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 53386
Server version: 10.6.16-MariaDB-0ubuntu0.22.04.1 Ubuntu 22.04

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> use jbombot
Database changed
MariaDB [jbombot]> ls
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ls' at line 1
MariaDB [jbombot]> CREATE TABLE states ( name VARCHAR(50) NOT NULL, nickname VARCHAR(5) NOT NULL )
    -> Create a table named states in your database.
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Create a table named states in your database.' at line 2
MariaDB [jbombot]> CREATE TABLE states (
    ->     name TINYTEXT,
    ->     nickname TINYTEXT
    -> );
Query OK, 0 rows affected (0.006 sec)

MariaDB [jbombot]> ls
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ls' at line 1
MariaDB [jbombot]> show tables;
+-------------------+
| Tables_in_jbombot |
+-------------------+
| states            |
+-------------------+
1 row in set (0.001 sec)

MariaDB [jbombot]> INSERT INTO states (name, nickname) VALUES
    -> ('Alabama', 'Yellowhammer State'),
    -> ('Alaska', 'The Last Frontier'),
    -> ('Arizona', 'The Grand Canyon State'),
    -> ('Arkansas', 'The Natural State'),
    -> ('California', 'The Golden State'),
    -> ('Colorado', 'The Centennial State'),
    -> ('Connecticut', 'The Constitution State'),
    -> ('Delaware', 'The First State'),
    -> ('Florida', 'The Sunshine State'),
    -> ('Georgia', 'The Peach State'),
    -> ('Hawaii', 'The Aloha State'),
    -> ('Idaho', 'The Gem State'),
    -> ('Illinois', 'The Prairie State'),
    -> ('Indiana', 'The Hoosier State'),
    -> ('Iowa', 'The Hawkeye State'),
    -> ('Kansas', 'The Sunflower State'),
    -> ('Kentucky', 'The Bluegrass State'),
    -> ('Louisiana', 'The Pelican State'),
    -> ('Maine', 'The Pine Tree State'),
    -> ('Maryland', 'The Old Line State'),
    -> ('Massachusetts', 'The Bay State'),
    -> ('Michigan', 'The Great Lakes State'),
    -> ('Minnesota', 'The North Star State'),
    -> ('Mississippi', 'The Magnolia State'),
    -> ('Missouri', 'The Show Me State'),
    -> ('Montana', 'The Treasure State'),
    -> ('Nebraska', 'The Cornhusker State'),
    -> ('Nevada', 'The Silver State'),
    -> ('New Hampshire', 'The Granite State'),
    -> ('New Jersey', 'The Garden State'),
    -> ('New Mexico', 'The Land of Enchantment'),
    -> ('New York', 'The Empire State'),
    -> ('North Carolina', 'The Tar Heel State'),
    -> ('North Dakota', 'The Peace Garden State'),
    -> ('Ohio', 'The Buckeye State'),
    -> ('Oklahoma', 'The Sooner State'),
    -> ('Oregon', 'The Beaver State'),
    -> ('Pennsylvania', 'The Keystone State'),
    -> ('Rhode Island', 'The Ocean State'),
    -> ('South Carolina', 'The Palmetto State'),
    -> ('South Dakota', 'Mount Rushmore State'),
    -> ('Tennessee', 'The Volunteer State'),
    -> ('Texas', 'The Lone Star State'),
    -> ('Utah', 'The Beehive State'),
    -> ('Vermont', 'The Green Mountain State'),
    -> ('Virginia', 'The Old Dominion State'),
    -> ('Washington', 'The Evergreen State'),
    -> ('West Virginia', 'The Mountain State'),
    -> ('Wisconsin', 'The Badger State'),
    -> ('Wyoming', 'The Equality or Cowboy State');
Query OK, 50 rows affected (0.002 sec)
Records: 50  Duplicates: 0  Warnings: 0

MariaDB [jbombot]> SELECT * FROM states;
+----------------+------------------------------+
| name           | nickname                     |
+----------------+------------------------------+
| Alabama        | Yellowhammer State           |
| Alaska         | The Last Frontier            |
| Arizona        | The Grand Canyon State       |
| Arkansas       | The Natural State            |
| California     | The Golden State             |
| Colorado       | The Centennial State         |
| Connecticut    | The Constitution State       |
| Delaware       | The First State              |
| Florida        | The Sunshine State           |
| Georgia        | The Peach State              |
| Hawaii         | The Aloha State              |
| Idaho          | The Gem State                |
| Illinois       | The Prairie State            |
| Indiana        | The Hoosier State            |
| Iowa           | The Hawkeye State            |
| Kansas         | The Sunflower State          |
| Kentucky       | The Bluegrass State          |
| Louisiana      | The Pelican State            |
| Maine          | The Pine Tree State          |
| Maryland       | The Old Line State           |
| Massachusetts  | The Bay State                |
| Michigan       | The Great Lakes State        |
| Minnesota      | The North Star State         |
| Mississippi    | The Magnolia State           |
| Missouri       | The Show Me State            |
| Montana        | The Treasure State           |
| Nebraska       | The Cornhusker State         |
| Nevada         | The Silver State             |
| New Hampshire  | The Granite State            |
| New Jersey     | The Garden State             |
| New Mexico     | The Land of Enchantment      |
| New York       | The Empire State             |
| North Carolina | The Tar Heel State           |
| North Dakota   | The Peace Garden State       |
| Ohio           | The Buckeye State            |
| Oklahoma       | The Sooner State             |
| Oregon         | The Beaver State             |
| Pennsylvania   | The Keystone State           |
| Rhode Island   | The Ocean State              |
| South Carolina | The Palmetto State           |
| South Dakota   | Mount Rushmore State         |
| Tennessee      | The Volunteer State          |
| Texas          | The Lone Star State          |
| Utah           | The Beehive State            |
| Vermont        | The Green Mountain State     |
| Virginia       | The Old Dominion State       |
| Washington     | The Evergreen State          |
| West Virginia  | The Mountain State           |
| Wisconsin      | The Badger State             |
| Wyoming        | The Equality or Cowboy State |
+----------------+------------------------------+
50 rows in set (0.001 sec)

MariaDB [jbombot]> exit;
Bye
jbombot@csx2:~$ ls
 a.out	       hw1.c	        output1.txt	    Process.class
 Desktop       hwpgm1.c         output2.txt	    public_html
 fcfs	       input1.txt       output.txt	    RoundRobin
 fcfs_1.java   input2.txt       pgm3_1.c	    RoundRobin.class
 fcfs.c        input.txt        pgm3_2.c	    RoundRobin.java
 FCFS.class    input.txt.save   pgm3_3.c	    sem.h
 fcfs.java     Main.class       Priority	    sjf
 FCFS.java     Main.java       'Priority$1.class'   SJF.class
 fcfs.txt      my-exe	        Priority.class	    SJF.java
 fsfc_1.c      my-hw1	        Priority.java
jbombot@csx2:~$ cd public_html/
jbombot@csx2:~/public_html$ pico MAD.php

  GNU nano 6.2                         MAD.php *                                
                                $prepared_sql_query_statement->execute();
                                $sql_result = $prepared_sql_query_statement->fe>
                                return $sql_result;
                } catch (Exception $error) {
                                die("Execution Failed ! Please verify SQL query>
                }
    }
}
        $retrieveData  = new RetrieveData ();  
        $fetched_state_details = $retrieveData ->stateTableRow();
        if(!empty($fetched_state_details)) {
                $convertToJSON = json_encode(array('Execution_Status'=>TRUE, 'F>
    } else {
                $convertToJSON = json_encode(array('Execution_Status'=>FALSE, '>
    }
        header('Content-Type: application/json');
        echo $convertToJSON;
        header("HTTP/1.0 405 Method Not Allowed");
?>

         [ line 64/64 (100%), col  1/ 1 (100%), char 2169/2169 (100%) ]
^G Help      ^O Write Out ^W Where Is  ^K Cut       ^T Execute   ^C Location
^X Exit      ^R Read File ^\ Replace   ^U Paste     ^J Justify   ^/ Go To Line
