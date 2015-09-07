<?php
	echo frontend_breadcrumb('article_category',array('level >=' => 1,'lft <=' => $_category['lft'], 'rgt >=' => $_category['rgt']), 'item');
	if(isset($_children) && count($_children)){
		$str ='<ul>';
		foreach($_children as $key => $val){
			$str = $str.'<li><h3><a href="'.frontend_link_menu($val['route'], $val['alias'], $val['id'], '68').'" title="'.htmlspecialchars($val['title']).'">'.$val['title'].'</a></h3></li>';
		}
		$str = $str.'</ul>';
		echo $str;
	}
	
	echo (isset($pagination) && !empty($pagination))?$pagination:'';
	
	print_r($_item); 
?>				<form method="post" action ="">
					<section class="block">
						<label class="item">
							<p class="label">Họ tên:</p>
							<input type="text" name="data[fullname]" value="<?php echo isset($_post['fullname'])?$_post['fullname']:''; ?>" class="txtText">
						</label>
						<label class="item">
							<p class="label">Email:</p>
							<input type="text" name="data[email]" value="<?php echo isset($_post['email'])?$_post['email']:''; ?>" class="txtText">
						</label>
						<label class="item">
							<p class="label">Nội dung:</p>
							<textarea name="data[content]" ></textarea>
						</label>
						
						<section class="action">
								<p class="label">Thao tác:</p>
								<section class="group">
									<input type="submit" name="comment" value="Bình luận" />
									<input type="reset" value="Làm lại" />
								</section>
						</section>
					</section><!--end block-->
				</form>
