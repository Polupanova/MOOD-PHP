<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php foreach($messages as $message) : ?>
        <tr>
            <td><?php echo $message->$_POST['name']; ?></td>
            <td><?php echo $message->$_POST['email']; ?></td>
            <td><?php echo $message>$_POST['message']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
