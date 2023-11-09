  
<html>
     <head>
     
     </head>
     
     <body>
<form action="update?id=<?=$users['id']?>" method="POST" >
  
 <label for="">email</label> : <input type="text" name="email" placeholder="email" value="<?= $users['email'] ?>" required> <br></br>
 
 

 <label for="">password</label> : <input type="password" name="password" placeholder="Password" value="<?= $users['password'] ?>" required ><br></br>

 <label for="">rule</label> : <input type="text" name="rule"  placeholder="rule" value="<?= $users['rule'] ?>" required><br></br>
 
 <input type="submit" value="send" name="send" ></br></br>
 
</form>
    

</body>

</html>
 