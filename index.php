<?php
require 'users/users.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
<table class="table">
<tr><td>
    <p>
        <a class="btn btn-success" href="create.php">Save a book</a>
    </p> 
    </td>
    <td>
     
    <form method="POST" action="search.php">
                        <input type="text" name="isbn" placeholder="Search book using ISBN">
                        <button class="btn btn-sm btn-outline-danger">Search</button>
                    </form>
    
    </td>
 </tr>
</table>    

    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Available</th>
            <th>Pages</th>
            <th>ISBN</th>
             
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                 
                <td><?php echo $user['title'] ?></td>
                <td><?php echo $user['author'] ?></td>
                <td><?php  
                    if( $user['available']==1)
                    echo "Available";
                    else
                    echo "Not Available"; ?></td>
                <td><?php echo $user['pages'] ?></td>
                <td><?php echo $user['isbn'] ?></td>
                
                 
                
                <td>
                    <a href="view.php?isbn=<?php echo $user['isbn'] ?>" class="btn btn-sm btn-outline-info">Read</a>
                     
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="isbn" value="<?php echo $user['isbn'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>

