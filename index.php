<?php
require 'Employee.php';
require 'Account.php';


echo '<h1> This for Test Account Class </h1>';

$account1= new Account (100);
$account2 =new Account(200);

echo "Account1's initial balance is: ". $account1->getBalance()."</br>";
echo "Account2's initial balance is: ". $account2->getBalance()."</br>";

echo '</br>';

$account1->credit(10);
$account2->credit(40);

echo "Account1's  balance after credit: ". $account1->getBalance()."</br>";
echo "Account2's  balance after credit: ". $account2->getBalance()."</br>";
echo '</br>';


$account1->debit(10);
$account2->debit(40);

echo "Account1's initial balance after debit: ". $account1->getBalance()."</br>";
echo "Account1's initial balance after debit: ". $account2->getBalance()."</br>";


echo '</br>';
//if the debit more than balance
$account2->debit(210);
$account1->debit(110);



echo "Account1's initial balance after debit: ". $account1->getBalance()."</br>";
echo "Account1's initial balance after debit: ". $account2->getBalance()."</br>";

echo '</br>';






echo '<h1> This for Test Employee Class </h1>';



$employee1 = new Employee("foo", "bar", 100);
$employee2 = new Employee("taylor", "solemn", 2223);


echo  'employee1 salary:'.$employee1->getMonthlySalary() .'</br>';
echo  'employee1 first name:'.$employee1->getFirstName().'</br>';
echo  'employee1 last:'.$employee1->getLastName().'</br>';

$incrementedSalary=$employee1->getMonthlySalary();
$incrementedSalary+=$incrementedSalary*0.1;
$employee1->setMonthlySalary(($incrementedSalary));
echo  'employee1 salary after raises is :'.$employee1->getMonthlySalary().'</br>';

echo '</br>';


echo  'employee2 salary: '.$employee2->getMonthlySalary() .'</br>';
echo  'employee2 first name: '.$employee2->getFirstName().'</br>';
echo  'employee2 last: '.$employee2->getLastName().'</br>';
$incrementedSalary=$employee2->getMonthlySalary();
$incrementedSalary+=$incrementedSalary*0.1;
$employee2->setMonthlySalary(($incrementedSalary));
echo  'employee2 salary after raises is :'.$employee2->getMonthlySalary().'</br>';

echo '</br>';


