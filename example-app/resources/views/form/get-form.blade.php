<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>

<body>
<!--<form action="home" method="Post">-->
        <!--@csrf-->
        <!--<input type="text" value="put" name="_method" >-->
        <!--@method('put')-->
        <!--<input type="Submit">-->
        
<!--</form>-->




<form action="home">
    @csrf
    @method('get')
    
    <input type="submit" value="get">   
</form>

<br>



<form action="home" method="post">
    @csrf 
    <input type="text" name="firstname" id="firstname">
    <input type="submit" value="post" method="_method">  
</form>

<br>



<form action="home" method="post">
    @csrf
    @method('put') 
    <input type="submit" value="put"> 
</form>
<br>

<form action="home" method="post">
    @csrf
    @method('patch') 
    <input type="submit" value="patch" >   
</form>
<br>

<form action="home" method="post">
    @csrf
    @method('delete') 
    <input type="submit" value="delete" >  
</form>







        
</body>
</html>