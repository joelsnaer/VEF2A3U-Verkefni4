<div class="container">
    <!-- add song form -->
    <div class="box">
        <h3>Add a image</h3>
        <form action="<?php echo URL; ?>songs/addimage" method="POST">
            <label>Image Name</label>
            <input type="text" name="name" value="" required />
            <label>Image Path</label>
            <input type="text" name="path" value="" required />
            <label>Image Text</label>
            <input type="text" name="text" value="" />
            <input type="submit" name="submit_add_image" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of images: <?php echo $amount_of_songs; ?></h3>
        <h3>List of images (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Path</td>
                <td>Text</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($images as $image) { ?>
                <tr>
                    <td><?php if (isset($image->imageID)) echo htmlspecialchars($image->imageID, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($image->imageName)) echo htmlspecialchars($image->imageName, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($image->imageText)) { ?>
                         <img src="<?php echo htmlspecialchars($image->imagePath, ENT_QUOTES, 'UTF-8'); ?>" style="width:128px;height:128px;">
                        <?php } ?>
                    </td>
                    <td><?php if (isset($image->imageText)) echo htmlspecialchars($image->imageText, ENT_QUOTES, 'UTF-8'); ?></td>

                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
