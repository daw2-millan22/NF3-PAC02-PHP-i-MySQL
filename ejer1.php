<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
        ( movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        ("Spiderman", 1, 2019, 1, 2),
        ("Titanic", 2, 2018, 5, 6),
        ("Zombieland", 3, 2019, 4, 3)';

mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_label)
    VALUES 
        ("Musical"),
        ("Belicas"), 
        ("Depor")';

mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query  = 'INSERT INTO people
        ( people_fullname, people_isactor, people_isdirector)
    VALUES
        ("Ricardo", 1, 0),
        ("Pepito", 0, 1),
        ("Luis", 0, 1)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>
