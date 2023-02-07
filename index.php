<?php

// I'm not really sure what I'm doing here, but I'll give it a try
$WilliamSmith = new Student('1', 'Smith', 'William', 'wsmith.jpg', '1', '1', '86');
$GaryLima = new Student('2', 'Lima', 'Gary', 'glima.jpg', '1', '2', '62');
$MikeAddison = new Student('3', 'Addison', 'Mike', 'maddison.jpg', '2', '1', '73');
$DavidLynch = new Student('4', 'Lynch', 'David', 'dlynch.jpg', '2', '2', '90');

$PHP = new Course('1', 'PHP', '6005', 'MVC PHP Frameworks.');
$MEANStack = new Course('2', 'MEAN Stack', '6000', 'Server Side JavaScript Course');
$Javascript = new Course('3', 'Javascript', '6001', 'Core Javascript Programming.');
$UIDesign = new Course('4', 'UI Design', '6002', 'Designing the UIs.');

$IDP = new Program('1', 'IDP', 'Two Year Diploma Program in Interactive Media.');
$IMS = new Program('2', 'IMS', 'Third Year Specialization Program in Coding for Web Developers.');

// We're passing in the whole object, but just the first item in the array which is it's ID
showGrade($WilliamSmith[0]);
showCourse($PHP[0]);
showProgram($IDP[0]);

updateGrade($WilliamSmith[0], '89');

?>