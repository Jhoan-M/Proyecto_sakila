<?php require_once 'partes/head.php';?>
<?php require_once 'partes/menu.php';?>

<form action="">

        <h2><?php echo $pagina?></h2>

            <div class="input">
                <input type="text" name="nombre" id="name">
                <label for="password">Ingrese una categoria</label>
                <span class="error"></span>
            </div>

            <button name="buscar" type="submit">Buscar</button>
    </form>

<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">last_update</th>
            </tr>
        </thead>
            <tbody>
                

<?php

while ($datos = mysqli_fetch_assoc($resultado)){
    echo "
        <tr>
        <td class='noBorder'>{$datos['category_id']}</td>
        <td class='noBorder'>{$datos['name']}</td>
        <td class='noBorder'>{$datos['last_update']}</td>
        </tr>";
}
?>
            </tbody>
        </table>
    </div>
</div>;
<?php require_once 'partes/foot.php';?>