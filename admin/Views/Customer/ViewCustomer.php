<div>
    <h2>All Customers</h2>
    <table class="table ">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Username </th>
                <th class="text-center">Email</th>
                <th class="text-center">Contact Number</th>
                <th class="text-center">Joining Date</th>
            </tr>
        </thead>
        <?php
            $count = 1;
            foreach ($customers as $user) {
        ?>
            <tr>
                <td class="text-center"><?=$count?></td>
                <td class="text-center"><?=$user['username']?></td>
                <td class="text-center"><?=$user['email']?></td>
                <td class="text-center"><?=$user['phone']?></td>
                <td class="text-center"><?=$user['user_created_at']?></td>
            </tr> 
        <?php $count++; }?>
       

    </table>
</div>