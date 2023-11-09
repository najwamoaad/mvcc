<html>
<head>
</head>
<body>
 
 
echo "<ul>";
<ul>
        <?php foreach ($users as $user) { ?>
            <li><?= $user['email']; ?>
                <a href="edit?id=<?= $user['id'] ?>">Edit</a>
                <a href="delete?id=<?= $user['id'] ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>
 
<hr>
<form method="post" action ="add">
<lable>email:</lable>
<input type="text" name="email">
<br>
<br>
<lable>password:</lable>   
<input type="password" name="password">
<br>
<br>
<lable>rule:</lable>   
<input type="text" name="rule">
<br>
<br>
<button type="submit">addUser</button>
</form>
</form>
</body>
</html>