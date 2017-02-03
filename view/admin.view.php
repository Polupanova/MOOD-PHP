<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php foreach($fields as  $fields) : ?>
        <tr>
            <td><?php echo $fields['name']; ?></td>
            <td><?php echo $fields['email']; ?></td>
            <td><?php echo $$fields['message']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
