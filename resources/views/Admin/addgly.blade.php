@extends('Admin.public.public')
@section('title','添加管理员')
@section('main')
<div class="mws-panel grid_8">
                	
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admingly" method="post">
                        {{csrf_field()}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">姓名</font></font></label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="name">
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
                    			<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="提交" class="btn btn-danger"></font>
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection()