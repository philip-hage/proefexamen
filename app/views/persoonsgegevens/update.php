<?php var_dump($data) ?>

<?php require APPROOT . '/views/includes/Header.php'; ?>
<form class="form-group" action="<?= URLROOT; ?>/persoonsgegevens/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input class="form-control" type="email" name="Email" value="<?php echo $data['row']->Email; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?= $data['row']->Id; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Verstuur">
                </td>
            </tr>
        </tbody>
    </table>
</form>