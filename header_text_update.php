<style>
	#submit {
		width: 100px;
		height: 30px;
		line-height: 30px;
		background:#F5F5F5;
		border: 1px solid #E5E5E5;
		box-shadow: 1px 1px 1px #444;
		border-radius: 2px;
		float: right;
		margin-right: 10px;
		font-size: 13px;
		font-weight: bold;
		text-align: center;
		color:#090;
		cursor: pointer;	
	}
	#submit:hover {
		box-shadow: 2px 5px 5px #333333;	
	}
</style>
<head>
		<script src="editor/js/jquery-1.7.2.min.js"></script>
        <script src="editor/ckeditor/ckeditor.js"></script>
        <script src="editor/ckeditor/adapters/jquery.js"></script>
		<title>Header Text Update</title>
</head>
        <script>
            $(function() {
                $('textarea.ckeditor').ckeditor({
                    filebrowserBrowseUrl : 'kcfinder/browse.php?type=files',
                    filebrowserImageBrowseUrl : 'kcfinder/browse.php?type=images',
                    filebrowserFlashBrowseUrl : 'kcfinder/browse.php?type=flash',
                    filebrowserUploadUrl : 'kcfinder/upload.php?type=files',
                    filebrowserImageUploadUrl : 'kcfinder/upload.php?type=images',
                    filebrowserFlashUploadUrl : 'kcfinder/upload.php?type=flash'
                });
            })
        </script>
		<?php
			$id2 = $_REQUEST['id'];
			$slidnum = $_REQUEST['slidnum'];
			require_once "../config.php";
		?>
        <?php echo "<form action='header_text_update_action.php?id=$id2 && slid=$slidnum' method='post' name='edit'>";?>        
        	<textarea name="edited_text" class="ckeditor">
				<?php
					$sql = "select * from logo";
					$result = $db->query($sql);
					$data = mysqli_fetch_array($result);
					if($data[2]!=""){
						echo $data[2];
					}
				?>
            </textarea><br>
           <input type="button" value="Back to Home" onclick="location.href='update_header_contact.php'"/> <input type="submit" id="submit" value="Submit" name="sub">
            
        </form>