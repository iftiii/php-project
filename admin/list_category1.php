<div class="input-group">
                        <label>Select Category</label>
                        <form method="post" action="category_action.php" >
                           
                            <select class="form-select" aria-label="Default select example">
                            <?php
                            foreach($results as $value){?>
                                 <option value="<?php echo $value['category_name']; ?>"><?php echo $value['category_name']; ?></option>
                            <?php } ?>
                            </select>
                            
                             </div>