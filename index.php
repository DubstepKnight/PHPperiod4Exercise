<?php
    spl_autoload_register(function($class_name)
    {
        include $class_name . '.php';
    });
    
    $student = new Student("Tessa", "Violet", 1992, array("Music, Poetry"), 82);

    echo '<h2>Student</h2>';
    echo $student->printAll();

    $teacher = new Teacher("Mia", "Khalifa", 1975, array("Psychology,", "Sociology"), "Medicine");

    echo '<h2>Teacher</h2>';
    echo $teacher->printAll();

    $cleaner = new Staff("Bob", "Marley", 1988, "cleaner");

    echo '<h2>Cleaner</h2>';
    echo $cleaner->printAll();

    $caretaker = new Staff("Gwen", "Stacey", 1978, "caretaker");

    echo '<h2>Caretaker</h2>';
    echo $caretaker->printAll();
?>