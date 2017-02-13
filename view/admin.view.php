<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php foreach($messages as $message) : ?>
        <tr>
            <td><?=htmlspecialchars($message->name);?></td>
            <td><?=htmlspecialchars($message->email);?></td>
            <td><?=htmlspecialchars($message->message);?></td>
        </tr>
    <?php endforeach; ?>
</table>
