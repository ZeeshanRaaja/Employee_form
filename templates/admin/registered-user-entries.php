<div class="wrap">
    <table class="wp-list-table widefat fixed striped table-view-list posts">
        <thead>
            <tr>
                <th>
                    Profile
                </th>
                <th>
                    Email
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Date of Birth
                </th>
            </tr>
        </thead>
        <tbody id="the-list">
            <?php
            if( !empty($result) ){

                foreach ($result as $key => $value) {
                    echo '<tr class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized">';
                    $temp = '';
                    $incr = 1;
                    foreach ($value as $nested_key => $nested_value) {
                        if($nested_key == 'id'){
                            $temp = $nested_value;
                            continue;
                        }
                        if($nested_key == 'name'){
                            continue;
                        }
                        if($nested_key == 'image_url'){
                            include plugin_dir_path( __FILE__ ) . '/entries-edit-delete.php';
                        }
                        else{
                            echo '<td id=val-'. $temp . "-" . ++$incr .'>';
                            echo $nested_value;
                            echo '</td>';
                        }
                    }
                    echo '</tr>';
                    $temp = '';
                }

            }
            ?>
        </tbody>
        
    </table>
</div>