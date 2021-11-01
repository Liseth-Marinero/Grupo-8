<table class="table table-borderless table-responsive-xl">
    <thead class="bg-info text-white cHead">
        <tr>
            <th>N°</th>
            <th>nombre</th>
            <th>Descripcion</th>
            <th>precio compra</th>
            <th>precio venta</th>
            <th>categoria</th>
            <th>cantidad</th>
            <th colspan="2">
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataProducto as $result) : ?>
            <tr class="cHead">
                <td> <?php echo $cont += 1; ?></td>
                <td> <?php echo $result['nombre_producto']; ?></td>
                <td>
                <?php echo $result['descripcion']; ?>
                </td>
                <td>
                <?php echo $result['precio_compra']; ?>
                </td>
                <td> <?php echo $result['precio_venta']; ?></td>
                <td> <?php echo $result['categoria']; ?></td>
                <td> <?php echo $result['cantidad']; ?></td>
                <td>
                    <a href="" class="btn btn-success upd-uuser" data-toggle="modal" id_user="<?php echo $result['id']; ?>" > <i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <a href="" class="btn btn-danger btnDrop-producto exit-sys3 " id_producto="<?php echo $result['id']; ?>"> <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>