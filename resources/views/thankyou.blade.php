<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #574569;
  color: white;
}
      h1 { 
  display: block;
  font-size: 2em;
  margin-top: 0.67em;
  margin-bottom: 0.67em;


  color: #574569;
  font-family: "Sofia";
  text-align:center
  
}
    </style>
</head>
<body> 
<h1>thank you !!</h1>
 <table>
 <tr>
   <th>name</th>
   <th>EMAIL</th>

   
 </tr>
 <tr>
   <td>   {{$req -> name}}</td>
   <td>   {{$req -> email}}</td>
   
 </tr>
</table>

   
</body>
</html>