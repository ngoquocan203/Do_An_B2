<!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Câu hỏi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm câu hỏi</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" action="">
							
							<div class="row" style="margin-bottom:40px;">	
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Nội dung câu hỏi </label>
										{{-- <input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="back/img/new_seo-10-512.png"> --}}
					                    <input type="file" name="image" class="form-control" placeholder="Enter Name" id="upload_file" onchange="getImagePreview(event)">
					                   
										<div id="preview"></div>
									</div>
									<div class="form-group" >
										<label>Đáp án đúng</label>
										<input required type="text" name="dapandung" class="form-control">
									</div>
									
									<div class="form-group" >
										<label>Loại câu hỏi</label>
										<select required name="loaicauhoi" class="form-control">
											@foreach($loaicauhoi as $tl)
												<option value="{{$tl->id}}">{{$tl->id}} ({{$tl->loaicauhoi}})</option>
											@endforeach
					                    </select>
									</div>
									
									@if(session('thongbao'))
									<div class="alert alert-success">
										{{session('thongbao')}}
									</div>
								@endif 
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('backend/cauhoi')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@include('backend.layout.footer')
	<script>
		
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});

		function getImagePreview(event)
		  {
		    var image=URL.createObjectURL(event.target.files[0]);
		    var imagediv= document.getElementById('preview');
		    var newimg=document.createElement('img');
		    imagediv.innerHTML='';
		    newimg.src=image;
		    newimg.width="500";
		    imagediv.appendChild(newimg);
		  }
	</script>	
</body>

</html>
