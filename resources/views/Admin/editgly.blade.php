@extends('Admin.public.public')
@section('title','后台管理员修改')
@section('main')
<div class="mws-panel grid_8">
                	
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admingly/{{$data->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">姓名</font></font></label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="name" value="{{$data->name}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">密码</font></font></label>
                    				<div class="mws-form-item">
                    					<input type="password" class="small" name="password">
                    				</div>
                    			</div>
                    			
                    			
                    		</div>
                    		<div class="mws-button-row">
                    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="修改" class="btn btn-danger"></font>
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection