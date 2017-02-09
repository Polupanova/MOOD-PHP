<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php foreach($messages as $message) : ?>
        <tr>
            <td><?php echo  $message->name; ?></td>
            <td><?php echo  $message->email; ?></td>
            <td><?php echo  $message->message; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
