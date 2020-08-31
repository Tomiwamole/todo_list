<?php include './connect.php'; ?>

<?php
$query = "SELECT * FROM tasks ORDER BY DONE ASC, ID DESC";
$result = mysqli_query($connect, $query);
$rows = mysqli_num_rows($result);

if ($rows == 0) {
    ?>

    <div class="text-center">
        <h4 style="font-weight: bold; text-decoration: underline">No Tasks currently</h4>
    </div>

    <?php
}

while ($ans = mysqli_fetch_assoc($result)) {
    ?>
    <li <?php 
        if($ans['done'] == 1){
            ?>
        class="completed"
        <?php
        }
    ?>>
        <?php 
            if($ans['done'] != 1){
                ?>
        <i class="fa fa-pencil" style="cursor: pointer; font-size: 1.438rem; font-weight: 600; width: 1.25rem; height: 1.25rem; line-height: 20px; text-align: center; color: #405189 !important; margin-right: 10px; text-decoration: none;" id="edit<?php echo $ans['id']; ?>" onclick="show(<?php echo $ans['id']; ?>)"></i>
        
        <i class="fa fa-arrow-left" style="cursor: pointer; font-size: 1.438rem; font-weight: 600; width: 1.25rem; height: 1.25rem; line-height: 20px; text-align: center; color: #405189 !important; margin-right: 10px; text-decoration: none; display: none;" id="back<?php echo $ans['id']; ?>" onclick="hide(<?php echo $ans['id']; ?>)"></i>
        <?php
            }
        ?>
        
         
        <div class="form-check" id="form<?php echo $ans['id']; ?>">
            <label class="form-check-label" style="font-size: 20px;">
                <input class="checkbox" type="checkbox" onchange="doneTask(<?php echo $ans['id']; ?>)" <?php 
                    if($ans['done'] == 1){ ?>
                       checked=""
                    <?php }
                ?>> <?php echo $ans['name']; ?> <i class="input-helper"></i>
            </label>
        </div>
        <div id="text<?php echo $ans['id']; ?>" style="display: none; width: 70%">
            <input type="text" class="form-control" value="<?php echo $ans['name']; ?>" id="input_task<?php echo $ans['id']; ?>">
            <button onclick="editTask(<?php echo $ans['id']; ?>)">Submit</button>
        </div>
        <i class="remove mdi mdi-close-circle-outline" onclick="deleteTask(<?php echo $ans['id']; ?>)"></i>
        
    <?php
}
?>
        <script src="functions.js"></script>