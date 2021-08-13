<?php require_once 'partes/head.php';?>
<?php require_once 'partes/menu.php';?>

<form action="">

        <h2><?php echo $pagina?></h2>

            <div class="input">
                <input type="text" name="nombre" id="name">
                <label for="password">Ingrese un nombre</label>
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
            <th scope="col">First</th>
            <th scope="col">Last</th>
            </tr>
        </thead>
            <tbody>
                

<?php

while ($datos = mysqli_fetch_assoc($resultado)){
    echo "
        <tr>
        <td class='noBorder'>{$datos['actor_id']}</td>
        <td class='noBorder'>{$datos['first_name']}</td>
        <td class='noBorder'>{$datos['last_name']}</td>
        </tr>";
}
?>
            </tbody>
        </table>
    </div>
</div>;
<?php require_once 'partes/foot.php';?>