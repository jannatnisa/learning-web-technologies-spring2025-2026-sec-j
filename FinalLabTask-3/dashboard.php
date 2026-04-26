<?php
session_start();


if(!isset($_SESSION['user'])){
    header("Location: login.php");
}


if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}


if(isset($_POST['add'])){
    $product = [
        "id" => uniqid(),
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];
    $_SESSION['products'][] = $product;
}


if(isset($_GET['delete'])){
    foreach($_SESSION['products'] as $key => $p){
        if($p['id'] == $_GET['delete']){
            unset($_SESSION['products'][$key]);
        }
    }
}


if(isset($_POST['update'])){
    foreach($_SESSION['products'] as &$p){
        if($p['id'] == $_POST['id']){
            $p['name'] = $_POST['name'];
            $p['price'] = $_POST['price'];
        }
    }
}
?>

<h2>Product Dashboard</h2>
<a href="logout.php">Logout</a>

<h3>Add Product</h3>
<form method="post">
    Name: <input type="text" name="name">
    Price: <input type="text" name="price">
    <input type="submit" name="add" value="Add">
</form>

<h3>Product List</h3>
<table border="1">
<tr>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php foreach($_SESSION['products'] as $p){ ?>
<tr>
    <form method="post">
        <td>
            <input type="text" name="name" value="<?= $p['name'] ?>">
        </td>
        <td>
            <input type="text" name="price" value="<?= $p['price'] ?>">
        </td>
        <td>
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <input type="submit" name="update" value="Update">
            <a href="?delete=<?= $p['id'] ?>">Delete</a>
        </td>
    </form>
</tr>
<?php } ?>

</table>