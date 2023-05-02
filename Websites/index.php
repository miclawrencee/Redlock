<?php
$dbhost = 'redlock-sql';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'RedLock';

$connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(!$connect)
{
    die("Connection failed " . mysqli_connect_error());
}

$sqlfunc = "SELECT ID, Nama, Alamat, Jabatan FROM Users";
$res = mysqli_query($connect, $sqlfunc);

if(mysqli_num_rows($res) > 0)
{
    echo "<table><tr><th> ID(PK) </th><th> Nama </th><th> Alamat </th><th> Jabatan </th></tr>"; //TableHeader
    
    while ($row = mysqli_fetch_assoc($res))
    {
        echo "<tr><td" . $row['ID'] . "</td><td>" . $row['Nama'] . "</td><td>" . $row['Alamat'] . "</td><td>" . $row['Jabatan'] . "</td></tr>"; //TableRows
    }

    echo "</table>";
}

else
{
    echo "No data found!";
}

mysqli_close($connect);
?>